document.addEventListener("DOMContentLoaded", () => {
    console.log("JavaScript loaded.");
});

function readMore(id) {
    alert(`Redirecting to blog post ${id}`);
    window.location.href = `blog.html?id=${id}`;
}
