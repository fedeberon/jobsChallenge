var databaseHelper = require('../dao/databaseHelper');

exports.getJobRequest = function(req, res) {
    var tweetRequest = tweetRequests.find(tweetRequest => tweetRequest.id === req.params.jobRequestId);
    res.json(tweetRequest);
};



exports.save = function(job, callback) {
    var sqlQuery = "INSERT INTO jobs (name, startTime) VALUES ('" + job.name + "', 'sysdate')";
    databaseHelper.doQuery(sqlQuery, function() {
        callback();
    });
};

var tweetRequests = [{
    id: '1',
    device_token: '1',
    hashtags: "#ios #swift"
}, {
    id: '2',
    device_token: '2',
    hashtags: "#android #kotlin"
}, {
    id: '3',
    device_token: '3',
    hashtags: "#backend #nodejs"
}];