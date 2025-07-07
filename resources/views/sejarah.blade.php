<x-guest-layout>
    <style>
        .steps-container {
            max-width: 700px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: 150px 1fr 150px;
            grid-gap: 20px 40px;
            align-items: stretch;
            font-family: Arial, sans-serif;
            justify-content: center;
        }
        .step-number {
            background-color: #d9534f;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            user-select: none;
            line-height: 1.1;
            white-space: nowrap;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-number.step-2 {
            background-color: #337ab7;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-number.step-3 {
            background-color: #f0ad4e;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-number.step-4 {
            background-color: #5cb85c;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-content {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            font-size: 1rem;
            color: #333;
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }
        .step-content h5 {
            margin-top: 0;
            font-weight: 600;
            font-size: 1.2rem;
            color: #555;
        }
        .step-content p {
            margin-bottom: 0;
            color: #666;
            line-height: 1.4;
        }
        .step-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 1.2rem;
            color: #999;
        }
        /* Grid placement for steps */
        .step-1-number { grid-column: 1; grid-row: 1; }
        .step-1-content { grid-column: 2 / 4; grid-row: 1; }
        .step-2-content { grid-column: 1 / 3; grid-row: 2; }
        .step-2-number { grid-column: 3; grid-row: 2; }
        .step-3-number { grid-column: 1; grid-row: 3; }
        .step-3-content { grid-column: 2 / 4; grid-row: 3; }
        .step-4-content { grid-column: 1 / 3; grid-row: 4; }
        .step-4-number { grid-column: 3; grid-row: 4; }
    </style>

    <div class="steps-container">
        <div class="step-number step-1-number step-1">01</div>
        <div class="step-content step-1-content">
            <h5>Step One</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="step-content step-2-content">
            <h5>Step Two</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="step-number step-2-number step-2">02</div>

        <div class="step-number step-3-number step-3">03</div>
        <div class="step-content step-3-content">
            <h5>Step Three</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>

        <div class="step-content step-4-content">
            <h5>Step Four</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="step-number step-4-number step-4">04</div>
    </div>
</x-guest-layout>
