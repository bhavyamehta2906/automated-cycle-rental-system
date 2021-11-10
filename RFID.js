

var con = mysql.createConnection({
  host: "",
  user: "",
  password: "",
  database: ""
});

con_key.connect(function(err) {
  if (err) throw err;
  con.query("SELECT RFID_NO FROM cycle1", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
