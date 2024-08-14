const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})


const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

document.getElementById('hideSubtitle').addEventListener('click', function() {
    const subtitle = document.getElementById('subtitle');
    subtitle.style.display = subtitle.style.display === 'none' ? 'block' : 'none';
    this.innerHTML = subtitle.style.display === 'none' ? '<i class="bx bx-chevron-down"></i>' : '<i class="bx bx-chevron-up"></i>';
});


//modal edit dan delete
document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editModal');
    var deleteModal = document.getElementById('deleteModal');

    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var namaPasien = button.getAttribute('data-nama');
        
        var form = document.getElementById('editForm');
        form.action = form.action.replace(':id', id);
        document.getElementById('nama_pasien').value = namaPasien;
    });

    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');

        var form = document.getElementById('deleteForm');
        form.action = form.action.replace(':id', id);
    });
});

// Get the current URL path
const currentPath = window.location.pathname;

// Loop through each sidebar link
allSideMenu.forEach(item => {
    const li = item.parentElement;

    // If the current path matches the link's href, add the 'active' class
    if (item.getAttribute('href') === currentPath) {
        li.classList.add('active');
    } else {
        li.classList.remove('active');
    }

    item.addEventListener('click', function () {
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

