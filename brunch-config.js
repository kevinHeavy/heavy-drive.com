// See http://brunch.io for documentation.
exports.config = {
    paths: {
        watched: ["app/Resources/frontend/", "app/Resources/backend/", "bower_components"],
        public: "web"
    },
    files: {
        javascripts: {
            joinTo: {
                "javascripts/front.js": /frontend/,
                "javascripts/back.js": [
                    /backend/
                ],
                "javascripts/vendor.js": /^bower/,
            }
        },
        stylesheets: {
            joinTo: {
                "styles/front.css": /frontend/,
                "styles/back.css" : [
                    /backend/,
                ],
                "styles/vendor.css": [
                    "bower_components/bootstrap-sass/assets/stylesheets/bootstrap",
                    "bower_components/bootstrap/dist/css/bootstrap.min.css",
                    "bower_components/components-font-awesome/font-awesome.min.css",
                    "bower_components/bootstrap-social/bootstrap-social.css"
                ]
            }
        }
    },
    modules: {
        nameCleaner: function(path) {
            return path
                .replace('app/Resources/', '')
                .replace('/scripts/', '/');
        }
    },
    plugins: {
        sass: {
            mode: 'ruby',
        },
        cleancss: {
            keepSpecialComments: 0,
            removeEmpty: true,
            removeWhitespace: true
        },
        uglify: {
            mangle: false,
            compress: {
                global_defs: {
                    DEBUG: false
                }
            }
        }
    },
    overrides: {
        production: {
            optimize: true,
            sourceMaps: false
        }
    }
};