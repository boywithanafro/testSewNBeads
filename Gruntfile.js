module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    /*uglify: {
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    }*/

    connect: {
    server: {
      options: {
        hostname: '*',
        keepalive: true,
        port: 9001,
        base: './',
        open: {
                target: 'http://127.0.0.1:9001'
            }
      }
    }
  }

  });

  // Load the plugin that provides the tasks:
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-connect');

  // Default task(s).
  grunt.registerTask('default', ['connect']);

};