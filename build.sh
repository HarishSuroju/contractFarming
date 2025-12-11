#!/bin/bash

# Copy database files to tmp directory for Vercel deployment
mkdir -p /tmp
cp -n my.db /tmp/my.db 2>/dev/null || true