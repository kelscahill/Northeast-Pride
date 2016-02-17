module.exports = function(grunt) {

    // Paths you can change:
    var siteConfig = {
        outputFolder: 'httpdocs/wp-content/themes/default/',            // output from build processes
        buildFolder: 'build/',
        siteURL: "http://localhost:9000/"       // used for YSlow, validation, uncss
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
                tasks: [ 'concat:css', 'cssmin', 'sftp:pushcss' ],
                options: {
                    livereload: true,
                },
            },
            js: {
                files: [ '<%= config.buildFolder %>js/*.js'],
                tasks: ['concat:js', 'uglify', 'sftp:pushjs' ],
                options: {
                    livereload: true,
                },
            },
            html: {
                files: [ '<%= config.outputFolder %>**/*.html', '<%= config.outputFolder %>**/*.php', '<%= config.outputFolder %>**/.{png,jpg,gif,svg,ico}'],
                options: {
                    livereload: true,
                }
            },
        },
        sftpCredentials: grunt.file.readJSON('sftp-config.json'),
        sftp: {
            options: {
                path: "<%= sftpCredentials.remote_path %>",
                host: "<%= sftpCredentials.host %>",
                username: "<%= sftpCredentials.user %>",
                privateKey: grunt.file.read(process.env.HOME+'/.ssh/id_rsa'),   // default key..
                //passphrase: 'secret phrase for your key',
                showProgress: true,
                createDirectories: true
            },
            pushcss: {
                files: [{
                    expand: true,
                    src: ['<%= config.outputFolder %>css/*.css'],
                    dest: '<%= config.outputFolder %>css/'
                }]
            },
            pushjs: {

                files: [{
                    expand: true,
                    src: ['<%= config.outputFolder %>js/*.js', '<%= config.outputFolder %>js/*.map', '<%= config.outputFolder %>js/*.min.js'],
                    dest: '<%= config.outputFolder %>js/'
                }]
            },
            pushimages: {

                files: [{
                    expand: true,
                    src: ['<%= config.outputFolder %>images/**/*.*'],
                    dest: '<%= config.outputFolder %>images/'
                }]
            },
            pushstyleguide: {

                files: [{
                    expand: true,
                    src: ['<%= config.outputFolder %>styleguide/**/*.*'],
                    dest: '<%= config.outputFolder %>styleguide/'
                }]
            },
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-pngmin');
    grunt.loadNpmTasks('grunt-dss');
    grunt.loadNpmTasks('grunt-ssh');

    //grunt.file.setBase('/')

    grunt.registerTask('styleguide', ['kss'] );
    grunt.registerTask('default', ['sass', 'pngmin', 'concat:css', 'cssmin:css', 'concat:js', 'uglify:js', 'dss' ]);
};