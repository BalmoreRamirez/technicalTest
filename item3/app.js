fetch('../item2.php')
    .then(response => response.json())
    .then(data => {
        console.log(data)
        const menuitems = data.menu.popup.menuitem;
        const tbody = document.querySelector('#menuitems tbody');
        menuitems.forEach(item => {
            const tr = document.createElement('tr');
            const value = document.createElement('td');
            const onclick = document.createElement('td');
            value.textContent = item.value;
            onclick.textContent = item.onclick;
            tr.appendChild(value);
            tr.appendChild(onclick);
            tbody.appendChild(tr);
        });
    })
    .catch(error => console.error(error));