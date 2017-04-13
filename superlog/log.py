#!/usr/bin/python
# -*- coding: utf-8 -*-

import os

directory = 'daily'
files = [directory + '/' + x for x in os.listdir(directory)]

log = ''

for f in files:
    log += open(f, 'r').read() + '\n'


with open('superlog.md', 'w') as log_file:
    log_file.write(log)
