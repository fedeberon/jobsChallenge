module.exports = function(app) {
    var jobRequestController = require('../controllers/jobRequestController');

    app.route('/api/defender/:id/')
        .get(jobRequestController.get);

    app.route('/api/defender/')
        .post(jobRequestController.save);

};