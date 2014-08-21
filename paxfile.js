module.exports = function() {
    'use strict';

    var cmd = this.require('./utils/cmd'),
        Q = this.require('q'),
        context = this;

    this.task('init', function(logger) {
        logger.head('Installing package from composer...');

        return context.exec(['php', 'composer', 'install'], logger);
    });

    this.task('serve', function(logger) {
        logger.head('Serve standalone http...');

        if (!this.argv.t) {
            this.argv.t = './www';
        }
        return context.exec(['php', 'serve'], logger);
    });

};
