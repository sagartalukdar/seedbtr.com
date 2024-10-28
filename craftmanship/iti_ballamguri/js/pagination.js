
// Function to paginate items
function paginateItems(pageNumber, itemsPerPage) {
    var items = document.querySelectorAll('.paginationItems');
    var startIndex = (pageNumber - 1) * itemsPerPage;
    var endIndex = startIndex + itemsPerPage;
  
    items.forEach(function (item, index) {
      if (index >= startIndex && index < endIndex) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }
  
  
  
  // Function to fetch paginated items from the server
  function fetchPaginatedItems(pageNumber, itemsPerPage) {
    // Make an AJAX request to the server to fetch paginated items
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Update the content of the itemList div with the fetched items
          document.getElementById('itemList').innerHTML = xhr.responseText;
        } else {
          console.error('Error fetching paginated items:', xhr.status);
        }
      }
    };
    xhr.open('GET', 'get_paginated_items.php?page=' + pageNumber + '&itemsPerPage=' + itemsPerPage, true);
    xhr.send();
  }
  
  
  
  // Function to generate pagination links
  function generatePagination(totalItems, itemsPerPage) {
    var totalPages = Math.ceil(totalItems / itemsPerPage);
    var pagination = document.getElementById('pagination');
  
    // Clear existing pagination buttons
    pagination.innerHTML = '';
  
    // Function to update active class
    function updateActiveClass(pageNumber) {
      var links = document.querySelectorAll('#pagination a');
      links.forEach(function (link) {
        link.classList.remove('active');
        if (link.textContent === pageNumber.toString()) {
          link.classList.add('active');
        }
      });
    }
  
    // Previous button
    var prevButton = document.createElement('a');
    prevButton.href = '#';
    prevButton.textContent = 'Previous';
    prevButton.addEventListener('click', function (event) {
      event.preventDefault();
      var currentPage = parseInt(getParameterByName('page')) || 1;
      if (currentPage > 1) {
        prevButton.style.display = 'inline-block';
        window.location.href = '?page=' + (currentPage - 1);
      } else {
        prevButton.style.display = 'none';
      }
    });
    pagination.appendChild(prevButton);
  
    // Numbered pagination links
    var maxPages = 4; // Maximum number of pages to display
    var startPage = 1;
    var endPage = totalPages;
    
    if (totalPages > maxPages) {
      var currentPage = parseInt(getParameterByName('page')) || 1;
      var offset = Math.floor(maxPages / 2);
      startPage = Math.max(currentPage - offset, 1);
      endPage = Math.min(startPage + maxPages - 1, totalPages);
      if (endPage - startPage < maxPages - 1) {
        startPage = Math.max(endPage - maxPages + 1, 1);
      }
    }
  
    for (var i = startPage; i <= endPage; i++) {
      var link = document.createElement('a');
      link.href = '?page=' + i;
      link.textContent = i;
      pagination.appendChild(link);
    }
  
    // Next button
    var nextButton = document.createElement('a');
    nextButton.href = '#';
    nextButton.textContent = 'Next';
    nextButton.addEventListener('click', function (event) {
      event.preventDefault();
      var currentPage = parseInt(getParameterByName('page')) || 1;
      if (currentPage < totalPages) {
        nextButton.style.display = 'inline-block';
        window.location.href = '?page=' + (currentPage + 1);
      } else {
        nextButton.style.display = 'none';
      }
    });
    pagination.appendChild(nextButton);
  
    // Initially set the active class for the current page
    var currentPage = parseInt(getParameterByName('page')) || 1;
    updateActiveClass(currentPage);
  }
  
  
  // Function to get URL parameter by name
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
  
  // Function to handle URL parameters and load corresponding page
  function handleUrlParams() {
    var pageNumber = parseInt(getParameterByName('page')) || 1;
    paginateItems(pageNumber, itemsPerPage);
  }
  
  
  
  // Call the pagination functions
  var itemsPerPage = 6;  // Change this to set the number of items per page
  handleUrlParams(); // Initial page load based on URL parameters
  generatePagination(document.querySelectorAll('.paginationItems').length, itemsPerPage);
  
  
  // <div id="pagination">
  //   <a href="#">Previous</a>
  //   <a href="?page=1">1</a>
  //   <a href="?page=2">2</a>
  //   <a href="?page=3">3</a>
  //   <a href="?page=4">4</a>
  //   <a href="#">Next</a>
  // </div>
  
  