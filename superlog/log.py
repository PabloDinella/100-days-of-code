#!/usr/bin/python
# -*- coding: utf-8 -*-

import os
import markdown

directory = 'daily'
files = [directory + '/' + x for x in os.listdir(directory)]

log = ''

for f in files:
    text = open(f, 'r').read() + '\n'
    log += markdown.markdown(text)


with open('log.html', 'w') as log_file:
    log_file.write(log)
