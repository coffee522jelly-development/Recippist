      $(function(){
          // Ajax button click
          $('#search').on('click',function(){
              $.ajax({
                  url:'./request.php',
                  type:'POST',
                  data:{
                      'name':$('#name').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });

          $('#search2').on('click',function(){
              $.ajax({
                  url:'./request.php',
                  type:'POST',
                  data:{
                      'number':$('#number').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });

          $('#search3').on('click',function(){
              $.ajax({
                  url:'./requestAll.php',
                  type:'POST',
                  data:{
                      'name':$('#name2').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#Search').on('click',function(){
              $.ajax({
                  url:'./Search.html',
                  type:'GET',
                  data:{
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });

          $('#delete').on('click',function(){
              $.ajax({
                  url:'./DeleteTable.html',
                  type:'GET',
                  data:{
                }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
                  $('#DeleteAll').on('click',function(){
                      $.ajax({
                          url:'./DeleteTable.php',
                          type:'POST',
                          data:{
                            'dbtable':$('#dbtable').val()
                          }
                      })
                      // Ajaxリクエストが成功した時発動
                      .done( (data) => {
                          $('.result').html(data);
                          console.log(data);
                      })
                      // Ajaxリクエストが失敗した時発動
                      .fail( (data) => {
                          $('.result').html(data);
                          console.log(data);
                      })
                      // Ajaxリクエストが成功・失敗どちらでも発動
                      .always( (data) => {

                      });
                  });
                  $('#renumber').on('click',function(){
                      $.ajax({
                          url:'./renumber.php',
                          type:'POST',
                          data:{
                            'dbtable2':$('#dbtable2').val()
                          }
                      })
                      // Ajaxリクエストが成功した時発動
                      .done( (data) => {
                          $('.result').html(data);
                          console.log(data);
                      })
                      // Ajaxリクエストが失敗した時発動
                      .fail( (data) => {
                          $('.result').html(data);
                          console.log(data);
                      })
                      // Ajaxリクエストが成功・失敗どちらでも発動
                      .always( (data) => {

                      });
                  });
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });

          $('#Setting').on('click',function(){
              $.ajax({
                  url:'./Settings.html',
                  type:'GET',
                  data:{
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#allview').on('click',function(){
              $.ajax({
                  url:'./allview.php',
                  type:'POST',
                  data:{
                      'number':$('#number').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  $('.result2').remove();
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#allviewBM').on('click',function(){
              $.ajax({
                  url:'./allviewBM.php',
                  type:'GET',
                  data:{
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  $('.result2').remove();
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          /*$('#Recipe').on('click',function(){
              $.ajax({
                  url:'Recipe.php',
                  type:'GET',
                  data:{
                      'number':$('#number').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });*/
          $('#readid').on('click',function(){
              $.ajax({
                  url:'./Read.php',
                  type:'POST',
                  data:{
                      'number':$('#number').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
                  Read();
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#submit').on('click',function(){
              $.ajax({
                  url:'./Submit.html',
                  type:'POST'
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#submitBM').on('click',function(){
              $.ajax({
                  url:'./SubmitBM.html',
                  type:'POST'
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#upload').on('click',function(){
              $.ajax({
                  url:'./photo%20uploader/uploader.php',
                  type:'POST',
                  data:{
                      'number':$('#number').val()
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
                  Read();
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#next').on('click',function(){
              $.ajax({
                  url:'./flowcharts.php',
                  type:'POST',
                  data:{
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
                  Read();
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#prev').on('click',function(){
              $.ajax({
                  url:'./flowcharts.php',
                  type:'POST',
                  data:{
                  }
              })
              // Ajaxリクエストが成功した時発動
              .done( (data) => {
                  $('.result').html(data);
                  console.log(data);
                  Read();
              })
              // Ajaxリクエストが失敗した時発動
              .fail( (data) => {
                  $('.result').html(data);
                  console.log(data);
              })
              // Ajaxリクエストが成功・失敗どちらでも発動
              .always( (data) => {

              });
          });
          $('#myRecipe').on('click',function(){
            $.ajax({
                url:'./myRecipeSort.php',
                type:'GET',
                data:{
                }
            })
            // Ajaxリクエストが成功した時発動
            .done( (data) => {
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log("通信失敗");
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });
        });
      });
