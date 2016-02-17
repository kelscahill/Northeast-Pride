module.exports = function(grunt) {

    // Paths you can change:
    var siteConfig = {
        outputFolder: 'httpdocs/wp-content/themes/nepride/',            // output from build processes
        buildFolder: 'build/',
        siteURL: "http://localhost:8888/"       // used for YSlow, validation, uncss
    };

    var allTemplates = ["<%= config.outputFolder %>**/*.html", "<%= config.outputFolder %>**/*.php", "<%= config.outputFolder %>**/*.ejs"];

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        config: siteConfig,
        concat: {
            css: {
                src: [
                    '<%= config.buildFolder %>css/*'
                ],
                dest: '<%= config.outputFolder %>css/styles.css'
            },
            js: {
                separator: ";",
                src: [
                    '<%= config.buildFolder %>js/*'
                ],
                dest: '<%= config.outputFolder %>js/all.js'
            }
        },
        cssmin: {
            css: {
                src: '<%= config.outputFolder %>css/styles.css',
                dest: '<%= config.outputFolder %>css/styles.min.css'
            }
        },
        uglify: {
            js: {
                drop_console: true,
                files: {
                    '<%= config.outputFolder %>js/all.min.js': [ '<%= config.outputFolder %>js/all.js' ]
                }
            }
        },
        sass: {
            dist: {
                options: {
                    includePaths: [ '<%= config.buildFolder %>sass' ]
                },
                files: {
                    '<%= config.buildFolder %>css/screen.css': '<%= config.buildFolder %>sass/screen.scss'
                }
            }
        },
        pngmin: { // Task
            images: { // Target
                options: { // Target options
                    quality: { min: 50, max: 60},
                    ext: ".png",
                    iebug: false,
                    force: true,
                    transbug: false
                },
                files: [{
                    expand: true,
                    cwd: '<%= config.buildFolder %>images/', // required option
                    src: ['**/*.png'],
                    dest: '<%= config.outputFolder %>images/'
                }]
            },
        },
        dss: {
            docs: {
                files: {
                    '<%= config.outputFolder %>styleguide/': '<%= config.buildFolder %>sass/screen.scss'
                },
                options: {
                    template: '<%= config.buildFolder %>dss-styleguide/'
                }
            }
        },
        watch: {
            sassify: {
                files: [ '<%= config.buildFolder %>sass/*'],
                tasks: ['sass', 'dss' ]
            },
            images: {
                files: [ '<%= config.buildFolder %>images/**'],
                tasks: ['pngmin' ],
                options: {
                    livereload: true,
                },
            },
            css: {
                files: [ '<%= config.buildFolder %>css/*'],     
                tasks: [ 'concat:css', 'cssmin' ],
                options: {
                    livereload: true,
                },
            },
            js: {
                files: [ '<%= config.buildFolder %>js/*.js'],
                tasks: ['concat:js', 'uglify' ],
                options: {
                    livereload: true,
                },
            },
            html: {
                files: [ '<%= config.outputFolder %>**/*.html', '<%= config.outputFolder %>**/*.php', '<%= config.outputFolder %>**/.{png,jpg,gif,svg,ico}'],
                options: {
                    livereload: true,
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-pngmin');
    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-git');
    grunt.loadNpmTasks('grunt-dss');
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-html-validation');
    grunt.loadNpmTasks('grunt-uncss');
    grunt.loadNpmTasks('grunt-yslow');
    grunt.loadNpmTasks('grunt-aws-s3');
    grunt.loadNpmTasks('grunt-open');

    grunt.registerTask('test-performance', [ 'yslow' ]);
    grunt.registerTask('styleguide', ['dss'] );
    grunt.registerTask('default', ['sass', 'pngmin', 'concat:css', 'cssmin:css', 'concat:js', 'uglify:js', 'dss' ]);
    grunt.registerTask('start', [ 'watch', 'open:dev' ]);
    grunt.registerTask('compile', [ 'default' ]);
};