#!/bin/bash

if [ -z "$1" ] 
then
	docker-compose down
else
	docker-compose rm -fs $@
fi