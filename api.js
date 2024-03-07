const { PythonShell } = require('python-shell');

PythonShell.run('predict.py', null, (err, results) => {
    if (err) {
        console.error('Error running Python script:', err);
        return;
    }
    console.log('Predictions:', JSON.parse(results[0]));
});
