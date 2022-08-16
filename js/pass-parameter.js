// Get current url
const currentUrlSearch = window.location.search;

// Return if no parameter found
if (currentUrlSearch != "") {
    // Get all iframe element
    const iframes = [...document.getElementsByTagName("iframe")];

    // Iterate through iframes
    iframes.forEach((iframe) => {
        // Create new url
        const url = new URL(iframe.src);

        // Get url hash
        const hash = url.hash;

        // If search empty append search
        if (url.search === "") {
            iframe.src = `${url.origin}${url.pathname}${currentUrlSearch}${hash}`;
        } else {
            // Remove '?' from current search
            let newURL = currentUrlSearch.substring(1);

            // Add '&' to to iframe url if already not exists
            if (url.search.slice(-1) != "&") {
                newURL = `&${newURL}`;
            }

            // * Replace iframe src
            iframe.src = `${url.origin}${url.pathname}${url.search}${newURL}${hash}`;
        }
    });
}
