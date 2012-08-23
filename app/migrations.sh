#!/bin/sh

cake Migrations.migration run all -p Users
cake Migrations.migration run all -p Cart
cake Migrations.migration run all