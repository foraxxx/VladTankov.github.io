// function clickEvent(trigger) {
//   let tabs = document.querySelectorAll('section[data-id]');

//   for (let tab of tabs)
//     if (tab.dataset.id == trigger.dataset.id)
//       tab.style.display = 'block';
//     else
//       tab.style.display = 'none';
// }


document.querySelectorAll('.MyLink').forEach((item) => 
	item.addEventListener('click', function (e) {
		e.preventDefault();
		const id = e.target.getAttribute('href').replace('#', '');

		document.querySelectorAll('.MyLink').forEach(
			(child) => child.classList.remove('MyLink--active')
		);
		document.querySelectorAll('.content__table').forEach(
			(child) => child.classList.remove('content__table--active')
			);

		item.classList.add('MyLink--active');
		document.getElementById(id).classList.add('content__table--active');
	})
);

document.querySelector('.MyLink').click();




