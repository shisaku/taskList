<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスクリスト</title>
    @vite(['resources/js/app.ts'])
</head>
<body>
<table>
  <thead>
    <tr>
      <th>プロジェクト名</th>
      <th>メインタスク</th>
      <th>サブタスク</th>
      <th>詳細タスク</th>
      <th>ステータス</th>
    </tr>
  </thead>
  <tbody>
    @foreach($taskList as $oneTask)
    <tr>
      <td><input type="text" value="{{$oneTask->PROJECT_NM}}"name="PROJECT_NM_LINE_{{ $loop->iteration }}" id=""></td>
      <td><input type="text" value="{{$oneTask->TASK_NM}}" name="TASK_NM_LINE_{{ $loop->iteration }}"id=""></td>
      <td><input type="text" value="{{$oneTask->SUB_TASK_NM}}" name="SUB_TASK_NM_LINE_{{ $loop->iteration }}"id=""></td>
      <td><input type="text" value="{{$oneTask->DETAIL_TASK_NM}}" name="DETAIL_TASK_NM_LINE_{{ $loop->iteration }}"id=""></td>
      <td><input type="text" value="{{$oneTask->STATUS}}" name="STATUS_LINE_{{ $loop->iteration }}"id=""></td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="button" value="+" />
</body>
</html>