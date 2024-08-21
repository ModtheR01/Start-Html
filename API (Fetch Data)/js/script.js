// Fun 1 => Get Posts && Fetch URL
async function getPosts() { 
    // url in var 
    let url = "https://jsonplaceholder.typicode.com/posts";
    // check url using fetch function
    const response = await fetch(url);
    // Data => Response => json
    const data = await response.json();
    console.log(data);
    return data;  // return data to getPosts function
}
getPosts();

// Fun 2 => Display posts
async function displayposts() { 
    // Get data from getPosts function
    const posts = await getPosts(),
        row=document.querySelector('.row');
    // Loop through posts and display them
    for (let post of posts) { 
        row.innerHTML += `
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">${post.id}</h5>
            <p class="card-text">${post.body}</p>
            <a href="https://jsonplaceholder.typicode.com/posts" class="btn btn-primary">Go JSON_Placeholder</a>
        </div>
        </div>
        `
    }
}
displayposts();