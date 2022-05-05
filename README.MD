# The Crime Report 

## Project Structure

* public - a folder that contains all the files that are directly accessible through HTTP/HTTPS requests. It may include things like CSS, JavaScript, images and the basic PHP pages.

* modules - a folder containing all the logic of your application.

* templates - contains all the PHP code to render to the pages.

* src - a folder that will contain the server-side code, i.e controllers and models. 

* assets - a folder containing raw/uncompiled CSS, javascript, images, etc.

## Running the development server

```bash
# from root directory
cd bin
./dev.sh
```

I am assuming you working on either a linux machine or are using wsl.

Make sure you have made `./dev.sh` executable on your machine.