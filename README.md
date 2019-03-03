# property-api
# This package holds a collection of properties in the database and exposes a RESTful API to interact with them
# Getting Started
# Set up PHP 7, Composer and MySQL 5.7.* on your local environment.
# git clone https://github.com/PoornimaKrishnasamy/property-api.git
# composer install
# The task includes a populated MySQL database, and run php artisan migrate --seed
# php artisan serve
# Visit http://127.0.0.1:8000
#
#
# To list all properties
# http://127.0.0.1:8000/api/property
# To retreive a specific property
# http://127.0.0.1:8000/api/property/1  -- {property_id}
# To Add a property use Curl 
#curl -d '{"address_line_1":"S Wharf Rd","address_line_2":"Paddington","postcode":"W2 1JB","user_id":1}' -H "Content-Type: application/json" -X POST http://127.0.0.1:8000/property
#
#
#
#
#
#
#
#
#

