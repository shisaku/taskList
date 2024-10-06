//初期表示時
document.addEventListener('DOMContentLoaded', (event: Event) => {
    //

    //行追加ボタンにクリックイベント付与
    const addRowButton = document.getElementById('addRowButton');
    addRowButton?.addEventListener('click', addTaskListRow);

    //行削除ボタンにクリックイベント付与
    const deleteRowButtons = Array.from(document.querySelectorAll('.deleteRowButton'));
    deleteRowButtons.forEach(deleteRowButton => deleteRowButton.addEventListener('click', () => deleteTaskListRow(deleteRowButton)));
});

//タスクリストの行のinputタグのname属性の型
type rowInputNamePropertyObj = {
    projectNm: string;
    taskNm: string;
    subtaskNm: string;
    detailNm: string;
    status: string;
};

//行追加処理
const addTaskListRow = function () {
    //tr追加
    const taskListTable: HTMLTableElement = document.getElementById('taskListTable') as HTMLTableElement;
    const addNewTrElement = taskListTable?.insertRow();
    addNewTrElement.setAttribute('id', `${currentMaxTaskDetailNoPlusOne()}`);

    //tdとその中身（input）を追加
    const tableRowNameProperty: rowInputNamePropertyObj = {
        projectNm: 'PROJECT_NM',
        taskNm: 'TASK_NM',
        subtaskNm: 'SUB_TASK_NM',
        detailNm: 'DETAIL_TASK_NM',
        status: 'STATUS',
    };

    for (const nameProperty in tableRowNameProperty) {
        const addNewTdElement: HTMLTableCellElement = addNewTrElement.insertCell();
        const addNewTdIntoInput = addNewTdElement.appendChild(createInputElementTypeText());
        addNewTdIntoInput.setAttribute('name', tableRowNameProperty[nameProperty]);
    }
    //tdとその中身（button）を追加
    const addNewTdElement = addNewTrElement.insertCell();
    const addNewButtonElement = addNewTdElement.appendChild(createButtonElementTypeButton());
    addNewButtonElement.className = 'deleteRowButton';
    addNewButtonElement.textContent = '-';
    addNewButtonElement.addEventListener('click', () => deleteTaskListRow(addNewButtonElement));
};

//行削除
const deleteTaskListRow = function (deleteRowButton: Element) {
    deleteRowButton.closest('tr')?.remove();
};

//<input type="text">の生成
const createInputElementTypeText = function (): HTMLInputElement {
    const inputElement = document.createElement('input');
    inputElement.type = 'text';
    return inputElement;
};

//<button type="button">の生成
const createButtonElementTypeButton = function (): HTMLButtonElement {
    const buttonElement = document.createElement('button');
    buttonElement.type = 'button';
    return buttonElement;
};

//現在の行数を取得する
const getCurrentAllRowNumber = function (): number {
    const tbody = document.getElementById('tbodySection') as HTMLTableElement;
    return tbody.rows.length;
};

//現在のTASK_DETAIL_NO+1した値を返却
const currentMaxTaskDetailNoPlusOne = async function () {
    try {
        const response = await fetch('http://localhost/taskListDetail/fetchTaskListDetailNo');
        const currentMaxTaskDetailNo = await response.json();
        return currentMaxTaskDetailNo;
    } catch (error) {
        console.error('Error:', error);
    }
};
