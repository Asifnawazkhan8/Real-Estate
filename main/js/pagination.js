

const ul = document.querySelector('#demo');
console.log(ul);
let allpages = 10;

function pg(allpages, page) {
    let li = '';

    let beforePages = page - 1;
    let afterPages = page + 1;
    let liActive;

    if (page > 1) {
        li += ` <li class="page-item" ">
        <a style="background-color: black; width:80px;" class="page-link" href="#" aria-label="Previous" onclick="pg(allpages, ${page-1})">
            <span aria-hidden="true">«</span>
            <span class="sr-only">Previous</span>
        </a>
    </li>
       `;
    }else{
        return 0;
    }

            for (let pageLength = beforePages; pageLength <=  afterPages; pageLength++) {

        if (page == pageLength) {
            liActive = 'active';

        } else {
            liActive = '';
        }

        li += `<li class="page-item ${liActive}" onclick="pg(allpages, ${pageLength})"><a style="background-color: black; width:80px;" class="page-link" href="#">${pageLength}</a></li>`;
    }

    if (page < allpages) {
        li += ` <li class="page-item" >
        <a style="background-color: black; width:80px;" class="page-link" href="#" aria-label="Next" onclick="pg(allpages, ${page+1})">
            <span  aria-hidden="true">»</span>
            <span class="sr-only">Next</span>
        </a>
    </li>`;
    } else{
        return allpages;
    }

    ul.innerHTML = li;
}

pg(allpages, 2);






// Get the pagination links
const paginationLinks = document.querySelectorAll('.pagination .page-link');
console.log(paginationLinks);

// Add event listeners to each pagination link
paginationLinks.forEach((link) => {
  link.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent the default link behavior
    
    // Remove the active class from all pagination links
    paginationLinks.forEach((link) => {
      link.parentElement.classList.remove('active');
    });
    
    // Add the active class to the clicked pagination link
    link.parentElement.classList.add('active');
    
    // Perform your desired actions based on the clicked page
    const page = parseInt(link.innerText);
    // Example: You can load new content based on the page number
    
    // Scroll to the top of the page (optional)
    window.scrollTo(0, 0);
  });
});





// const data = [10]; // Your array of data
// const itemsPerPage = 6; // Number of items to display per page
// let currentPage = 4; // Initially set the current page to 1

// // // Function to display data for the current page
//  function displayData() {
//   const startIndex = (currentPage - 1) * itemsPerPage;
//   const endIndex = startIndex + itemsPerPage;
//   const pageData = data.slice(startIndex, endIndex);

// const dataContainer = document.getElementsByClassName('.theme-pagination');
//    dataContainer.innerHTML = 'nav'; // Clear previous content
//    pageData.forEach(item => {
// //     // Create and append elements for each item
//     const itemElement = document.createElement('div');
//     itemElement.textContent = item;
//   dataContainer.appendChild('itemElement');
//    });

// //   // Call the function to render pagination links
//    renderPagination();
//  }

// // // Function to render pagination links
//  function renderPagination() {
//   const totalPages = Math.ceil(data.length / itemsPerPage);
//   const paginationContainer = document.getElementsByClassName('pagination');
//   paginationContainer.innerHTML = 'totalPages'; // Clear previous content

//   for (let i = 1; i <= totalPages; i++) {
//   const pageLink = document.createElement('a');
//   pageLink.href = '#';
//   pageLink.textContent = i;
//   pageLink.addEventListener('click', function () {
//   goToPage(i);
//      });
//      paginationContainer.appendChild(pageLink);
//   }
//  }

// // // Function to handle page navigation
//  function goToPage(page) {
//    currentPage = page;
//    displayData();
//  }

// // // Call the initial displayData function
//  displayData();
