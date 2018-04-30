<!DOCTYPE HTML>

<html>
<head>
    <title>ExtraPush/NIDS JS Demo </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src='js/extrapush-subgradpush-LS-reg.js'></script>
    <script type="text/javascript" src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body class="index">
    <h1 style="text-align: center;">ExtraPush and NIDSPUSH Demo</h1>
    <br>
    <p>The following is a demonstration of the performance of the ExtraPush and NIDSPUSH algorithms in solving for consensus optimization with convex differentiable objective functions over a directed network. </p>
    <br>
    <p>We consider the following consensus optimization problem defined on a directed, strongly connected network of n agents:</p>
    <br>
    <img src="img/function.png" alt="function" style="display: block;
         margin-left: auto;
         margin-right: auto;">
    <p style="text-align: center">Figure from <cite>ExtraPush for Convex Smooth Decentralized Optimization over
            Directed Networks</cite> [2]</p>
    <br>
    <p>where f<sub>i</sub> is a proper, closed, convex, differentiable function only known to the agent i.</p>
    <br>
    <p>The described problem involves consensus optimization over a directed network, the following diagram depicts a directed graph, this graph defines the possible communications between nodes which will be used to reach an optimal consensus.</p>
    <br>
    <img src="img/graph.png" alt="graph" style="display: block;
         margin-left: auto;
         margin-right: auto;">
    <p style="text-align: center">Figure from <cite>ExtraPush for Convex Smooth Decentralized Optimization over
            Directed Networks</cite> [2]</p>
    <br>
    <p>The following simulation uses seeded random number generation to create an identical directed graph. Slide the step size slider to view performance of EXTRAPUSH and NIDSPUSH.</p>
    <div id="demo"></div>
    <div id="plotdiv"></div>
    <fieldset>
        <label for="rangeVal">Step Size: </label>
        <input type ="range" max="0.25" min="0.05"
               oninput="document.getElementById('rangeValLabel').innerHTML = this.value; showPlot(this.value);"
               step="0.05" name="rangeVal" id="rangeVal" value="0.15">
        </input>
        <em id="rangeValLabel" style="font-style: normal;">0.15</em>

    </fieldset>
    <h2 style="text-align: center">Conclusion</h2>

    <p>In the above simulation, it is shown that the NIDSPUSH algorithm converges faster than EXTRAPUSH at all step sizes where both algorithms converge. It is also shown that larger step sizes can be chosen such that NIDSPUSH converges and EXTRAPUSH diverges.</p>
    <h2>References</h2>
    <ol type="1"></ol>
    <li>[1] W. Shi, Q. Ling, G. Wu, and W. Yin, <cite>EXTRA: An exact first-order algorithm for decentralized consensus optimization</cite>, SIAM Journal on Optimization, 25 (2015), pp. 944–966.</li>
    <li>[2] J. Zeng and W. Yin, <cite>ExtraPush for convex smooth decentralized optimization over directed networks</cite>, To appear in Journal of Computational Mathematics, Special Issue on Compressed Sensing, Optimization, and Structured Solutions, (2017).</li>
    <li>[3] Z. Li, W. Shi, and M. Yan. <cite>A decentralized proximal-gradient method with network independent step-sizes and separated convergence rates.</cite> arXiv preprint arXiv:1704.07807 , 2017.</li>
    </ol>
    </body>

