var dao = require('../dao/jobDao');

exports.get = function(req, res) {
    var id = req.params.id;
    console.log('en method with parameter ' + id);
    dao.get(id, function(job) {
        res.json(job);
    });
};


exports.save = function(req, res) {
   var job = {
       name : req.body.name
   };

   dao.save(job, function () {
       res.status(200).end();
   })
};

