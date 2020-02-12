# UsedFilesMapper

This library will log the `php` files used by your PHP application.

## Usage

Simply register the mapper in your index file passing a filename to write the
output to:

```php
<?php

use InFog\UsedFilesMapper\FilesMapper;

FilesMapper::register('/tmp/usedfiles.log');
```

After running your application you will see a list of used files in the
log file passed to the register method.

## Keeping the log

Do you want to use the heatmap command to generate a nice HTML page containing
a graphical representation of the used files? Then you should keep the used
files in the log file using the `MODE_APPEND` option:

```php
<?php

use InFog\UsedFilesMapper\FilesMapper;

FilesMapper::register('/tmp/usedfiles.log', FilesMapper::MODE_APPEND);
```

## Generating the heatmap

In order to generate the report you will need the log file and the application's
code base.

Here is an example:

* The files on the server are under `/app/website`
* After collecting the usage for some time you downloaded the report into
  `~/Desktop/usedfiles.log`
* The codebase is under `~/Projects/website`

The report can be generated using the following commands:

```bash
cd ~/Projects/website
./vendor/infog/used_files_mapper/bin/report . /app/website/ ~/Desktop/usedfiles.log /tmp/report.html
```

## License

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
