var app = new Vue(
  {
    el: "#app",
    data: {
      stanze: []
    },
    mounted: function() {
      axios
        .get("server.php")
        .then(
          function(response) {
            console.log(response.data);
            app.stanze = response.data;
          }
        );
    }
  }
);
