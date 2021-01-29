 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
     <title>Stanze hotel con Vue</title>
   </head>
   <body>
     <table class="table" id="app">
        <thead>
          <tr>
            <td v-for="(value, key) in stanze[0]">{{ key }}</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="stanza in stanze">
            <td v-for="(value, key) in stanza">{{ value }}</td>
          </tr>
        </tbody>
     </table>
     <script src="js/script.js" charset="utf-8"></script>
   </body>
 </html>
