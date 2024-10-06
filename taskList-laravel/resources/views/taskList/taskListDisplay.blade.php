<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスクリスト</title>
    @vite(['resources/ts/taskListDisplay/defaultDisplay.ts'])
</head>
<body>
<table id="taskListTable">
  <thead>
    <tr>
      <th>プロジェクト名</th>
      <th>メインタスク</th>
      <th>サブタスク</th>
      <th>詳細タスク</th>
      <th>ステータス</th>
      <th><button type="button" id="addRowButton">+</button></th>
    </tr>
  </thead>
  <tbody id="tbodySection">
    @foreach($taskList as $oneTask)
    <tr id="{{ $oneTask->TASK_DETAIL_NO }}">
      <td><input type="text" value="{{$oneTask->PROJECT_NM}}"name="PROJECT_NM" ></td>
      <td><input type="text" value="{{$oneTask->TASK_NM}}" name="TASK_NM"></td>
      <td><input type="text" value="{{$oneTask->SUB_TASK_NM}}" name="SUB_TASK_NM"></td>
      <td><input type="text" value="{{$oneTask->DETAIL_TASK_NM}}" name="DETAIL_TASK_NM"></td>
      <td><input type="text" value="{{$oneTask->STATUS}}" name="STATUS"></td>
      <td><button type="button" class="deleteRowButton">-</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>

