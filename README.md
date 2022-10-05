# circle solutions website
the website sources are located in `src/` and `components/` folders

root files also include docker files (to have the project running on every system easily), `.gitignore` (for the macos' `.DS_Store`, and config files not to get changed by a mistake), and this file (readme)

the structure of the website - the pages are located in `src/` folder; they do include some repetitive elements, which are located in `components/` folder. 

## running
to set up a php server, open Command Prompt and run `dokcer-compose up` while in the root directory of this project (make sure `src/` folder is visible). the port 80 will be exposed and accessible via the browser (http://localhost:80)

*the site at its current stage **does** need the php server and nginx running. as it implements the idea of having 'components' (those like header, footer, HTML head element, etc), it is impossible to view anything with no webserver running*

*it has to be pointed out - it is quite impossible to check the HTML sources, though it might be beneficial for one to export the rendered HTML page, and thus assess it*

## structure
```
readme (just readme not to forget how the things work)
docker files (bunch of them, they are currently make quite a mess i dont like, might have to organise them in future)
src/ - | (the website itself, files are available to everybody)
    index_file (not yet decided whether it is php or html, might want to have some php stuff in it)
    css/ - |
        backbone_css (including colour scheme with vars, all-website classes, 0 margin padding, base_grid (?), ...)
        per_page.css
        … (if needed)
    js/ (?) - |
        … (if needed)
    img/ - |
        … (if needed)
    … (not yet decided; those include other pages)
components/ - | (useful parts; this will not be seen by everybody)
    header.php (?)
    … (those repetitive components)
```
