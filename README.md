# Stuart

## What is Stuart ?

Stuart is a personal project in development.
It is a personal web calendar which help to organize your own planning.

### Stuart is more than a calendar, it is the calendar !

Stuart assemble the forces of different calendars, always to be faster, easy to handle and to have preview of your actions.</br>
It had never be so simple to organize your life !

### High visibility

With Stuart, you can easely see your events in the day. You can have a quick overview of your appointment daily or monthly.
You can add any type of appointment, any time, anywhere. </br>And really quickly !

### Adaptive calendar

Stuart always adapt himself to your needs. You can add a large panel of event to it, have color visibility, create new type of event, ... </br>
Different type of functionality are implemented :
- Medical and professional appointment (job meetings, dentist, ...)
- Personal appointment (party, events, ...)
- Alert of event (birthday)
- And a daily *ToDo* List wich recap the tasks that must be done for the day

Everything is designed to be faster as it can be.

## Structure *(this part will be probably changing)*

Stuart is, like I said, an entire web application. So it is basicly composed of HTML5 and CSS3 but also PHP7 and JS8.
For PHP, CodeIgniter framework is used.

The code will be separated in 3 big part on Model-View-Controller (MVC) method.

### Model

The model is the big part of the code. It will be in charge to treat data and, if it is necessary, to change their format for the dedicated method. The model will also call the data getter methods, send data to modify database or to add and receive the data for the view.

### View

The wiew show the differents data in a web page. It can be easely understood by anyone and give interactions for the user like :
- Add a new appointment (With the title, the place, the date, ...)
- Add a new task (Title, duration, ...)
- Place an alert on it

The user will be also able to see an overview for the month and for the day. An event preview can show more details about it.

### Controller

The controller is only use to load the different ressources for the view and the model. Like the parts of the page (header, footer, ...) and the data (events, tasks, ...).

## Evolution

All Github commits will be on the form : Vx.x.x where **x** represent a number.

- 1st x -> a new structure
- 2nd x -> a new functionality
- 3rd x -> an fixing error or the modification of a functionality

Each commit will be accompanied of a short detail description of the changes
