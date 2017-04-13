#!/usr/bin/python
# -*- coding: utf-8 -*-

import re
import json

log_file = open('../log.md').read()
pattern_start = re.compile('## Day (\d)+:')
pattern_end = re.compile('\*\*Link to work:\*\*')

text_lines = log_file.split('\n')
text_lines = [x for x in text_lines if x != '']

indexes = []

for index, line in enumerate(text_lines):
    match_start = pattern_start.match(line)
    match_end = pattern_end.match(line)
    if match_start:
        indexes.append(index)
    if match_end:
        indexes.append(index)

blocks = {}

for index, line_number in enumerate(indexes):
    if index % 2 != 0:
        continue
    # blocks[text_lines[line_number]] = text_lines[line_number+1:indexes[index+1]]
    blocks[text_lines[line_number]] = text_lines[line_number:indexes[index+1]+1]

# print json.dumps(blocks, indent=4, separators=(',', ': '))

with open('parsed_log.json', 'w') as outfile:
    json.dump(blocks, outfile, indent=2)
