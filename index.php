<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csv + ajax</title>
</head>

<body>
    <button id="btn_realize">todo realize</button>
    <!-- formにはactionもmethodも置いていません。 これによりform単体としては機能は持たないものなり、画面遷移が行われません。 -->
    <form>
        <fieldset>
            <legend>csv + ajax</legend>
            <div>
                todo: <input type="text" name="todo" id="todo">
            </div>
        </fieldset>
    </form>
    <!-- formの外にsubmit用のボタンを置いています。どうやらform内のボタンを使用すると画面遷移が行われるようです。 -->
    <div>
        <button id="btn_submit">submit</button>
    </div>


    <table>
        <thead>
            <tr id="todo_insert">
                <th>todo</th>
            </tr>
        </thead>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/system.js"></script>
</body>

</html>