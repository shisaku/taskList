document.addEventListener("DOMContentLoaded", (event: Event) => {
    //行追加ボタンにクリックイベント付与
    const addRowButton = document.getElementById("addRowButton");
    addRowButton?.addEventListener("click", addTaskListRow);
});

const addTaskListRow = function () {};
