module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        options: {
          // sourcemap: 'none',
          style: 'expanded'
        },
        
        files: {
          'assets/css/style.css': 'assets/sass/style.scss'
        }
      }
    },
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'assets/css/',
          src: ['*css', '!*min.css'],
          dest: 'assets/css/',
          ext: '.min.css'
        }]
      }
    },
    watch: {
      css: {
        files: ['assets/css/style.css'],
        tasks: ['cssmin']
      },
      sass:{
        files: ['assets/sass/style.scss'],
        tasks: ['sass']
       }
    }
  });


  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('compile', ['sass']);
  grunt.registerTask('min', ['cssmin']);
  grunt.registerTask('default', ['sass', 'cssmin']);
  grunt.registerTask('w', 'watch');





};