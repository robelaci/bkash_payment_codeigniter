#!/bin/bash

# Source and destination directories
source_dir="./"
destination_dir="/var/www/html/bkashcod/"

# Perform the synchronization
rsync -av --delete "$source_dir/" "$destination_dir/"

