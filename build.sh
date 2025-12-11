#!/bin/bash

# Create tmp directory if it doesn't exist
mkdir -p /tmp

# Copy database file to tmp directory if it exists
if [ -f "my.db" ]; then
  cp my.db /tmp/my.db
  echo "Copied existing database to /tmp/my.db"
else
  echo "No existing database found. Will be created on first access."
fi

# Also copy to the API directory for Vercel
mkdir -p api/tmp
if [ -f "my.db" ]; then
  cp my.db api/tmp/my.db
  echo "Copied existing database to api/tmp/my.db"
fi