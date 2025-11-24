const returnBtn = document.getElementById("return");
const input = document.getElementById("input");

const todos = JSON.parse(localStorage.getItem("todos"));

if (todos) {
  todos.forEach((todo) => {
    addTODO(todo);
  });
}

returnBtn.addEventListener("click", () => {
  window.location.href = "../index.php";
});

const form = document.getElementById("form");
form.addEventListener("submit", (e) => {
  // e.preventDefault();
  const todoText = input.value.trim();
  if (todoText) {
    addTODO();
    input.value = "";
    saveData();
  }
});

function addTODO(todo) {
  let text = input.value.trim();
  if (todo) {
    text = todo;
  }
  const ul = document.getElementById("ul");
  const li = document.createElement("li");
  li.innerText = text;
  li.classList.add("list-group-item");

  li.addEventListener("click", () => {
    li.remove();
    saveData();
  });

  li.addEventListener("contextmenu", (event) => {
    event.preventDefault();
    li.classList.toggle("text-decoration-line-through");
    saveData();
    console.log("aaa");
  });

  ul.appendChild(li);
}
function saveData() {
  const lists = document.querySelectorAll("li");
  let todos = [];
  lists.forEach((list) => {
    todos.push(list.innerText);
    localStorage.setItem("todos", JSON.stringify(todos));
    //localStorageは文字列形式で保存される。今後の扱いも考えてJSONで保存
  });
}
