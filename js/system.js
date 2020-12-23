$(function () {
    // txt_create.phpへのリクエストを行います。
    function textCreate() {
        $.ajax({
            type: "POST",
            url: "txt_create.php",
            data: {
                "todo": $("#todo").val(),
            }
        }).done(function () {
            tbodyCreate();
        }).fail(function () {
            // 通信失敗時の処理を記述
            console.log("error")
        });
    }

    // txt_read.phpへのリクエストを行います。成功時には表示部分を更新するようにしています。
    // 新規の書き込みだけでなく、最初の更新もjsから動作するようにしています。
    function tbodyCreate() {
        $("#todo_insert").empty();

        $.ajax({
            type: "POST",
            url: "txt_read.php",
        }).done(function (result) {
            jsonArray = JSON.parse(result);
            console.log(jsonArray);
            $("#todo_insert").append(`<th>todo</th>`)
            jsonArray.forEach(element => {
                $("#todo_insert").append(`<th>${element}</th>`)
            });
        }).fail(function () {
            // 通信失敗時の処理を記述
            console.log("error")
        });

    };

    // 画面遷移が行われないことが見えるように付けたボタンです
    $("#btn_realize").on("click", function () {
        $("#btn_realize").css("display", "none");
        tbodyCreate();
    })

    // form外につけたボタンの機能を定義しています。これによりリクエスト可能になります。
    $("#btn_submit").on("click", function () {
        textCreate();
    })

});
