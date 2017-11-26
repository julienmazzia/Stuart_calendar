# Stuart

## What is Stuart ?

Stuart is a personal project in development.
It is a personal web calendar which help to organize your own planning.

Including :
- Medical and professional appointment (job meetings, dentist, ...)
- Personal appointment (party, events, ...)
- Alert of event (birthday)
- And a daily *"ToDo"* List

You can have a quick overview of your appointment : daily, monthly or annual.

## Structure *(this part will be probably changing)*

Stuart is, like I said, an entire web application. So it is basicly composed of HTML5 and CSS3 but also PHP7 and JS8.
For PHP, CodeIgniter will be used.

The code will be separated in 3 big part on Model-View-Controller (MVC) method.

An SQL database will be in charge to save data.

### Model

The model is the big part of the code. It will be in charge to treat data and, if it is necessary, to change their format for the dedicated method. The model will also call the data getter methods, send data to modify or to add and receive the data information for the view.

### View

The wiew show the differents data in a web page. It can be easely understood by anyone and give interactions for the user like :
- Add a new appointment (With the title, the place, the date, ...)
- Add a new task (Title, duration, ...)
- Place an alert on it

The user will be also able to see an overview for the year with only the differents appointments name without details, for the month (more details), for the day (more more details) and see a specific appointment (more more more details)

## Evolution

All Github commits will be on the form : Vx.x.x where **x** represent a number.

- 1st x -> a new structure
- 2nd x -> a new functionality
- 3rd x -> an fixing error or the modification of a functionality

Each commit will be accompanied of a short detail description of the changes
