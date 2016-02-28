#!/bin/bash

while [ true ]; do
	clear
	phpunit -c phpunit.xml test/
	sleep 2
done
