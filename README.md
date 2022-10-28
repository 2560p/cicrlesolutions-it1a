# circle solutions website
the website sources are located in `src/` and `components/` folders.

## Team tasks:
    - Bohdan - header and footer
    - Paul - overall structure / quality control
    - Paul & Ada - home page
    - Timothy - packages page
    - Marijn - faq page
    - Bohdan - about us page
    - Nicanor - contact page

root files also include `docker-compose.yaml` to get the docker running correctly on every system, `nginx.conf` to have the web-server set up properly, `.gitignore` to not get the repo messy because of the editor config files, and this file (readme).

the structure of the website - the pages are located in `src/` folder; the website includes some repetitive elements, the header and footer, that are located in `components/` folder.

## running
to set up a web-server, open Command Prompt and run `docker-compose up` while in the root directory of this project. the port 80 will be exposed and accessible via the browser (http://localhost:80/).

*it has to be pointed out - the pages are done in php, therefore the HTML validator will throw an error. it might be beneficial for one to view the source of the rendered HTML page and assess it.*

## structure
```
README.md
docker-compose.yaml
.gitignore
nginx.conf
src/ - | (the website itself, files are available to everybody)
    index.php
    other pages (the php files)
    css/ - |
        global.css (including colour scheme with vars, 0 margin padding, base grid, header and footer style, ...)
        per_page.css (multiple of those)
    img/
    fonts/
    favicon.ico
components/ - | (this is not accessible from a browser)
    header.php
    footer.php
```
