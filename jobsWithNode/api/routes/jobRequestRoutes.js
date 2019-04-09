module.exports = function(app) {
    var tweetRequestController = require('../controllers/jobRequestController');

    app.route('/api/defender/:jobRequestId')
        .get(tweetRequestController.getJobRequest);

    app.route('/api/defender/')
        .post(tweetRequestController.save);


};