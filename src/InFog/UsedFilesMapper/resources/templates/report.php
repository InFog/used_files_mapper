<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Report: Used PHP files in an application</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
    </head>
    <body>
        <div class="container">
            <h1 class="title">Report: Used PHP files</h1>

            <p>
                The codebase contains <?php echo $totalAllFiles; ?> files.<br />
                <?php echo $usagePercentage; ?>% of the files are used.
            </p>

            <hr />

            <h2 class="subtitle">Used files: <span class="tag is-success is-light"><?php echo $totalUsedFiles; ?></span></h2>

            <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>File</th>
                        <th>Usage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usedFiles as $fileName => $usage) : ?>
                        <tr>
                            <td><?php echo $fileName; ?></td>
                            <td><?php echo $usage; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <hr />

            <h2 class="subtitle">Unused files: <span class="tag is-danger is-light"><?php echo $totalUnusedFiles; ?></span></h2>

            <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unusedFiles as $fileName) : ?>
                        <tr>
                            <td><?php echo $fileName; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
