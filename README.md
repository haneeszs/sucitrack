# SuciTrack – Menstrual Purity Tracker

## Group Members
Alya Qistina Nadia binti Idris 231134

*Leader
* Setup Laravel project 
* Configure GitHub repository
* Manage backend integration
* Assist route integration
* Create navbar/footer
* Manage website theme/layout
* Handle Blade template layout
* Display prayer times on dashboard
* Display reminder notifications
* Handle API frontend display
* Handle loading/error messages

Putri Nur Batrisyia binti Azizul (2412444)
* Design database tables
* Create ERD
* Setup MySQL database
* Create Laravel migrations
* Create models
* Setup foreign keys and relationships
* Design login page
* Design register page
* Create authentication forms
* Style input forms
* Connect forms with backend routes
* Connect Laravel with JAKIM API
  
Wan Nur Hanees binti Wan Shukri (2415978)
* Create CRUD backend functions
* Create period controller
* Setup CRUD routes
* Create validation logic
* Store/retrieve period records
* Design dashboard layout
* Create cycle summary section
* Create history page UI
* Display records dynamically
* Process JSON response
* Extract prayer time data
* Format prayer information

Wan Nur Insyirah binti Wan Rosli (2410848)
* Create qada’ prayer logic
* Create hari suci calculation
* Create next cycle prediction logic
* Build calculation functions
* Design calendar tracker
* Display prediction section
* Design prayer reminder section
* Compare period time with prayer time
* Determine qada’ prayer needed
* Test calculation accuracy

**1. Introduction**

SuciTrack is a specialized, Laravel-based web application cater assist Muslim women in tracking their menstrual cycles (Hayd) and periods of purity (Tuhr) in strict accordance with Shariah (Islamic jurisprudence) guidelines.

Navigating the complexities of Islamic rulings regarding prayer (Salah), fasting (Sawm), and other acts of worship during and after menstruation can be challenging. SuciTrack addresses this by replacing manual calculations with an automated, reliable digital solution. By combining the robust Model-View-Controller (MVC) architecture of Laravel with precise jurisprudential logic, the platform empowers users to maintain the five daily prayers and accurately manage their religious obligations.

**2. Problem Statement & Objectives**

2.1 Problem Statement
Many contemporary period tracking applications are designed purely from a medical or lifestyle perspective. They lack the specific calculations required to determine Islamic purity, such as tracking the exact duration of a valid period, in active prayer state or not, or calculating missed prayers that require replacement (Qada'). This leaves users to manually calculate their end period time that often leading to confusion regarding their validation for acts of worship.

Several limitations in existing applications :
Existing applications are mainly developed by a non-muslim and  do not provide features related to qada’ prayer management for Muslim women.
Users often experience confusion in determining which prayers need to be performed after menstruation ends at a certain time.
Users may forget to perform obligatory prayers immediately after their menstruation period ends due to the absence of automatic notifications and reminders.
The existing applications are mostly aimed to only track the women’s menstrual cycle as well as fertility to plan the process of fertilization. 


2.2 Project Objectives 
- Provide an interactive website for users to login, view, and manage their current and historical cycle data.
- Eliminate manual calculation errors by automating the determination of purity days, valid menstruation limits, and transitional phases.
- To allow users to record the start and end date and time of their menstrual period through the website.
- To automatically calculate the duration of menstruation and estimate the user’s “hari suci” period based on the information entered by the user.
- To integrate the website with the external JAKIM Prayer Time API in order to obtain accurate daily prayer times.
- To help users identify and keep track of prayers that need to be replaced (qada’) after their menstruation period ends.
- To predict the user’s next menstrual cycle based on previous records entered into the system.
  

**3. System Architecture & Features**

3.1 Core Features
The application is built around four core features:
- Secure user authentication through registration and login systems to ensure user data protection and privacy.
- Menstrual Records Management (CRUD) Create, Read, Update, and Delete capabilities allowing users to log start/end times.
- A visual featuring current cycle status, days of purity, unresolved qada' prayers, zone selection based on systemic calculations.
- Historical trends, predictive modeling for future cycles to inform users.

3.2 Technical 
Backend Framework: Laravel (PHP), JavaScript
Frontend Interface: Blade Templating Engine, Tailwind CSS (augmented with Livewire for real-time reactivity)
Database: MySQL




