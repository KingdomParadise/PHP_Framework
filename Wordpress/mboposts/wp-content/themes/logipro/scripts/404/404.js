(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != null && cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != null && cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != null && cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#19B256").s().p("AgeAsIAPgNIAYAAIAMANgAALAdIACgSIAJgIIAEAEIgDAjgAgPAGIgGgGIAHgFIAbAAIAHAFIgIAGgAAPgKIABgSIAPgNIgDAjIgGAEgAgcgGIADgjIAMANIgBASIgJAIgAgKgeIgMgNIAyAAIgOANg");
	this.shape.setTransform(65.7,9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#19B256").s().p("AgcAsIAOgNIAYAAIAMANgAANAdIABgSIAJgIIAFAEIgDAjgAgcAHIAGgEIAHAIIgBASIgPANgAgOAGIgFgGIAHgFIAbAAIAGAFIgHAGgAAQgKIACgSIAOgNIgDAjIgFAEgAgagGIADgjIAMANIgCASIgJAIgAgJgeIgMgNIAzAAIgPANg");
	this.shape_1.setTransform(58.4,9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#19B256").s().p("AAHAeIACgSIAJgIIAFAFIgDAigAALgJIACgSIAOgNIgDAjIgFAFgAgNgdIgNgNIAyAAIgNANg");
	this.shape_2.setTransform(51.8,8.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#19B256").s().p("AgbAsIAOgNIAYAAIAMANgAAOAdIABgSIAJgIIAFAEIgDAjgAgbAHIAGgEIAHAIIgBASIgPANgAgNAGIgFgGIAHgFIAbAAIAGAFIgHAGgAgZgGIADgjIAMANIgCASIgJAIgAgIgeIgMgNIAzAAIgPANg");
	this.shape_3.setTransform(44,9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#19B256").s().p("AgcAsIAOgNIAYAAIAMANgAAMAdIACgSIAJgIIAEAEIgCAjgAgOAGIgFgGIAHgFIAbAAIAGAFIgHAGgAgagGIACgjIANANIgCASIgJAIgAgJgeIgMgNIAyAAIgNANg");
	this.shape_4.setTransform(37,9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#19B256").s().p("AAKAdIACgSIAJgIIAEAEIgDAjgAgQAGIgGgGIAHgFIAbAAIAHAFIgIAGgAAOgKIABgSIAPgNIgDAjIgGAEgAgdgGIADgjIAMANIgBASIgJAIg");
	this.shape_5.setTransform(30,9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#19B256").s().p("AgeAsIAPgNIAYAAIAMANgAALAdIACgSIAJgIIAEAEIgDAjgAgPAGIgGgGIAHgFIAbAAIAHAFIgIAGgAAPgKIABgSIAPgNIgDAjIgGAEgAgKgeIgMgNIAyAAIgOANg");
	this.shape_6.setTransform(22.8,9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#19B256").s().p("AgcAsIAOgNIAYAAIAMANgAgcAHIAGgEIAHAIIgBASIgPANgAgOAGIgFgGIAHgFIAbAAIAGAFIgHAGgAAQgKIACgSIAOgNIgDAjIgFAEgAgJgeIgMgNIAzAAIgPANg");
	this.shape_7.setTransform(15.5,9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#19B256").s().p("AgIAdIABgSIAIgIIAEAEIgCAjgAgFgKIABgSIAOgNIgEAjIgFAEg");
	this.shape_8.setTransform(10,9);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#19B256").s().p("AgcAsIAOgNIAYAAIAMANgAANAdIABgSIAJgIIAFAEIgDAjgAgcAHIAGgEIAHAIIgBASIgPANgAAQgKIACgSIAOgNIgDAjIgFAEgAgagGIADgjIAMANIgCASIgJAIgAgJgeIgMgNIAzAAIgPANg");
	this.shape_9.setTransform(4.3,9);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#19B256").s().p("AgIAdIABgSIAIgIIAEAEIgDAjgAgGgKIACgSIAOgNIgEAjIgFAEg");
	this.shape_10.setTransform(56.9,9);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#19B256").s().p("AgcAsIAOgNIAYAAIAMANgAgcAHIAGgEIAHAIIgBASIgPANgAgOAGIgFgGIAHgFIAbAAIAGAFIgHAGgAAQgKIACgSIAOgNIgDAjIgFAEgAgJgeIgMgNIAzAAIgPANg");
	this.shape_11.setTransform(15.5,9);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#19B256").s().p("AAHAeIACgSIAJgIIAFAFIgDAigAALgJIACgSIAOgNIgDAjIgGAFgAgNgdIgNgNIAyAAIgNANg");
	this.shape_12.setTransform(66.1,8.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#19B256").s().p("AgeAsIAPgNIAYAAIAMANgAALAdIACgSIAJgIIAEAEIgDAjgAgPAGIgGgGIAHgFIAbAAIAHAFIgIAGgAAPgKIABgSIAPgNIgDAjIgGAEgAgKgeIgMgNIAyAAIgOANg");
	this.shape_13.setTransform(22.8,9);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#19B256").s().p("AgcAsIAOgNIAYAAIAMANgAAMAdIACgSIAJgIIAFAEIgDAjgAgOAGIgFgGIAGgFIAbAAIAHAFIgIAGgAgagGIACgjIAMANIgBASIgJAIgAgIgeIgNgNIAyAAIgNANg");
	this.shape_14.setTransform(65.6,9);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#19B256").s().p("AAKAdIACgSIAJgIIAEAEIgDAjgAgQAGIgGgGIAHgFIAbAAIAHAFIgIAGgAAOgKIABgSIAPgNIgDAjIgGAEgAgdgGIADgjIAMANIgBASIgJAIg");
	this.shape_15.setTransform(30,9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7,p:{x:15.5}},{t:this.shape_6,p:{x:22.8}},{t:this.shape_5,p:{x:30}},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_11},{t:this.shape_6,p:{x:22.8}},{t:this.shape_5,p:{x:30}},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_10},{t:this.shape_7,p:{x:62.4}}]},4).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7,p:{x:15.5}},{t:this.shape_13},{t:this.shape_5,p:{x:30}},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_6,p:{x:58.5}},{t:this.shape_12}]},4).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7,p:{x:15.5}},{t:this.shape_6,p:{x:22.8}},{t:this.shape_15},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_5,p:{x:58.6}},{t:this.shape_14}]},4).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7,p:{x:15.5}},{t:this.shape_13},{t:this.shape_5,p:{x:30}},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape_6,p:{x:65.7}}]},4).wait(4));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1.6,0,72.6,17.9);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAxgDBNAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCMgXCvhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape.setTransform(330.6,48.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDsgOQD1gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC1hbQDHhkA6gRQB9gnBNA/IAAOeg");
	this.shape_1.setTransform(329,48.3);
	this.shape_1._off = true;

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAxgDBNAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_2.setTransform(327.5,48.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA5gEQAvgDBOAXQDwBHDtgOQDzgPDlhqQB9g6B6gBQBfAABzAmQBCAVCEA2QB3AtBYAKQBCAIBdgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB+gnBNA/IAAOeg");
	this.shape_3.setTransform(324.3,48.3);
	this.shape_3._off = true;

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDsgOQD1gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBDAIBbgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB4gaC1hbQDHhkA6gRQB9gnBNA/IAAOeg");
	this.shape_4.setTransform(322.7,48.3);
	this.shape_4._off = true;

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA5gEQAwgDBNAXQDwBHDtgOQDzgPDlhqQB+g6B5gBQBfAABzAmQBCAVCDA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC2hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_5.setTransform(319.5,48.3);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDtgOQDzgPDlhqQB+g6B5gBQBfAABzAmQBCAVCDA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB4gaC2hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_6.setTransform(316.4,48.3);
	this.shape_6._off = true;

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_7.setTransform(314.8,48.3);
	this.shape_7._off = true;

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDtgOQDzgPDlhqQB+g6B5gBQBfAABzAmQBCAVCDA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC2hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_8.setTransform(313.2,48.3);
	this.shape_8._off = true;

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B6gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBvAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_9.setTransform(311.6,48.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B6gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBCAIBdgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_10.setTransform(308.5,48.3);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_11.setTransform(306.9,48.2);
	this.shape_11._off = true;

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCLgXCwhdQA1gcBkASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_12.setTransform(305.3,48.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBDAVCDA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC1hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_13.setTransform(303.7,48.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB4gaC2hbQDFhkA7gRQB9gnBNA/IAAOeg");
	this.shape_14.setTransform(302.1,48.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_15.setTransform(300.6,48.2);
	this.shape_15._off = true;

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB+gnBNA/IAAOeg");
	this.shape_16.setTransform(299,48.2);
	this.shape_16._off = true;

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA5gEQAwgDBNAXQDwBHDtgOQDzgPDlhqQB+g6B5gBQBfAABzAmQBCAVCDA2QB4AtBYAKQBCAIBdgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB/gnBMA/IAAOeg");
	this.shape_17.setTransform(297.4,48.2);
	this.shape_17._off = true;

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDHhkA5gRQB/gnBMA/IAAOeg");
	this.shape_18.setTransform(292.6,48.2);
	this.shape_18._off = true;

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA5gEQAwgDBNAXQDwBHDtgOQDzgPDlhqQB+g6B5gBQBfAABzAmQBCAVCEA2QB3AtBYAKQBCAIBdgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB/gnBMA/IAAOeg");
	this.shape_19.setTransform(291.1,48.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBkASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC1hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_20.setTransform(289.5,48.2);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDtgOQD0gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDHhkA5gRQB/gnBMA/IAAOeg");
	this.shape_21.setTransform(286.3,48.2);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB4gaC1hbQDHhkA6gRQB9gnBNA/IAAOeg");
	this.shape_22.setTransform(276.8,48.2);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBvAaBxgTQCLgXCwhdQA1gcBkASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_23.setTransform(262.6,48.2);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC1hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_24.setTransform(261,48.2);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBdgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_25.setTransform(259.4,48.2);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB4gaC2hbQDFhkA6gRQB+gnBNA/IAAOeg");
	this.shape_26.setTransform(256.2,48.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBDAVCDA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_27.setTransform(254.7,48.2);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCeBAC1gnQB4gaC2hbQDFhkA7gRQB9gnBNA/IAAOeg");
	this.shape_28.setTransform(249.9,48.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB5gaC0hbQDHhkA5gRQB/gnBMA/IAAOeg");
	this.shape_29.setTransform(240.4,48.2);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB5gaC1hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_30.setTransform(237.3,48.2);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDsgOQD1gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB4gaC1hbQDHhkA6gRQB9gnBNA/IAAOeg");
	this.shape_31.setTransform(234.1,48.2);
	this.shape_31._off = true;

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBDAIBbgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB4gaC1hbQDHhkA6gRQB9gnBNA/IAAOeg");
	this.shape_32.setTransform(227.8,48.2);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B6gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBCAIBdgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBvAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_33.setTransform(219.8,48.2);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B6gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBwAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_34.setTransform(216.7,48.1);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_35.setTransform(211.9,48.1);
	this.shape_35._off = true;

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCLgXCvhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCeBAC1gnQB4gaC2hbQDFhkA7gRQB9gnBNA/IAAOeg");
	this.shape_36.setTransform(207.2,48.1);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBkASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB5gaC0hbQDHhkA5gRQB/gnBMA/IAAOeg");
	this.shape_37.setTransform(197.7,48.1);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC1hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_38.setTransform(191.4,48.1);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBDAVCDA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_39.setTransform(166,48.1);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCLgXCvhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB+gnBNA/IAAOeg");
	this.shape_40.setTransform(155,48.1);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDHhkA5gRQB/gnBMA/IAAOeg");
	this.shape_41.setTransform(145.5,48.1);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB8g6B5gBQBgAABzAmQBDAVCCA2QB3AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBvAaBxgTQCLgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_42.setTransform(115.4,48);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA5gEQAwgDBOAXQDwBHDsgOQD0gPDmhqQB8g6B5gBQBgAABzAmQBCAVCEA2QB2AtBZAKQBCAIBcgeQAqgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0AzAMQBvAaBygTQCMgXCvhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB5gaC0hbQDGhkA7gRQB9gnBNA/IAAOeg");
	this.shape_43.setTransform(64.8,48);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA5gEQAvgDBOAXQDwBHDtgOQDzgPDlhqQB+g6B5gBQBfAABzAmQBCAVCDA2QB4AtBYAKQBCAIBdgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB/gnBMA/IAAOeg");
	this.shape_44.setTransform(52.1,48);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBygTQCLgXCwhdQA2gcBkASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB5gaC1hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_45.setTransform(50.5,48);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA2gcBkASQBGANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB5gaC1hbQDGhkA5gRQB/gnBMA/IAAOeg");
	this.shape_46.setTransform(47.4,48);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA5gEQAwgDBNAXQDwBHDtgOQDzgPDlhqQB9g6B6gBQBfAABzAmQBCAVCEA2QB3AtBYAKQBCAIBdgeQApgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCeBAC1gnQB4gaC2hbQDFhkA6gRQB+gnBNA/IAAOeg");
	this.shape_47.setTransform(33.1,47.9);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBDgpA6gEQAvgDBOAXQDwBHDtgOQD0gPDkhqQB9g6B5gBQBgAABzAmQBCAVCEA2QB3AtBYAKQBDAIBbgeQAqgNCDg3QBxgwBHgSQBrgbBbAOQBYANB5AuQCLA0AzAMQBwAaBygTQCLgXCvhdQA1gcBlASQBGANCFAuQCxA8AuAOQB+AkBTAAQCYAAB2gtQBDgZBqg2QBggoBsAJQCLAMDgBaQCfBAC0gnQB4gaC2hbQDFhkA6gRQB+gnBNA/IAAOeg");
	this.shape_48.setTransform(14.1,47.9);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#08A1A5").s().p("EgzpAHjIAArIQBEgpA4gEQAxgDBNAXQDwBHDsgOQD1gPDlhqQB9g6B5gBQBfAABzAmQBDAVCCA2QB3AtBZAKQBDAIBcgeQApgNCDg3QBxgwBIgSQBqgbBbAOQBYANB5AuQCLA0A0AMQBuAaBzgTQCKgXCwhdQA2gcBjASQBHANCGAuQCwA8AuAOQB+AkBUAAQCXAAB2gtQBDgZBqg2QBggoBsAJQCMAMDfBaQCfBAC0gnQB5gaC0hbQDHhkA5gRQB/gnBMA/IAAOeg");
	this.shape_49.setTransform(1.5,47.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2,p:{x:327.5,y:48.3}}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_10,p:{x:308.5,y:48.3}}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14,p:{x:302.1,y:48.2}}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19,p:{x:291.1}}]},1).to({state:[{t:this.shape_20,p:{x:289.5,y:48.2}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_2,p:{x:284.7,y:48.2}}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2,p:{x:281.6,y:48.2}}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_10,p:{x:265.7,y:48.2}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_25,p:{x:259.4,y:48.2}}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_26,p:{x:256.2,y:48.2}}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_28,p:{x:249.9,y:48.2}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_20,p:{x:246.7,y:48.2}}]},1).to({state:[{t:this.shape_19,p:{x:245.2}}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_30,p:{x:237.3,y:48.2}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_36,p:{x:207.2,y:48.1}}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_14,p:{x:200.9,y:48.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_37,p:{x:197.7,y:48.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_30,p:{x:194.5,y:48.1}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_25,p:{x:167.6,y:48.1}}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_28,p:{x:161.3,y:48.1}}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_26,p:{x:158.1,y:48.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_40,p:{x:155,y:48.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_30,p:{x:151.8,y:48.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_20,p:{x:148.6,y:48.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_41,p:{x:145.5,y:48.1}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_25,p:{x:121.7,y:48}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_40,p:{x:112.2,y:48}}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_36,p:{x:105.9,y:48}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_41,p:{x:99.6,y:48}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_37,p:{x:96.4,y:48}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_40,p:{x:66.3,y:48}}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_36,p:{x:63.2,y:48}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_36,p:{x:60,y:48}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_41,p:{x:56.8,y:48}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_44,p:{x:52.1,y:48}}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_46,p:{x:47.4,y:48}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_47,p:{x:33.1}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_28,p:{x:20.4,y:47.9}}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_28,p:{x:17.3,y:47.9}}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_48,p:{x:14.1}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_44,p:{x:9.4,y:47.9}}]},1).to({state:[{t:this.shape_46,p:{x:7.8,y:47.9}}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_20,p:{x:4.6,y:47.9}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_49}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_47,p:{x:-9.6}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_48,p:{x:-28.6}}]},1).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_16}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape).to({_off:true},1).wait(26).to({_off:false,x:287.9,y:48.2},0).to({_off:true},1).wait(5).to({_off:false,x:278.4},0).to({_off:true},1).wait(24).to({_off:false,x:238.8},0).to({_off:true},1).wait(1).to({_off:false,x:235.7},0).to({_off:true},1).wait(1).to({_off:false,x:232.5},0).to({_off:true},1).wait(24).to({_off:false,x:192.9,y:48.1},0).to({_off:true},1).wait(1).to({_off:false,x:189.8},0).to({_off:true},1).wait(1).to({_off:false,x:186.6},0).to({_off:true},1).wait(26).to({_off:false,x:143.9},0).to({_off:true},1).wait(1).to({_off:false,x:140.7},0).to({_off:true},1).wait(1).to({_off:false,x:137.6},0).to({_off:true},1).wait(24).to({_off:false,x:98,y:48},0).to({_off:true},1).wait(1).to({_off:false,x:94.8},0).to({_off:true},1).wait(1).to({_off:false,x:91.7},0).to({_off:true},1).wait(26).to({_off:false,x:48.9},0).to({_off:true},1).wait(1).to({_off:false,x:45.8},0).to({_off:true},1).wait(1).to({_off:false,x:42.6},0).to({_off:true},1).wait(24).to({_off:false,x:3,y:47.9},0).to({_off:true},1).wait(1).to({_off:false,x:-0.1},0).to({_off:true},1).wait(1).to({_off:false,x:-3.3},0).to({_off:true},1).wait(18));
	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:325.9},0).to({_off:true},1).wait(26).to({_off:false,x:283.1,y:48.2},0).to({_off:true},1).wait(5).to({_off:false,x:273.7},0).to({_off:true},1).wait(26).to({_off:false,x:230.9},0).to({_off:true},1).wait(26).to({_off:false,x:188.2,y:48.1},0).to({_off:true},1).wait(63).to({_off:false,x:86.9,y:48},0).to({_off:true},1).wait(26).to({_off:false,x:44.2},0).to({_off:true},1).wait(48));
	this.timeline.addTween(cjs.Tween.get(this.shape_3).wait(4).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:321.1},0).to({_off:true},1).wait(1).to({_off:false,x:318},0).to({_off:true},1).wait(26).to({_off:false,x:275.2,y:48.2},0).to({_off:true},1).wait(1).to({_off:false,x:272.1},0).to({_off:true},1).wait(1).to({_off:false,x:268.9},0).to({_off:true},1).wait(24).to({_off:false,x:229.3},0).to({_off:true},1).wait(1).to({_off:false,x:226.2},0).to({_off:true},1).wait(1).to({_off:false,x:223},0).to({_off:true},1).wait(24).to({_off:false,x:183.4,y:48.1},0).to({_off:true},1).wait(1).to({_off:false,x:180.3},0).to({_off:true},1).wait(1).to({_off:false,x:177.1},0).to({_off:true},1).wait(1).to({_off:false,x:174},0).to({_off:true},1).wait(24).to({_off:false,x:134.4},0).to({_off:true},1).wait(1).to({_off:false,x:131.2},0).to({_off:true},1).wait(1).to({_off:false,x:128.1},0).to({_off:true},1).wait(24).to({_off:false,x:88.5,y:48},0).to({_off:true},1).wait(1).to({_off:false,x:85.3},0).to({_off:true},1).wait(1).to({_off:false,x:82.2},0).to({_off:true},1).wait(1).to({_off:false,x:79},0).to({_off:true},1).wait(24).to({_off:false,x:39.4},0).to({_off:true},1).wait(1).to({_off:false,x:36.3},0).to({_off:true},1).wait(26).to({_off:false,x:-6.5,y:47.9},0).to({_off:true},1).wait(3).to({_off:false,x:-12.8},0).to({_off:true},1).wait(1).to({_off:false,x:-15.9},0).to({_off:true},1).wait(10));
	this.timeline.addTween(cjs.Tween.get(this.shape_4).wait(5).to({_off:false},0).to({_off:true},1).wait(26).to({_off:false,x:280,y:48.2},0).to({_off:true},1).wait(61).to({_off:false,x:181.9,y:48.1},0).to({_off:true},1).wait(26).to({_off:false,x:139.1},0).to({_off:true},1).wait(1).to({_off:false,x:136},0).to({_off:true},1).wait(28).to({_off:false,x:90.1,y:48},0).to({_off:true},1).wait(77));
	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(9).to({_off:false},0).to({_off:true},1).wait(28).to({_off:false,x:270.5,y:48.2},0).to({_off:true},1).wait(1).to({_off:false,x:267.3},0).to({_off:true},1).wait(1).to({_off:false,x:264.2},0).to({_off:true},1).wait(24).to({_off:false,x:224.6},0).to({_off:true},1).wait(1).to({_off:false,x:221.4},0).to({_off:true},1).wait(1).to({_off:false,x:218.3},0).to({_off:true},1).wait(24).to({_off:false,x:178.7,y:48.1},0).to({_off:true},1).wait(1).to({_off:false,x:175.5},0).to({_off:true},1).wait(3).to({_off:false,x:169.2},0).to({_off:true},1).wait(26).to({_off:false,x:126.5,y:48},0).to({_off:true},1).wait(1).to({_off:false,x:123.3},0).to({_off:true},1).wait(1).to({_off:false,x:120.2},0).to({_off:true},1).wait(22).to({_off:false,x:83.7},0).to({_off:true},1).wait(1).to({_off:false,x:80.6},0).to({_off:true},1).wait(1).to({_off:false,x:77.4},0).to({_off:true},1).wait(1).to({_off:false,x:74.3},0).to({_off:true},1).wait(24).to({_off:false,x:34.7,y:47.9},0).to({_off:true},1).wait(1).to({_off:false,x:31.5},0).to({_off:true},1).wait(26).to({_off:false,x:-11.2},0).to({_off:true},1).wait(1).to({_off:false,x:-14.4},0).to({_off:true},1).wait(1).to({_off:false,x:-17.5},0).to({_off:true},1).wait(1).to({_off:false,x:-20.7},0).to({_off:true},1).wait(7));
	this.timeline.addTween(cjs.Tween.get(this.shape_7).wait(10).to({_off:false},0).to({_off:true},1).wait(63).to({_off:false,x:213.5,y:48.1},0).to({_off:true},1).wait(1).to({_off:false,x:210.4},0).to({_off:true},1).wait(24).to({_off:false,x:170.8},0).to({_off:true},1).wait(3).to({_off:false,x:164.5},0).to({_off:true},1).wait(24).to({_off:false,x:124.9,y:48},0).to({_off:true},1).wait(3).to({_off:false,x:118.6},0).to({_off:true},1).wait(26).to({_off:false,x:75.8},0).to({_off:true},1).wait(1).to({_off:false,x:72.7},0).to({_off:true},1).wait(1).to({_off:false,x:69.5},0).to({_off:true},1).wait(24).to({_off:false,x:29.9,y:47.9},0).to({_off:true},1).wait(1).to({_off:false,x:26.8},0).to({_off:true},1).wait(1).to({_off:false,x:23.6},0).to({_off:true},1).wait(26).to({_off:false,x:-19.1},0).to({_off:true},1).wait(1).to({_off:false,x:-22.3},0).to({_off:true},1).wait(1).to({_off:false,x:-25.4},0).to({_off:true},1).wait(4));
	this.timeline.addTween(cjs.Tween.get(this.shape_8).wait(11).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:310.1},0).to({_off:true},1).wait(59).to({_off:false,x:215.1,y:48.1},0).to({_off:true},1).wait(26).to({_off:false,x:172.4},0).to({_off:true},1).wait(26).to({_off:false,x:129.6},0).to({_off:true},1).wait(63).to({_off:false,x:28.4,y:47.9},0).to({_off:true},1).wait(38));
	this.timeline.addTween(cjs.Tween.get(this.shape_11).wait(15).to({_off:false},0).to({_off:true},1).wait(61).to({_off:false,x:208.8,y:48.1},0).to({_off:true},1).wait(1).to({_off:false,x:205.6},0).to({_off:true},1).wait(26).to({_off:false,x:162.9},0).to({_off:true},1).wait(30).to({_off:false,x:113.8,y:48},0).to({_off:true},1).wait(26).to({_off:false,x:71.1},0).to({_off:true},1).wait(30).to({_off:false,x:22,y:47.9},0).to({_off:true},1).wait(34));
	this.timeline.addTween(cjs.Tween.get(this.shape_15).wait(19).to({_off:false},0).to({_off:true},1).wait(26).to({_off:false,x:257.8},0).to({_off:true},1).wait(61).to({_off:false,x:159.7,y:48.1},0).to({_off:true},1).wait(26).to({_off:false,x:117,y:48},0).to({_off:true},1).wait(61).to({_off:false,x:18.9,y:47.9},0).to({_off:true},1).wait(32));
	this.timeline.addTween(cjs.Tween.get(this.shape_16).wait(20).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:295.8},0).to({_off:true},1).wait(26).to({_off:false,x:253.1},0).to({_off:true},1).wait(30).to({_off:false,x:204,y:48.1},0).to({_off:true},1).wait(59).to({_off:false,x:109.1,y:48},0).to({_off:true},1).wait(61).to({_off:false,x:11,y:47.9},0).to({_off:true},1).wait(26).to({_off:false,x:-31.8},0).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_17).wait(21).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:294.2},0).to({_off:true},1).wait(26).to({_off:false,x:251.5},0).to({_off:true},1).wait(1).to({_off:false,x:248.3},0).to({_off:true},1).wait(3).to({_off:false,x:242},0).to({_off:true},1).wait(24).to({_off:false,x:202.4,y:48.1},0).to({_off:true},1).wait(1).to({_off:false,x:199.3},0).to({_off:true},1).wait(1).to({_off:false,x:196.1},0).to({_off:true},1).wait(24).to({_off:false,x:156.5},0).to({_off:true},1).wait(1).to({_off:false,x:153.4},0).to({_off:true},1).wait(1).to({_off:false,x:150.2},0).to({_off:true},1).wait(1).to({_off:false,x:147.1},0).to({_off:true},1).wait(24).to({_off:false,x:107.5,y:48},0).to({_off:true},1).wait(1).to({_off:false,x:104.3},0).to({_off:true},1).wait(1).to({_off:false,x:101.2},0).to({_off:true},1).wait(24).to({_off:false,x:61.6},0).to({_off:true},1).wait(1).to({_off:false,x:58.4},0).to({_off:true},1).wait(1).to({_off:false,x:55.3},0).to({_off:true},1).wait(26).to({_off:false,x:12.5,y:47.9},0).to({_off:true},1).wait(3).to({_off:false,x:6.2},0).to({_off:true},1).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.shape_18).wait(24).to({_off:false},0).to({_off:true},1).wait(30).to({_off:false,x:243.6},0).to({_off:true},1).wait(63).to({_off:false,x:142.3,y:48.1},0).to({_off:true},1).wait(24).to({_off:false,x:102.7,y:48},0).to({_off:true},1).wait(30).to({_off:false,x:53.7},0).to({_off:true},1).wait(54));
	this.timeline.addTween(cjs.Tween.get(this.shape_31).wait(61).to({_off:false},0).to({_off:true},1).wait(30).to({_off:false,x:185,y:48.1},0).to({_off:true},1).wait(32).to({_off:false,x:132.8},0).to({_off:true},1).wait(24).to({_off:false,x:93.2,y:48},0).to({_off:true},1).wait(32).to({_off:false,x:41},0).to({_off:true},1).wait(1).to({_off:false,x:37.9},0).to({_off:true},1).wait(24).to({_off:false,x:-1.7,y:47.9},0).to({_off:true},1).wait(1).to({_off:false,x:-4.9},0).to({_off:true},1).wait(1).to({_off:false,x:-8},0).to({_off:true},1).wait(15));
	this.timeline.addTween(cjs.Tween.get(this.shape_35).wait(75).to({_off:false},0).to({_off:true},1).wait(63).to({_off:false,x:110.7,y:48},0).to({_off:true},1).wait(26).to({_off:false,x:67.9},0).to({_off:true},1).wait(26).to({_off:false,x:25.2,y:47.9},0).to({_off:true},1).wait(5).to({_off:false,x:15.7},0).to({_off:true},1).wait(24).to({_off:false,x:-23.9},0).to({_off:true},1).wait(1).to({_off:false,x:-27},0).to({_off:true},1).wait(1).to({_off:false,x:-30.2},0).to({_off:true},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,661.2,96.6);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape.setTransform(536.2,47.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBVAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBggoBzADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_1.setTransform(534.4,47.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBWAaBogVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_2.setTransform(532.6,47.9);
	this.shape_2._off = true;

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCUANQBMAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_3.setTransform(530.8,47.9);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB3gECKAgQCXAjAxACQBwAFCAg6QCuhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_4.setTransform(528.9,47.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAxACQBwAFCAg6QCuhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_5.setTransform(527.1,47.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAhgPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDKAjBagdQDmhLCygFQB3gECKAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_6.setTransform(525.3,47.9);
	this.shape_6._off = true;

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAhgPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDKAjBagdQDmhLCygFQB3gECKAgQCYAjAwACQBwAFB/g6QCvhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_7.setTransform(523.5,47.9);
	this.shape_7._off = true;

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_8.setTransform(519.8,47.9);
	this.shape_8._off = true;

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBYAiQBdAlCgAbQDLAjBagdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_9.setTransform(518,47.9);
	this.shape_9._off = true;

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAhgPQA+gdBGgLQDIghE0BeQBXAaBngVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlChAbQDKAjBagdQDmhLCygFQB3gECKAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_10.setTransform(516.2,47.9);
	this.shape_10._off = true;

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA5gLB/guQB3grBCgKQBngQBYAiQBdAlCgAbQDKAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_11.setTransform(512.5,47.9);
	this.shape_11._off = true;

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlChAbQDKAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_12.setTransform(507.1,47.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlChAbQDKAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_13.setTransform(505.3,47.9);
	this.shape_13._off = true;

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE1BeQBVAaBogVQA5gLB/guQB3grBCgKQBngQBYAiQBdAlCgAbQDKAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_14.setTransform(503.4,47.9);
	this.shape_14._off = true;

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE1BeQBVAaBogVQA5gLB/guQB3grBCgKQBngQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_15.setTransform(501.6,47.9);
	this.shape_15._off = true;

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBggoBzADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_16.setTransform(496.2,47.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_17.setTransform(494.3,47.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBWAaBogVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCUANQBMAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_18.setTransform(492.5,47.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAxACQBwAFCAg6QCuhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_19.setTransform(488.9,47.9);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFCAg6QCuhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_20.setTransform(487.1,47.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAxACQBwAFCAg6QCuhQCTANQBNAHCtA8QChA4B4ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_21.setTransform(450.6,47.9);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFCAg6QCuhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_22.setTransform(448.8,47.9);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAhgPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB3gECKAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_23.setTransform(445.2,47.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDKAjBbgdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_24.setTransform(439.7,47.9);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_25.setTransform(427,47.9);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBWAaBogVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCUANQBMAHCtA8QCgA4B6ADQC5ADDqhiQBfgoBzADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_26.setTransform(416,47.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAhgPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDKAjBagdQDmhLCygFQB3gECKAgQCYAjAwACQBwAFB/g6QCvhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_27.setTransform(405.1,47.9);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_28.setTransform(403.3,47.9);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBYAiQBdAlCgAbQDKAjBbgdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_29.setTransform(401.5,47.9);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlChAbQDKAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_30.setTransform(388.7,47.9);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBVAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_31.setTransform(383.2,47.9);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBWAaBogVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCUANQBMAHCtA8QCgA4B6ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_32.setTransform(377.8,47.9);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAxACQBwAFCAg6QCuhQCTANQBNAHCtA8QChA4B4ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_33.setTransform(374.1,47.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBfgoBzADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_34.setTransform(365,47.9);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBBgKQBogQBXAiQBeAlChAbQDKAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_35.setTransform(350.5,47.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAigPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBYAiQBdAlCgAbQDLAjBagdQDmhLCygFQB3gECKAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B5ADQC6ADDqhiQBggoByADQBZACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_36.setTransform(325,47.9);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE0BeQBWAaBogVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_37.setTransform(304.9,47.9);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAigPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDJAjBbgdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFB/g6QCvhQCTANQBNAHCtA8QCgA4B6ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBZg2QApgXAxgNIAAOng");
	this.shape_38.setTransform(297.7,47.9);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAugbAjgPQA9gdBGgLQDIghE1BeQBWAaBngVQA6gLB+guQB3grBCgKQBngQBXAiQBeAlCgAbQDLAjBagdQDmhLCygFQB4gECJAgQCXAjAyACQBvAFCAg6QCuhQCTANQBNAHCtA8QChA4B4ADQC6ADDqhiQBggoByADQBZACB8AeQBIARCOAmQB8AeBXADQCHAEB8glQAzgQCIg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_39.setTransform(294,47.9);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("rgba(0,188,191,0.698)").s().p("EgzpAHfIAArmQAvgbAhgPQA+gdBGgLQDIghE0BeQBXAaBngVQA5gLB/guQB3grBBgKQBogQBYAiQBdAlChAbQDKAjBagdQDmhLCygFQB3gECKAgQCYAjAwACQBwAFCAg6QCuhQCUANQBMAHCtA8QChA4B5ADQC5ADDqhiQBfgoB0ADQBYACB9AeQBHARCOAmQB8AeBXADQCHAEB8glQA0gQCHg6QBkgrBAgFQBagIBkAzQBcAuCMAKQCfAMBag2QAogXAxgNIAAOng");
	this.shape_40.setTransform(252.1,47.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4,p:{x:528.9}}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12,p:{x:507.1}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_16,p:{x:496.2}}]},1).to({state:[{t:this.shape_17,p:{x:494.3}}]},1).to({state:[{t:this.shape_18,p:{x:492.5}}]},1).to({state:[{t:this.shape_4,p:{x:490.7}}]},1).to({state:[{t:this.shape_19,p:{x:488.9}}]},1).to({state:[{t:this.shape_20,p:{x:487.1}}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12,p:{x:468.8}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_16,p:{x:457.9}}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_18,p:{x:454.3}}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_21,p:{x:450.6}}]},1).to({state:[{t:this.shape_22,p:{x:448.8}}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_24}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_25}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_16,p:{x:419.7}}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_21,p:{x:412.4}}]},1).to({state:[{t:this.shape_22,p:{x:410.6}}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_27,p:{x:405.1}}]},1).to({state:[{t:this.shape_28,p:{x:403.3}}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_32,p:{x:377.8}}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_20,p:{x:372.3}}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_27,p:{x:366.9}}]},1).to({state:[{t:this.shape_34,p:{x:365}}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_35,p:{x:350.5}}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_32,p:{x:339.5}}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_21,p:{x:335.9}}]},1).to({state:[{t:this.shape_20,p:{x:334.1}}]},1).to({state:[{t:this.shape_19,p:{x:332.3}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_27,p:{x:328.6}}]},1).to({state:[{t:this.shape_34,p:{x:326.8}}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_35,p:{x:312.2}}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_37,p:{x:304.9}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_32,p:{x:301.3}}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_38,p:{x:297.7}}]},1).to({state:[{t:this.shape_20,p:{x:295.8}}]},1).to({state:[{t:this.shape_39,p:{x:294}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_27,p:{x:290.4}}]},1).to({state:[{t:this.shape_34,p:{x:288.5}}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_35,p:{x:275.8}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_37,p:{x:266.7}}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_32,p:{x:263}}]},1).to({state:[{t:this.shape_17,p:{x:261.2}}]},1).to({state:[{t:this.shape_38,p:{x:259.4}}]},1).to({state:[{t:this.shape_19,p:{x:257.6}}]},1).to({state:[{t:this.shape_39,p:{x:255.8}}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_40,p:{x:252.1}}]},1).to({state:[{t:this.shape_40,p:{x:250.3}}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_28,p:{x:246.7}}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape}]},1).to({state:[{t:this.shape_37,p:{x:226.6}}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape).to({_off:true},1).wait(20).to({_off:false,x:498},0).to({_off:true},1).wait(20).to({_off:false,x:459.7},0).to({_off:true},1).wait(20).to({_off:false,x:421.5},0).to({_off:true},1).wait(21).to({_off:false,x:381.4},0).wait(1).to({x:379.6},0).to({_off:true},1).wait(19).to({_off:false,x:343.2},0).wait(1).to({x:341.4},0).to({_off:true},1).wait(20).to({_off:false,x:303.1},0).to({_off:true},1).wait(20).to({_off:false,x:264.9},0).to({_off:true},1).wait(19).to({_off:false,x:228.4},0).to({_off:true},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.shape_2).wait(2).to({_off:false},0).to({_off:true},1).wait(41).to({_off:false,x:456.1},0).to({_off:true},1).wait(1).to({_off:false,x:452.5},0).to({_off:true},1).wait(18).to({_off:false,x:417.8},0).to({_off:true},1).wait(1).to({_off:false,x:414.2},0).to({_off:true},1).wait(20).to({_off:false,x:376},0).to({_off:true},1).wait(20).to({_off:false,x:337.7},0).to({_off:true},1).wait(20).to({_off:false,x:299.5},0).to({_off:true},1).wait(40));
	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(6).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:521.7},0).to({_off:true},1).wait(20).to({_off:false,x:483.4},0).to({_off:true},1).wait(41).to({_off:false,x:406.9},0).to({_off:true},1).wait(20).to({_off:false,x:368.7},0).to({_off:true},1).wait(20).to({_off:false,x:330.4},0).to({_off:true},1).wait(20).to({_off:false,x:292.2},0).to({_off:true},1).wait(36));
	this.timeline.addTween(cjs.Tween.get(this.shape_7).wait(7).to({_off:false},0).to({_off:true},1).wait(20).to({_off:false,x:485.2},0).to({_off:true},1).wait(20).to({_off:false,x:447},0).to({_off:true},1).wait(20).to({_off:false,x:408.7},0).to({_off:true},1).wait(20).to({_off:false,x:370.5},0).to({_off:true},1).wait(63).to({_off:false,x:253.9},0).to({_off:true},1).wait(15));
	this.timeline.addTween(cjs.Tween.get(this.shape_8).wait(9).to({_off:false},0).to({_off:true},1).wait(20).to({_off:false,x:481.6},0).to({_off:true},1).wait(20).to({_off:false,x:443.3},0).to({_off:true},1).wait(85).to({_off:false,x:286.7},0).to({_off:true},1).wait(20).to({_off:false,x:248.5},0).to({_off:true},1).wait(12));
	this.timeline.addTween(cjs.Tween.get(this.shape_9).wait(10).to({_off:false},0).to({_off:true},1).wait(20).to({_off:false,x:479.8},0).to({_off:true},1).wait(20).to({_off:false,x:441.5},0).to({_off:true},1).wait(42).to({_off:false,x:363.2},0).to({_off:true},1).wait(42).to({_off:false,x:284.9},0).to({_off:true},1).wait(32));
	this.timeline.addTween(cjs.Tween.get(this.shape_10).wait(11).to({_off:false},0).wait(1).to({x:514.4},0).to({_off:true},1).wait(19).to({_off:false,x:477.9},0).wait(1).to({x:476.1},0).wait(1).to({x:474.3},0).to({_off:true},1).wait(19).to({_off:false,x:437.9},0).wait(1).to({x:436.1},0).to({_off:true},1).wait(19).to({_off:false,x:399.6},0).wait(1).to({x:397.8},0).to({_off:true},1).wait(19).to({_off:false,x:361.4},0).wait(1).to({x:359.6},0).to({_off:true},1).wait(19).to({_off:false,x:323.1},0).wait(1).to({x:321.3},0).wait(1).to({x:319.5},0).to({_off:true},1).wait(19).to({_off:false,x:283.1},0).wait(1).to({x:281.3},0).to({_off:true},1).wait(19).to({_off:false,x:244.8},0).wait(1).to({x:243},0).to({_off:true},1).wait(9));
	this.timeline.addTween(cjs.Tween.get(this.shape_11).wait(13).to({_off:false},0).wait(1).to({x:510.7},0).wait(1).to({x:508.9},0).to({_off:true},1).wait(19).to({_off:false,x:472.5},0).wait(1).to({x:470.7},0).to({_off:true},1).wait(19).to({_off:false,x:434.2},0).wait(1).to({x:432.4},0).to({_off:true},1).wait(19).to({_off:false,x:396},0).wait(1).to({x:394.2},0).wait(1).to({x:392.4},0).to({_off:true},1).wait(18).to({_off:false,x:357.7},0).wait(1).to({x:355.9},0).wait(1).to({x:354.1},0).to({_off:true},1).wait(19).to({_off:false,x:317.7},0).wait(1).to({x:315.9},0).to({_off:true},1).wait(19).to({_off:false,x:279.4},0).wait(1).to({x:277.6},0).to({_off:true},1).wait(19).to({_off:false,x:241.2},0).wait(1).to({x:239.4},0).wait(1).to({x:237.6},0).to({_off:true},1).wait(6));
	this.timeline.addTween(cjs.Tween.get(this.shape_13).wait(17).to({_off:false},0).to({_off:true},1).wait(20).to({_off:false,x:467},0).to({_off:true},1).wait(19).to({_off:false,x:430.6},0).wait(1).to({x:428.8},0).to({_off:true},1).wait(20).to({_off:false,x:390.5},0).to({_off:true},1).wait(20).to({_off:false,x:352.3},0).to({_off:true},1).wait(20).to({_off:false,x:314},0).to({_off:true},1).wait(21).to({_off:false,x:274},0).wait(1).to({x:272.2},0).to({_off:true},1).wait(19).to({_off:false,x:235.7},0).wait(1).to({x:233.9},0).to({_off:true},1).wait(4));
	this.timeline.addTween(cjs.Tween.get(this.shape_14).wait(18).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:499.8},0).to({_off:true},1).wait(18).to({_off:false,x:465.2},0).to({_off:true},1).wait(1).to({_off:false,x:461.6},0).to({_off:true},1).wait(20).to({_off:false,x:423.3},0).to({_off:true},1).wait(19).to({_off:false,x:386.9},0).to({_off:true},1).wait(20).to({_off:false,x:348.6},0).to({_off:true},1).wait(1).to({_off:false,x:345},0).to({_off:true},1).wait(18).to({_off:false,x:310.4},0).to({_off:true},1).wait(1).to({_off:false,x:306.8},0).to({_off:true},1).wait(19).to({_off:false,x:270.3},0).wait(1).to({x:268.5},0).to({_off:true},1).wait(19).to({_off:false,x:232.1},0).wait(1).to({x:230.3},0).to({_off:true},1).wait(2));
	this.timeline.addTween(cjs.Tween.get(this.shape_15).wait(19).to({_off:false},0).to({_off:true},1).wait(20).to({_off:false,x:463.4},0).to({_off:true},1).wait(20).to({_off:false,x:425.1},0).to({_off:true},1).wait(21).to({_off:false,x:385.1},0).to({_off:true},1).wait(20).to({_off:false,x:346.8},0).to({_off:true},1).wait(20).to({_off:false,x:308.6},0).to({_off:true},1).wait(45));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(205.6,0,661.2,95.9);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgDAQQgGgCgEgGQgDgFABgFQAEgNAMAAIACABIABAAQAGABAEAGQADAFgBAGIgDAFQgFAHgIAAg");
	this.shape.setTransform(1.3,1.8,0.48,0.48);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F58545").s().p("AgJAqQgRgEgKgPQgJgPAFgRQADgPAMgJQAMgJAOAAIAHABIABAAIABABQASAEAIAPQAKAPgEAQQgCAIgFAHQgNASgWAAg");
	this.shape_1.setTransform(2.1,2.6,0.48,0.48);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FF3300").s().p("AgJAqQgRgEgKgPQgJgPAFgRQADgPAMgJQAMgJAOAAIAHABIABAAIABABQASAEAIAPQAKAPgEAQQgCAIgFAHQgNASgWAAg");
	this.shape_2.setTransform(2.1,2.6,0.48,0.48);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_2},{t:this.shape}]},44).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).to({state:[{t:this.shape_2},{t:this.shape}]},5).to({state:[{t:this.shape_1},{t:this.shape}]},5).wait(1));

	// Layer 1
	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F58545").s().p("AgbArIAAhVIAiAAQAJAAAGAHQAHAGgBAJIAAApQABAJgHAHQgGAGgJAAg");
	this.shape_3.setTransform(3.5,2.6,0.48,0.48);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F8A371").s().p("AgMA0QgVgFgMgTQgMgSAGgVQADgTAQgMQAPgLASAAIAKABIABABIABAAQAVAFAMATQAMASgGAVQgCAKgHAJQgPAXgcAAIgMgCg");
	this.shape_4.setTransform(2.8,2.6,0.48,0.48);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3}]}).wait(130));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,5.4,5.2);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F0F0F0").s().p("AhDBEQgcgcAAgoQAAgnAcgcQAdgcAmAAQAnAAAdAcQAcAcAAAnQAAAogcAcQgcAcgoAAQgmAAgdgcg");
	this.shape.setTransform(13.8,13.8,0.48,0.48);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#C1C9CF").s().p("AhYBZQgkglAAg0QAAgzAkglQAlglAzAAQA0AAAlAlQAlAlAAAzQAAA0glAlQglAlg0AAQgzAAglglg");
	this.shape_1.setTransform(13.8,13.8,0.48,0.48);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#7B898F").s().p("AAJEYQgJgIAAgNIAAh2IgCgBQgMBJg0AzQgMANgTgGQgsgQgkgdQgLgIgBgOQgBgNAKgKIBShSIgCgCQg8AqhJAAQgTAAgIgRQgVgsgFgwQgBgMAIgJQAJgJAMAAIB3AAIAAgCQhIgNg0gzQgGgGgCgIQgCgJADgIQAQgsAdgkQAIgLAOgBQANgBAKAKIBSBSIACgDQgqg7AAhJQAAgTARgIQAqgUAygGQAMgBAJAIQAIAIAAAMIAAB3IADAAQANhIAzgzQAOgOARAHQArAPAmAdQAKAJABANQABAOgKAKIhRBSIACACQA8gqBIAAIAAAAQATAAAIAQQAUAqAFAvQACANgJALQgJAJgOAAIhzAAIAAADQBHAMA0A0QAGAGACAIQACAJgDAIQgPAsgdAkQgJALgNABQgOABgKgKIhRhSIgDADQArA6AABKQAAAJgFAHQgEAHgIAEQgsAVgxAFIgCAAQgLAAgIgHg");
	this.shape_2.setTransform(13.8,13.8,0.48,0.48);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,27.5,27.6), null);


(lib.shock2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(107,211,210,0.498)").s().p("Ai4DAIgKgGIARgEQAFgBANgJIAGgEIABgBIACAFQAIALADAAIAJAAIADgBIADAAIAHAAIABADIgBABIgNAHIgJgBIgJAAIgFgBIgCgBQgDgCgDAAIgTAGgAi3C5IABAEIACABIAGAAIAGgDIAPgGIACAIIAYAAIACgCIACgCIgCgBQAAABgRAAIgFAAQgEgKgDgCQgCgBgEADIgHAGQgFAEgGAAIgCgBgAAuBBIgBgDIAAgCIAAgBIAIgJIAMgJIAHgEIAJgFIAOgEIADAMIgJANIgGABIgLADIgOADIgMAFgABIAsQgQAKgDAGQADgDAHgDIAPgDQAIgCADgDQAEgFgBgHQgEAAgQAKgACvhpQgDAAgCgHIgBgEIAEgXIAHgJIAKgDIABAAIAEADIAAAAIAAABIgBAAQgFAEgCAEIAAAIIABAKIgLAQgACziNIgCAHIgEAUQAAAAABABQAAAAAAABQAAAAAAAAQAAAAABAAIAAAAQAEgDACgFIABgHIgBgFIgBgCQAAgEAJgHIgDgCQgDABgEAFgAiBiPQgBAAAAgBQAAAAAAgBQAAAAAAgBQAAgBAAgBIAAAAIACgDIABgFQAAgDgCgCIgFgFQgGgJAAgFIAEgNIABAAIAYAiIAAABIgIAJIgIAHIgCgBgAiGi1IAAAEQABAEADAGQAEAHAGADIgIAMIABABQALgIAAgEQAAgEgEgHIgLgPIgCAAg");
	this.shape.setTransform(120.4,69.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AixC3IALgIQAJgFAAAEQgOAIgFABgABFAtIANgKQABAAAAAAQABAAAAAAQABAAAAABQAAAAAAABQAAAEgGACQgEACgGAAgACth5IgBgBIACgHQAAAAAAgBQAAgBAAAAQAAgBABAAQAAgBABAAQAAAAABgBQAAAAAAAAQABABAAAAQAAABAAABQgCAKgDABgAiEiuIgCgGIABgCIAIAOIgBABQgDgBgDgGg");
	this.shape_1.setTransform(120.7,70.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#A2F2FC").s().p("Ai2C6IgDAAIgBgEIAEgBIACABQAGgBAFgDIAHgGQAEgDACABQADACAEAKIAFAAQARAAAAgBIACABIgCACIgDACIgXAAIgCgIIgPAGIgHACgAilCwIgLAIIABAAQAFAAAOgJQAAAAAAAAQAAgBAAAAQAAAAgBAAQAAAAgBAAQgCAAgFACgABGAoQAQgJAEgBQABAIgEAEQgDAEgJACIgOADQgIADgDACQAEgFAQgLgABTAlIgNAKIAAAAQAGgBAEgBQAGgCAAgEQAAgBAAAAQAAgBAAAAQAAAAgBAAQAAgBAAAAIgCABgACrh1IADgUIADgHQADgFADgBIAEABQgJAIAAADIABADIABAFIgBAHQgCAFgEADIgBAAQAAAAAAAAQAAAAgBgBQAAAAAAAAQAAgBAAAAgACxiEQgBABAAAAQgBABAAAAQAAABAAABQAAAAAAABIgCAGIABABIAAABQADAAACgLQAAgBAAAAQAAAAAAgBQgBAAAAAAQAAAAAAAAIgBAAgAiCiVIAIgLQgGgDgEgHQgEgGAAgEIAAgEIABgCIACAAIAKAQQAFAHAAAEQAAAEgLAHgAiFiyIACAGQADAGADAAIABgBIgIgNg");
	this.shape_2.setTransform(120.6,69.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("rgba(107,211,210,0.2)").s().p("AihDTIgEgDIgFgBIgIAAQgKAAgBgDIgIgMIgEgFQgDgEgGgCIgDgBIABgBIALgBQAIgCACgDQACgDAFgCIAIgEIAHgCIADgBQAAgBABAAQAAAAABAAQAAgBABAAQABAAABAAIAEgCIAEAAQADABABgCIACgBIADgCIASgFIAOAGIAAABIAFAIIAEADQAAABAAAAQABAAAAAAQABABAAAAQABAAABAAIADACQACACAFAAIAEABIAEADIAFABIAEAAIABADIAAABIgHAFQgIABgEADQgDADgDABIgJAEIgLAIIgIACIgMABIgGACIgJACIgIABIgCgDgAiWCjIgFAEQgNAJgGACIgRADIAPAJIATgHQADAAACACIACABIAFABIAKAAIAJACIANgHIAAgCIgBgDIgGAAIgDABIgEABIgIAAQgEAAgHgMIgCgEgAAdBHIgCgHQAAgEADgGIAFgMQABgDACgDIAGgFIAEgEIAQgHQADAAAGgDIAHgFQAEgEAKgCIAFgBIACAAQAQADAGAKIACAEIgEAFQgBACgBAEIABAEQAAADgCACIgCADIgBACIgDACIgCADQgBADgLAIQgLAIgEAAQgGAAgCABIgDABIgDAAIgCgBIgHgBIgDgBIgEACIgDABIgJAAIgDACIgDACQgEAAgCgGgABUAcIgIAEIgIAFIgLAJIgIAJIgBABIABABIAAADIABABIAMgFIAOgEIAKgCIAHgBIAIgOIgDgMgACyheQgHAAgCgCIgBgCIgBgCIgDgIQgBgDgFgFQgDgDAAgEQgBgEADgHQADgHADgEIAPgQIAKgEIAEAAQAEAAAGgDIAEgCIAFAEIABABIAAADIABADQAAAAAAABQAAAAAAABQAAAAgBABQAAAAgBABIgCACIABAFIAAAFIgBAKIAAADIAAADIAAADIAAAFIgDAEIgEAEIgDAFIgBAEQgBAEgHAEgAC3iYIgGAJIgFAXIABADQADAHACAAIACAAIALgPIgBgLIABgHQACgFAEgDIACgBIgBAAIAAgBIgEgCIAAAAgAiSiDIAFgZIgDgFQgDgEAAgEIgEgNIABgGIADgGIAGgGIAAgDIAFgJIAAAAIACgBIAIALIADABIAGACQAJADADAEIAEAGIAFAGIACAHIABAGIAAADIAAAHIAAAEIgCADIgCAFIgEADIgEADQgPACgNADQgFACgEADgAiJi4QAAAEAHAJIAEAFQACADAAACIgBAFIgCADIAAABQAAABAAAAQAAABAAABQAAAAABABQAAAAAAAAIACACIAIgHIAIgJIABgBIgZgjIAAAAIgFAOg");
	this.shape_3.setTransform(120,70);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("rgba(107,211,210,0.498)").s().p("AhtEJIgDgCIgFgDQAAAAAAAAQgBgBAAAAQAAAAAAgBQAAAAAAAAIAAgDQgCgCgCgBIgdgEQgNAAgEADIgEABIAAAAIgBgCIgDgKIgBgBIABgBQAAgBAAAAQAAgBABAAQAAAAABAAQAAgBAAAAIAHABIAWgBQAZAAAIAGIAEAFQACACAEAAQACAAAHgDIAMgIQASgNgBgMIAAgFIADgEIAKgEIAAANIACAJIgRAOIgNANIgJAJIgCABIgKAJIgDAAQgEAAgCgCgAh3D4QADACADAFIABADIAKAGIACgCQAHgIAMgKIAVgRIAFgFIAAgBIACgRIgCADQAAAGgDADIgEAHQgFAHgQANIgRAMIgCACIgCAAIgDgDIgGgGQgNgJgbAAQgRAAgCABQAAAAgBAAQAAAAAAAAQAAAAAAAAQgBAAAAABIABABIAAAEIABABQATgHAUAHIAGgBQAEAAAEACgAA3BxIgEgEIgCgDIAwgwIABAAIACgBIAEgCQAMgDAHgBIAIACQAIABABAGIABAFIAFAPQABAIACAAQABAAAAAAQABgBAAAAQABAAAAAAQABgBABAAIAFgFQAJgGAFAAQACAAAFAFIgdAXIgGAEIgEgHIAAAAIgKgPIAAAAIABgEIAAgEIgBgDIAAgCQgBgFgCgCQgIgGgJAEIgGAEIgDAEQgIAFgIAIQgNAMgBAFIgRAMIAAAAgABwA6QgTAHgSAQIgYAZIABACIAEABIADgEIALgJIATgUQACgDAEgCIAIgDIAEgFQAGgEAHAAQAHgBAFAEQAFAGABALIgBAFIAFAOIAAAAIAFAGQAFgGAIgHQAJgIAGgDIAAAAIAAgBIgGgCIgLAJQgJAHgCABIgCgDQgDgDgBgHIgDgPQgDgIgFgCIgGgBQgFAAgHADgAijAYIgGgMIgKgkIABgPIABAAIADABQAFAAAEgDQACAAACgEIABAAIADgGIAAgDIAAgDIgBAAIABgJIAAgFIgCgCQgBgIgDgGIAAgDIgBgDIgCgHIAAgHIABgCIAKgYIACgGIAVgGIgBACIgFAHIgDAGQgEAJAAAOIgBACQgCAEAAAHIAAAEIABAIIAEAIIgDALIAAAFIAAAGQABADADACIgCABIgEAIIgBACIgIALQgCAGAAAFIgBAJIACAQIAAADIAAAPIgFgFgAiugfIAAABQAAALAFAOIAJAbIABgBIgCgGIgDgSQgBgFAAgFIABgIQABgJAHgGIAJgJIgDgEIgCgEIAAgCIgBgBIAFgQIAAgBIAAgDIgCgKIgBgDQgCgCAAgDIAAgFIAAgBQABgIAEgLQADgKAEgGIAAAAIgBgDIAAgBQgJgBgGASIgCAOIgBAJQAAAIADAJIACALIAAAGIAAAIQABAHgDAFQgDAIgLACIgCAAgAgcghQgEgJgHgGIgBgCIACgEQADACAFAAIAHgBIACAIQAEAKAEAAQAAAAABAAQAAAAAAgBQABAAAAAAQABgBAAAAQABgBAAAAQABgBAAAAQABAAABAAQAAAAABAAIAEACIgHAOIgPABgAghgxIADAGIADAFIAEALIAAACQACACADAAQAEAAADgEIACgEIADgCIgDgCIgCgBQgCAEgDAAQgFAAgCgMIgBgBQgDgFgGAAIAAgBgAB3grQgCgCgGgCIgKgCQgHgCgDgCIgEgDIgEgIQAAgBAAAAQAAgBAAgBQABAAAAAAQAAgBABAAIADgCQAEgCAAgCIACgBQABgCAAgDQAAgEgBgHIgCgGIgBgCIAJgNIACABIACADIACAHIgBAEIAAACIgEAbIACAEQACADACAAIADAAIADAAIAIgBIALAGQACAAADgEIAEgIQAHgPAJgGIADgEIAEgFIAHgDIAEgCIgLASQgEADgCAJQgDAKgCADIgMAPQgIAKgDAAgABZhCQAAAGAEADQAGADALACQAIACAHAFIAFAEIACACIAUgaIACgJQACgGADgEIAIgLIAEgDIgBAAIgDgBQgGAHgNARIgPAaQgDgEgHgDIgHgCIgFAAQgIAAgFgFIgBgCQAAgBAAAAQgBgBAAAAQAAgBAAAAQgBgBAAAAIABgFIgHAIgABghkIgBADIABAGIABAJIAAAAIABACIAAgBIACgFIAAgCIABgOIgBgFQgCABgCAGgAArjVIgBgIIABgGIABgMQAAgEgBgBIgFgIIgHgGQgGgDgFAFQgBADgFADIgKAIQgOAKgIAAIgEAAIAFgGQAFgGALgKQAOgMAJAAQAZAAAKALQACACACAGIABABIgDAFQgEAGAAAFQAAAFAEAMIADALQAAAEgFALIgCADgAAokAIABACQABAAAAABQAAAAABAAQAAABABAAQAAABAAAAQAEAEABANIAAAXQABALAGAKIADgMIgEgPIgDgKQAAgGADgHIAEgFQgCgFgHgEIgKgFIgBgBQgQgIgTANIgMAMIgCABIgJAJIAAAAIAWgNQAIgHAEgBQAGgHAGgCQAIACAFAFg");
	this.shape_4.setTransform(118.5,66.2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AhrDBIgCgCIAAgBIABAAIABACIADABIACgCIAEgCIAAACIgBACIgEADQgDAAgBgDgAiMCxIgDgBIAAAAIAHAAQAGAAAAABQAAABAAAAQAAAAAAAAQgBAAAAAAQAAAAgBAAIgBABgAA4AmQAAgCAGgEIAQgQQAEgEADgBIABAAIAAAAQAAACgNAMIgRAOgACeAWQAHgHAHgBIAAAAIgMAKIgFAFQgDADgDABgAinhKIgDgUQAAgBAAgBQAAAAAAgBQAAAAAAgBQABAAAAgBIAFgBIAFgCQAAAAAAgBQABAAAAAAQAAAAABAAQAAAAAAAAQgDAGgGADIgCACIAAAFIABAMIAAABgAgVhfIAAgBIACAAIADABIADgCQABgBABAAQAAAAABAAQAAAAAAAAQABABAAABIgDACIgEACQgFAAAAgDgACGhvIgBABIgGgFQgGgGgDgBQgBgDAJAFIAIAGIAHgJQAJgLgBgCIACgDIABgCIABABIgCAIIgCADIgJAMQgFAHgBAAgAicibQgBgDgBgGQAAgGAEgMQADgLACgCIgEAeIAAAJIABAJIgBADg");
	this.shape_5.setTransform(118.4,72.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#A2F2FC").s().p("AhqEGIACAAIADgCIACgDIgBgCIARgMQAPgNAGgHIAEgHQACgDABgGIACgDIgCARIAAABIgFAFIgVARQgMAKgHAIIgCACgAhwECIgCgDQgCgFgDgCQgGgEgJADQgTgHgTAHIgBgBIAAgEIgBgBQAAgBAAAAQAAAAABAAQAAAAAAAAQAAAAABAAQACgBARAAQAbAAAMAJIAHAGIACADIACAAIgCACIgDgBIgCgCIAAAAIAAABIABADIABABgAiQDyIAAAAIADACIAGABIACAAQABAAAAAAQAAAAAAgBQABAAAAAAQAAAAAAAAQAAgBgHgBIgFgBIgBABgAA0BsIgBgCIAYgZQARgQAUgHQALgFAGADQAFACADAIIAEAPQABAHACADIACADQADgBAJgHIALgJIAFACIABABIAAAAQgGADgJAIQgJAHgEAGIgFgGIAAAAIgFgOIAAgFQAAgLgFgGQgFgEgIABQgGAAgGAEIgFAFIgHADQgEACgCADIgTAUIgLAJIgEAEgABNBTIgRAPQgFAFAAABIAAABIAQgNQAOgMAAgDIAAAAIgBAAQgDABgEAFgACdBZIgJAKQADAAADgEIAEgFIAMgJIAAgBQgGACgHAHgAiqgFQgEgOAAgLIAAgBIABgEIACAAQAKgCAEgIQACgFAAgHIAAgIIAAgGIgDgLQgDgJAAgIIAEgXQAGgSAIABIABABIABADIAAAAQgEAGgEAKQgDALgBAIIAAABIAAAFQAAADABACIABADIADAKIgBADIAAABIgEAQIABABIAAACIABAEIAEAEIgJAJQgHAGgBAJIgCAIQAAAFACAFIADASIABAGIAAABgAihgkIgEADIgFABQgBAAAAAAQAAABAAAAQgBABAAAAQAAABAAABIAEAVIAAAAIAAgBIgBgNIAAgFIACgCQAGgDADgGIgBAAIgCABgAichzQgDALAAAHQAAAFACAEIADAKIABgDIgBgJIgBgJIADgNIACgRQgDADgDALgAgYgZIAAgCIgDgLIgDgFIgEgGIAAgCIABABQAGAAADAFIAAABQADAMAEAAQAEAAACgEIACABIACACIgCACIgCAEQgDAEgEAAQgDAAgDgCgAgWgeIAAABQAAADAFAAIAEgCIACgCQAAgBAAgBQAAAAAAAAQgBAAAAAAQgBAAgBABIgDACIgEgBgACBgpIgEgEQgHgFgIgCQgLgCgGgDQgEgDAAgGIAHgIIgBAFQAAAAAAABQABAAAAABQAAAAAAABQABAAAAABIABACQAEAFAJAAIAFAAIAHACQAHADADAEIAPgaQAMgRAHgHIADABIABAAIgEADIgIALQgDAEgCAGIgCAJIgUAagACFgsQABAAAFgGIAJgMIABgEIACgIIAAgBIgCADIgBADQAAACgIAKIgHAJIgIgGQgJgFAAADQADABAHAGIAFAFIABAAgABhhSIAAAAIgBgJIgBgGIABgDQACgGACgBIABAFIgCAOIAAACIgBAFIAAABgAAwjTIAAgXQgBgNgDgEQAAAAgBgBQAAAAAAgBQgBAAAAAAQgBgBAAAAIgBgCQgFgFgIgCQgHACgFAHQgEABgIAHIgDACIgTALIAAAAIAJgJIACgBIAMgMQATgNAQAIIABABIAKAFQAHAEABAFIgDAFQgDAHAAAGIADAKIADAPIgDAMQgFgKgCgLg");
	this.shape_6.setTransform(118.5,66.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("rgba(107,211,210,0.2)").s().p("Ah1EnIgFgEIgCgDIgLgHIgNgIIgOAAIgFADQgDABgFAAIgJgBIgCgCQgLgQAAgUIALgKIAGgEIAJgDQAHgCABgCIAHAAQABACAGAAQACAAAHgDIAIgCIAEADQAFAEAEAAQAEAAAEgCIADgCQAGABAEgCQAGgDgBgIQgBgDACgEIABgHQABgJAOgFIAagIIAEAKIAFAFIAGAEQAIgCADAPQADAHAAALQAAAKgOAYQgMAWgHAHIgCgDQgCgCgDAAQgEAAgFADIgUARQgFAEgEAAQgLAAgHgGgAh7D+QADABACACIABADQgBAAAAAAQAAABAAAAQAAAAABABQAAAAABAAIAEADIADACQACACAEAAIAEAAIAJgJIABgBIAngkIgBgJIAAgNIgKAEIgDAEIABAFQgBAMgRANIgMAIQgHADgCAAQgEAAgCgCIgEgFQgIgGgZAAIgKABIgSgBQgBAAAAABQgBAAAAAAQgBAAAAABQAAAAgBABIAAABIAAABIAFAKIAAACIABAAIACgBQAFgDAMAAgACKCPQgLAAgEgEQgCgCgBgHQAAgFgEgEQgFgEgNAAIgKACIgDgCIgEgCIgLAIQgKAIgBAAQgFAAgCgFIgCgEQgBAAAAgBQAAAAAAgBQgBAAAAAAQAAgBgBAAIgLgHQgBgCAAgEQAAgHACgFIAJgQQADgGAGgHIATgWIAIgHIAUgCIAbgJQALgJASAPIAKAMIAFAFQAOAAAJAEQAHANAAATQAAAJgCAIIgDAJIgGAGIgMAJQgFAFgCAEIgDAFQgEAEgJAAgABpA5IgFACIgCABIgBAAIgxAwIAEADIACAEIABAAIAAAAIARgMQABgFAOgMQAHgIAHgFIAFgEIAFgEQAJgEAIAGQADACABAFIAAACIABADIAAAEIgBAEIgBAAIAKAPIABAAIADAHIAHgEIAcgXQgFgFgCAAQgFAAgIAGIgHAFQAAAAgBABQAAAAgBAAQAAAAgBABQgBAAAAAAQgBAAgCgIIgEgPIgBgFQgCgGgIgBIgHgCQgJABgKADgAihAzIgEgFQgGgJgHgDQgHgEgFgGQgDgEgBgHIgFgVQgDgOAAgIQAAgJADgGIAGgJIAGgHQACgDAAgHIgDgNQgDgOAAgOQAAgKAJgMQAHgMANgIQAPgCAJgEIAHgDIAMgDIAJAFIABABIACADIAAABIgBAFIgBADQgDAGgBAFIAAAEQABABAAAAQAAABAAAAQAAABAAAAQAAABgBAAIgBAFIgBADIADAJQADAIAAAEQABAJADADIADADIACAFIgQBEQgCAIgGAIIgLAQIgDAJIgEAIQgDAFgGAFIgHAGQAAAAgBAAQAAAAAAAAQgBgBAAAAQgBgBAAAAgAizgWIAKAkIAHAMIADAFIABgPIgBgDIgBgQIAAgJQAAgFAEgGIAGgLIADgCIADgIIABgBQgCgCAAgDIAAgGIAAgFIACgLIgDgIIgCgIIAAgEQAAgHACgEIABgCQAAgOAEgJIAEgGIADgHIACgCIgVAGIgBAGIgLAYIgBACIAAAHIACAHIABADIABADQACAGABAIIABACIABAFIgBAJIABAAIABADIgCADIgDAGIAAAAQgDAEgBAAQgFADgEAAIgEgBIgBAAgAgjgCQgJgJgEgHIgEgMIgEgOIACgEIAHgIQAIgLAGAAIAQgBIAHAAQACAAAEADIAPALIAHAAIACAEIABAFQAAAGAEADIABAAIABABQAAACgDAEIgFAFIgBAFQAAADgEACQgDABgDAFIgCAFQgCACgEAAIgDAAIgDABIgCABIgEADQgFACgDAAQgGAAgJgIgAgogwIABACQAIAGAEAJIAEALIAPgBIAHgOIgFgCQAAAAgBAAQAAAAgBAAQAAAAgBABQAAAAAAABQgBAAAAABQgBAAAAAAQgBABAAAAQgBAAgBAAQgDAAgEgKIgCgIIgHABQgFAAgCgCgABNgkIgPgUIAIgtQAAgPAKgNQAKgPASAAQALAAAGAJQADAFAAAFIgCAMIAAAEIABAGQACAJAEAAQAGAAANgJIAWgRQAEAAADgCIABAAQAIAJAGAKQAGAQAAAPIAAABIgBABIgXAkQgDAFgLAGQgJAGgFAAIgIgCIgQgBIgZAEQgHAAgRgUgABbhhIAAACIACAGQADAHAAAEQAAADgDACIgBABQAAACgDACIgEACQAAAAgBABQAAAAAAAAQgBABAAABQAAAAAAABIAFAIIACADQADACAIACIAJACQAHACACACIALAIQADAAAIgKIAMgPQADgDACgKQACgJADgDIANgSIgFACIgHADIgDAFIgFAEQgHAGgIAPIgFAIQgCAEgBAAIgMgGIgHABIgFAAIgCAAQgCAAgCgDIgCgEIAEgbIABgCIAAgEIgBgHIgEgDIgCgBgAAcijIgBgBIgBgFQgEgLgFgIIAAgFIgBgFQgDgHgIgCIgLgBQgGAAgGgCIgIgCIgHgCIgMAAQgEgNgCgHQAGgBAGgJIAHgMIAJgNQAMgQALgJIAKgGIAQACQARADAMAGQAMAGALAJIAAAIIABAPIAAAKIgBAIQgCAEgBADIAPAhIgBAGIgHAQQgOAIgbAAgAAfkAIAHAGIAGAIQAAABAAAEIAAAMIgCAGIABAIIAMAdIABgDQAHgLgBgEIgDgLQgEgMAAgFQAAgFAEgGIADgFIgBgBQgCgGgDgCQgIgLgbAAQgIAAgNAMQgMAKgFAGIgEAGIADAAQAIAAAOgKIALgIQAEgDABgDQADgDADAAIAFABg");
	this.shape_7.setTransform(118.5,66);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("rgba(107,211,210,0.498)").s().p("AiCERIgHgCIgFgBIgEgBIgMgCIgMAAIgDAAIgJABIgCgGIAPgKIAWABIAUABIANAGIAFABIABAAIADABQADAAAMgKIAQgSIANgRQAEgFAAgDIABgDIgCgEIgEgGIgCgCIgFgHQgKgQAAgBQAAgCAEgFIAKgIIAogYIgBAFIAAAAIgWAVQgKAIAAAEQAAAAAAAAQAAABAAAAQABABAAAAQABABAAAAIAHAFIALAOIADAFIAAABIgSAfIgtAugAirECIgBABIgCACIADAAQAOABAYAEIAeAFQAGAAAbghIARgVIABgBIAEgGQAEgEAAgCQAAgKgLgMIgHgHQgDgDAAgCQAAgEAPgMQARgNADgFIgcASQgMAJgCAIIAAABQAAADAEAEIANAOQAHAIAAAEIgXAeQgZAfgHAAIgJgDIgHgCIgqgGQgIAAgCADgABDBvIgBAAIACgEQAEgJAIgHIAJgIQAIgFAGAAIAbgHIATAQQAHAAAEgGIAEgHIADgDIAEgEIAHgDIAEgDIACgHIACgGQABgEAHgEQAHgDAGgBIADAAIACABIACABIgIAKIgCAEIAAAAIgEADIgFABQgEACAAACQAAAAAAAAQAAABAAAAQAAAAgBAAQAAAAAAABIgBABIgCACIgBAHIgDADIgCAFIgFAGIgPANIgEABIgFADIgBAAIgKgIIgKgJIgCAAQgFgCgGAAIgHABIgHADQgHACgDAEIgFAHIgLAHIgIAGgABzBNIgKADQgGACgIAFIgCABIgBABQgLAHgEAGIgBABIgDAEIAAACIAEABIAIgIIAKgKQAOgKAZgBIAUARIAIgBIANgNIADgDIABgBQADgHAFgGQgKABgKANIgJANQgDAAgIgGIgLgMIgPAAgADDAsQgHAEAAAHIABACIAAgBIAJgIQAHgFABgFgAjEBMIAAgBIgBAAIgNgFIgDgBIADgDIADABIAMAAQALgCAIgKIAFgHIAKgIQACgBAHgCIAEAAQAFAAABgCIABgEQAAgEgIgIIgKgMIgGgGIgHgFIgCgDIAHgeIACgFIAIgOQAFgEADgJQAEgJAAgEQAAgEgBgDIgDgGQgEgIABgLIgBgmIACgBIAKgIIAHgEIAFgCQAEAAABACIgKAgIgCARIABALQACAHADAFIADAGIABAAIADAQIgEAHQgFABgGAIQgHAGgHAPQgGANAAAGIAAAIQABAEADADQADAFAHAFQAJAEACABIABgBIAKAMIADAHIABACIhNApgAjEBLIAzgeIAAAAIANgIIgZAHIgDADIgMAKQgSAOgGAAIgIgCgAiUiPIAAAOIAAAaIABAHIAKAXQgLAGgMAbIgIAUIgDALIABACIAJAJIAfAgIAAACIADgCQAAgCgGgGIgOgOQgIgIgFgFQgFgHAAgDQAAgLAKgSIAIgMIABgBIAAAAIAQgYIgFgRQgFgQAAgEQAAgMAEgPIAFgOQAAgBAAAAQAAgBgBAAQAAgBAAAAQAAAAAAAAIgBAAIgBAAQgMAAgCAPgAgMgGIgBgCIgDAAIgKAAQgFgFgCgHIgEgMIgBgDIAAgEIAAgHIgBgHIgBgCIAIgSIABACIACABQAAAAABABQAAAAAAABQABAAAAABQAAABAAAAIAGARIACALIAAAEIABAEQABAFAGAAIAIgDIAEAAQAKABAFACQAGACAAACQAAABgGAEIgCABIgBgBQgDAAgJACQgGACgFAFIgBABgAgjg7IgBAGIAAAHIADANQAFAVAJgBIAEABIAEAAIACgBQANgEAJgBQgDgEgPAAIgSABQAAgJgEgOIgFgVQgCAAgBAGgABzgpIAAgBIABgDIAAgRQAAgHgIgLIgGgJIgZgdIgCgDIgJgUQgDgGgDgDIgBgCIgFgcIABgHIABgiIAAAAQAAAAABgBQAAAAAAgBQAAAAABAAQAAAAAAgBIABACIACARIADALIADALIADALIAEALIACAGIABABIAAAAIABAEIAEAFIAIAFIACABIABAGIAEAMQAGAMALAEIAAABIAJASIADAQIABAEIABADIABACQAAABAAABQAAAAABABQAAAAAAAAQABAAAAAAQACABAKgHIABAAIAAAAQAGAAAEgDQAEgDAAgCIACgFIABgFIACgUIADgWIAAgBIADgLIABgGIAAgDIAFgFIAEAAIACADIACAEIAAACIgBACIAAAKIgDANQgBAEAAAFIAAAMQAAAHgEAbIgBACIgNAHIgYAIIgRAIIgEgFgAA8i9QABAVADAHQAGAXALARIATAXQAMAMADAIQAGAMAAASIAAAEIABACIAAABIABAAQAGgFALgEQAHgDAKgBIABAAIAIgFQAEgCABgKIAAgQIAIg4IgCgCIgCAAIgCABIAAABQAAAMgFAcIgEATIgCATIAAAAIgBABIgUAGQgLAEgEADIgBgCIAAAAQgCgOgFgOIAAAAIgDgIIAAAAIgGgKIgCgBQgFgEgEgFIgIgKIgBgEIgDgHQgCgHgBgBIgJgIQgGgGAAgCIgLg9gAgsjjIgKgFIgHgFIABgBIAAgBIABAAIACgCIAGAAIANAEIAHACIABAAIAKAAIAFgBIAAgCIAGgDIAGgGQAFgHAAgCIAJgLIAFgEIAMgCIAFAAIAEAEIAJAHIAFAEIgBABIgBAGIgCgFQgBgGgFgDQgFgEgGgBQgGgCgGACQgGACgDAEIgFAKIgEAGQgIANgMACIgNAAIgCAAIAAAAIgBAAIgTgGIgCAAIAAADIAGACIAFADQAIAEALAAQAMAAAJgHQAGgGAFgJIAJgOQAFgGAGAAQANAAAHANIADAGIAAABIgBAEIgDgHIgBgBIgCgDIgDgEIgCgBQgDgDgCgBIgDgBIgBAAIgEgBQgEABAAADIAAABIgDADIgCADIgBAAIgTAcIgGABIgEABIgKACQgFAAgNgDg");
	this.shape_8.setTransform(121.5,68.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AinEEQgPgCAAgCQAAgCAMACIA0AIIAFgCIADgDIABAAIAAAAQAAACgEADQgEADgDAAgAg9DJIABABQgBACgCAEIgEAFIgBABIgUAXgAg9DEIgIgFIgOgPQgDgEAAgCIAAgCQACgHAIgHIAJgHIAIgCIAAAAIgLAKQgLAKAAADQAAADADAFIAOAOQAEAEAAACIgBAAIAAAAgAA5BnIAAgBIAAgCIABgBIARgOIAPgIIAKgDQAHAAAKACIAAAAIgBABIgCAAIgDgBIgEABIgGgBQgHAAgTAOIgRAOIgBgBgACPBZIAAgBQAAgFAKgJIAGgFQABAAABAAQAAAAABAAQAAAAAAAAQABAAAAABIgTATgAioApIADgCIAGgCQAAAAABAAQAAABAAAAQAAABAAAAQAAABAAAAIgBACIgBAAIgTALgACwAxIAAAAIAAgBQAAgBAFgEQAEgEAAADQAAAAAAAAQAAABAAAAQAAAAgBAAQAAABAAAAIgEABIgDAEgAivAAIAAAAIgKgKIABgBIACgEIAAABQAAADAHAHQAFAGAJAHIgBABIgNgKgAgtgfIgCgHIgCgOQAAAAAAgBQAAAAAAgBQABAAAAAAQAAAAAAAAQABAAAAAAQAAAAAAAAQABAAAAABQAAAAAAABIAGAVIAAADIgBAEQgDgDgBgEgAiqgrQgBgFAGgIQAEgGAFgEIgFAKIAAAAIgBABIgHAMgABtgvIAAgEIAAgEIABAGIAKgHIAMgFQAHgCAFgDIACgBIABAAIAAgBIAAAAQACgCAAgDIAGgdIABgEIAAAAIAAAEIgCAhIgDAFQgBACgFACIgTAGIgQAIgABnhSIgFgJIgHgIIgLgJQAAAAgBAAQAAgBgBAAQAAAAAAgBQAAAAgBgBIgCgCIgBgBIgCgDIgCgCIgFgLQgFgLgBgCQAAgEAHAJIAIAQQACAFAIAHQAHAGACADIAAAAIAFAFIACAEIAAABIADAHIAAAAIAAABIAAABgAichlQgEgPAAgGIACgaQACgHACgBQADACAAADIgFAeQAAAEAFAQIAEARIAAABQgDgDgGgPgACdhyIADgQIgBgKIACgEQAAgBABAAQAAAAAAAAQABAAAAAAQAAABAAAAIgFAegAgpjpIgJAAIgPgGIABgBIACAAIAMAEIAAAAIACABIARAAQADAAAIgHIAHgIIAGgLIADgFIABABIAAABIgEAHIgGAKQgEAHgJAFQgFADgGAAIgEgBg");
	this.shape_9.setTransform(123,69);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#A2F2FC").s().p("AiGEKQgXgEgPgBIgCAAIABgCIABgBQACgCAJAAIAqAFIAHADIAJACQAGAAAZgeIAXgfQAAgDgGgIIAIAFQABABAAgBQAAgCgDgEIgPgOQgDgFAAgDQAAgDALgKIALgKIAAAAIgHACIgJAHQgJAHgCAHQABgIANgJIAbgSQgDAFgQANQgQANAAADQAAACAEADIAHAIQAKAMAAAJQAAACgEAFQADgEAAgCIgBgBIgbAkIAPgPIgMAOQgbAggFAAgAioEDQAAACAPACIAwAHQACAAAEgDQAEgDAAgCIAAAAIAAAAIgEADIgFACIg0gIIgIgBQgBAAgBAAQAAAAgBABQAAAAgBAAQAAAAAAAAgABFBtIgBgCIADgEIAAACIAAABIABABIARgOQAUgOAGAAIAGABIAFgBIADABIABAAIABgBIAAAAQgKgCgHAAIADgBIAOAAIAMAMQAHAGADAAIAJgNQALgNAJAAQgEAFgDAHIgBACIgEADIgMAMIgIABIgUgQQgZABgPAKIgKAJIgIAIgACuBIIgHAFQgKAJAAAFIAAABIABAAIATgTIgBgBIgCAAgAjNBFIAIACQAGAAASgOIAMgKIAEgDIAGgCIgDACIgLAMIggATgAC8A3QAAgHAHgEIALgFQgBAEgHAFIgKAJIAAABgADDAuQgFAEAAABIAAABIABAAIAAAAIADgEIAEgBQAAAAABAAQAAgBAAAAQAAAAABAAQAAgBAAAAIgBgBIgEACgAiPArQAAAAAAgBQAAAAgBgBQAAAAAAgBQAAAAgBAAIANgDIgNAIgAiDAiIgegfIANAKIABgBIAOAOQAGAGAAACIgEADgAingLIAAgBIgDAEIAAABIgCgCIADgLIAIgTQANgcAKgGIgJgXIgBgHIgBgaIAAgOQACgPAOABIAAgBQABAAAAABQAAAAAAAAQAAAAAAABQAAABAAAAIgEAOQgEAPAAAMQAAAEAFAQIAFASIgRAXIAGgKQgGAEgEAGQgGAIABAFIABAAQgKATAAAKQAAADAEAHQgGgHAAgDgAiQiRIgCAaQAAAGAFAPQAFAPADADIABgBIgFgRQgFgQAAgEIAFgeQAAgDgDgCQgCABgCAHgAgQgMIgDAAQgJAAgFgUIgDgOIgBgGIABgHQACgGABAAIAFAVQAEAPAAAIIASgBQAPAAAEAEQgKABgNAFIgCAAgAghgzQgBAAAAAAQAAAAAAABQgBAAAAAAQAAABAAAAIACAOIACAHQACAEACADIABgEIAAgDIgFgVIgCgCIAAAAgAB5gpIAAAAIAAgCIAAgFQAAgSgGgMQgEgHgLgNIgMgNIABABIADACQAAABAAAAQAAABABAAQAAAAAAABQABAAAAAAIALAJIAHAIIAFAJIAAAAIABgBIAAgBQAFAPABANIABABIABABQADgCAMgFIATgGIgCABQgFADgGACIgNAFIgKAHIgBgGIAAAEIAAAEIABABIAQgIIATgGQAFgCABgCIADgFIAAgFIADgcIgBgEIAAAAIgBAEIgGAdQAAADgCACIADgTIAEgTQAFgbAAgNIAAgBIACgBIABAAIADACIgIA4IgBAQQgBAKgEACIgHAFIgCAAQgKACgHADQgKAEgHAEgACviNIgBAEIAAAKIgCAQIAAAAIAFgeIAAgBIgCABgABrhiIAAAAQgCgDgHgGQgIgHgCgFIgIgQQgGgJAAAEQAAACAFALIAGALIABACIgFgHQgLgRgHgXQgCgHgCgVIgDgaIALA9QABACAGAGIAIAIQACACACAGIACAHIACAEIAHAKQAEAFAFAEIACABIAEAGgAgujnIgFgDIgGgCIAAgCIACgBIASAGIABAAIgMgEIgCAAIAAABIAOAGIAJAAQAIACAHgEQAJgFAEgHIAFgKIAEgHIAAgBIAAgBIgEAFIADgGQADgEAGgCQAFgBAGABQAGABAFAEQAFAEACAGIABAFIAAAAIgDgGQgIgNgNAAQgGAAgFAGIgJAPQgEAIgHAGQgJAHgLAAQgLAAgIgEgAgUjoQAMgDAIgMIAEgHIgEAHIgGAIQgHAHgDAAg");
	this.shape_10.setTransform(121.5,68.7);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("rgba(107,211,210,0.2)").s().p("Ah2ErIgBgBIgpgBIgVgHIgKgFQgDgBgBgEIABgQQACgEADgDIAUgSQAFAAAEgBQAEgCAEAAIABAAIABABQABABAGAAQANAAAEADIABACIAGABIAQgCIAPgGQALgEgBgLIAAgFIgBgHQAAgBAAAAQAAgBgBAAQAAgBgBAAQAAAAgBgBIgFgBIgDgCQgCgCAAgEIACgTQACgRACgDQAEgFAFgEIAHgFIANgGQAXgLAGgBIAQgBQALgCAHgFQACADABAEIAAAJQAAAEgDAKIgEAMQgGAGgEAHQgCAHAAAGIACAFIAGAHQAHAKAAALQAAAFgPAQIgSASIgIAGIgFAEIgDAFIgFAFIgEAFIgDAFQgDACgIAEIgLAEIgXAAQgGgBgBABIgDACgAiUESIAMACIADABIAGACIAHABIAgABIAsgtIATggIAAgBIgDgFIgMgOIgGgFQgBAAAAgBQgBAAAAAAQAAgBAAAAQgBgBAAAAQAAgEALgHIAVgVIABAAIAAgGIgnAYIgKAIQgFAFAAACQAAACALAPIAFAHIABACIAFAGIACAEIgBAEQAAADgEAEIgNARIgQASQgNAKgDAAIgCgBIgBAAIgSgGIgUgBIgXgBIgPAKIADAFIAJgBIADAAgAAtCaQgDgDgEgOIgDgPQgBgLAFgKQAFgKAJgKIALgFIAKgFQAEgCACgDIABgFQAAgCAEgDIAHgFIARgEQANgDAGAAIAIAEQAIAEAHAAIAGgBIABAAIABACIACgBIACgEQAAgBAAAAQABAAAAgBQAAAAAAgBQAAAAAAAAIAFgGQAHgIAIgGIAKgCQAIgCgCgGIABgJIABgFIgEgGIgHgHIgIAAQgFAAgOAEQgLAEgFAAIgKgBQgbgGgMgOQgFgGgCgGIgEgNQgCgFgKgHIgGgFIgGgGIgIgRQgDgIAAADIgIgLQgIgKgBgDQgBgHAAgGIgBgGIgDgHQgCgJgIgGIgFgEQgDgCAAgEIACgGQACgEAAgFIgBgJQgEgJgGAAIgOAFQgMAEgGAAQgEAAgPgFIgTgGIgCAAIgIgKQgJgKAAgFIABgGIACgFQAAgDAGgCIAKgEIADgEIAHgHQALgKANAAIAQgBQAEAAACgCIAEgEQACgDAEgCIAEgDIAJgFQAPgHAMAAIAPAAQAFABADADIATAjIANAQQAJANAAAMIABAVIABAKIAEAFIAEAGIADAKQADAHACADIALATIABAJIABALQAAAGABABQACADAFAAQABAAADgOQADgRABgCIAFgJIAJgLQANgNAIAAQACAAAFADIAIADIACAAIABABIAEAFIAGAOIAIANQAHALAAAEQgBADgDAGIgHANQgLAVAAAWIACAhIgBABQgCAHAAAFIAAAHIADAFQADAEANAHIAGAIQAEADADAEQADAFAAAGIgDAaQAAAEgEAJIgQAaIgJANQgLAPgWAFIgSAAIgDABIgFAAQgHAAgEgBIgGgEIgHgEQgDgCgHAAQgEAAgMAFIgSAIIgOAHQgMAGgFAAgABwBVQgGAAgHAFIgJAIQgJAHgDAJIgCAEIAAAAIAEADIAIgGIALgHIAFgHQADgDAHgDIAGgCIAIgCQAFAAAFACIADAAIAKAJIAKAJIABAAIAEgDIAFgCIAPgNIAEgGIADgEIADgEIABgHIABgCIABgBQABAAAAgBQAAAAABAAQAAAAAAgBQAAAAAAAAQAAgBAEgCIAFgCIAEgDIAAAAIACgDIAIgKIgCgBIgCgCIgDAAQgHABgGAEQgHADgBAEIgDAHIgCAGIgDAEIgHADIgEADIgEADIgDAHQgEAGgHAAIgUgQgABCjWIgBABIAAAhIgBAHIAFAcIABADQACACADAHIAKAUIACACIAfAmQAHALABAHIAAARIgBAEIAAABIAEAEIARgIIAYgHIANgIIAAgCQAFgbAAgGIAAgMQgBgGACgEIADgNIAAgJIAAgDIAAgCIgBgEIgCgCIgFAAIgEAEIAAADIgBAGIgEAMIAAAAIgCAWIgCAUIgBAFIgCAFQgBACgEADQgDADgGAAIgBAAIAAAAQgKAHgCAAQgBAAAAAAQAAgBgBAAQAAgBAAAAQAAgBgBgBIAAgCIgCgDIgDgTIgJgSIAAgCQgLgEgGgLIgEgNIgBgGIgCgBIgIgFIgEgEIgBgFIAAAAIgBgBIgDgGIgDgLIgDgLIgEgLIgCgLIgCgRIgBgBQAAAAgBAAQAAAAAAABQAAAAgBAAQAAABAAAAgAgxjoIgBABIgBAAIAAABIAHAGIAKAEQAMAEAFAAIAKgDIAFgBIAEgBIAVgbIABgBIACgCIADgEIAAgBQAAgDAEAAIAEAAIAAABIADABQADAAACADIACABIAEAEIACADIABABIACAHIACgDIAAgCIAAAAIACgGIABgBIgFgFIgJgHIgEgEIgFAAIgMACIgGAEIgJAMQABABgGAHIgGAGIgFAEIgBABIgEABIgKAAIgCAAIgGgCIgOgEIgFAAgAi4BoIgFgCIgHgBIgGABIgVAAIgNgMQgGgFAAgHQABgGABgDQACgEAFgGQAEgEAOgGIAQgHQAIAAAEgFQADgEAAgEIgGgKQgGgJgBgEQABgJAEgNIAKgVIAKgTQADgKAAgGIgBgKIgCgOIgDgYIADgOIACgMQACgEAHgJIAPgTIAHgHQAEgDAIgBIAWgFQANgBAJAHQAEAEABADIAAABIABAEIgLAfIgCAeQgBAHADAGIAFAJQADAFACAHQACAHAAAQQAAAEgDAFIgMATQgEAGAAAEQABAGAGAJIAHAHIAEAHIADAPIAEAIIAEAHQAAAIgNAKQgFAEgHAFIgcASQgHAEgCADIgKAIIgCACIgDADQgEADgHAAQgWAAgIgDgAjMBMIAEABIANAGIAAAAIABAAIABABIBNgqIgBgCIgEgHIgJgMIgCABQgBAAgJgFQgHgFgDgFQgDgEgBgDIgBgHQABgHAFgNQAIgOAHgHQAFgIAGgBIAEgHIgDgPIgBgBIgEgGQgCgFgCgHIgBgLIACgRIAKggQgBgBgEAAIgGABIgHAEIgJAIIgCABIABAnQgCAKAFAIIADAGQABADAAAEQAAAEgEAKQgEAIgEAEIgIAPIgCAEIgHAeIACACIAHAGIAFAGIALAMQAHAIAAAEIAAAEQgBACgFAAIgFAAQgGACgDACIgJAHIgFAHQgIAKgLADIgMAAIgDgBgAgvAFQgDgFgCgGIgBgGIABgQQABgGgCgFIgBgJQAAgGAFgHIAEgFIABgDIAAgBIAMgJQAIgFAOgBIAFAAIAJAEIAEAFIAAABIACAEQAEAGAMAKQAKAIAJADQABAIACAFIABAAQACAHAEAAIAHAEQADAEAAAFIgEAFIgNAKQgQAPgIAAIgiABIgPABQgNAAgJgQgAgegwIABACIABAHIAAAHIAAAEIABAEIADALQADAHAFAFIAKAAIACABIACAAIABAAIABAAQAEgFAGgCQAKgCACABIACAAIACgBQAGgDAAgCQAAgCgGgCQgFgCgKgBIgFAAIgHADQgGAAgBgFIgBgEIAAgEIgCgLIgGgRQAAAAgBgBQAAAAAAgBQAAAAgBgBQAAgBAAAAIgDgBIAAgCg");
	this.shape_11.setTransform(120.5,68);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("rgba(107,211,210,0.498)").s().p("AibEQIgBgNIABgCIAAgFIAAgFIAAgCIAAgGIAAgBIACgHIgDgEIgBgBIgBgDIgIgMQgEgHgEgBQAAAAAAAAQgBgBAAAAQAAAAgBABQAAAAAAAAIgDgBQgDgBgCgCIgDgGIgJgGIgPgSIgEgXQAAgHACgHIACgDIADgBQABgBADAEIABABIgBADIAAAFIgBAHIAAAEIABAKQACAEAGAIIADAFIAIAIIAKAFIAFABIABAAIADABQADAAADgCIAFgCIABgBIAAADIgBATIABAEIADAIIABAEIgBAEIABACIACAEIABACIAAADIACALIAGAOQAEAIABABIAFgJIABgDIABgBIANgLIABAAQAHAAAOgMIAjghIAKgEIABAAIgQATQgIANAAADIAAABIgSASIgDAAIgCAAIgCABQgIABgGAEQgHAEgDAFIgFAJIgCAIIgBACIgIACIgDABgAiYDzIABAFIABAIIgCAKIAEAIQAIAPAHAAIACAAIABgFIAEgIQADgGAJgIQAKgJAIACIACgBIAAAAIAAAAIAHgFIAAAAIADgCIAJgJIABgCIAPgVIAJgLIgDADQgLALgGADIgFAFIgKAMQgDAFgNAGIgQAIQgGADgEAIIgDAGIgFAGQgIgJgEgOQgDgIAAgNIgBAAgAjTCDIgBAVQAAALAEAHQADAFAJAJIACABIAQAOIADAAQAHABADADIAEAHIADAHIABAFIAAAAIAEAFIABgBQgDgDgCgGIgBgIIAAgKIAAgFIgBgBQgEACgGAAQgFAAgHgCQgHgEgCgEIgFgHIgDgCIAAgBIAAAAIgBgBIgBgBIgBAAIAAAAIgCgEQgCgDgCgGQgBgGAAgHIACgMIgCgFgAA3CvQgGgDgDgEIgJgMQgGgIgBgDIgGgOIACgDIABgKQAAgDACgEIAAAAIALAIIAAAAIAAAEQAAAGABADQACAGAEADIAHAKIAGAFQAGAGAGAAQAFAAAHgIIAGgJIAHgEQAGgCAMAAIAHgCIAAAAIABABIAEACQALAHAIAAQAFAAAEgIIACgIIARgjQABgEAEgCIADgCIAAgDIgBgJIgBgGIALgMIAOgLIAJAAIACANIgEACQgFAEgFAEIgJAIQgJAGgBADIgBAIIABAMIAAABIgBAFQgCALAAAOIAAACIgZAdQgDgBgEgBIgHgBIgKgCIgBgCQgFgGgFgBIgCgBQgCgCgEACIgmAdgAAdB3IAAADIAAAEIADAKIAOAYQANARAOAAQADABAFgFIALgJQAQgOALAAIAMAIQAOAIAEAAQAFAAAMgRIAHgLIADgHIABgdIgBgBIgBAAQgPAygQAAIgHgBIgGgCQgJgEgNAAQgMAAgLAMIgIAJIgFADQgIAAgHgHQgGgEgFgIQgGgJgDgGQgDgIAAgDIAAgCIgDgEgADCBAQgJAJAAADIABACIAAAAIAPgLQAKgHABgEIAAAAQAAgBAAgBQAAgBAAAAQgBgBAAAAQAAAAAAgBIgBAAIgCgBQgHAEgHAKgAjHBOIAAgBIACgDIACgDIACgDIAXgSIACgBIAJgCIAGgDIAAAAQAEAAABgDIAAgEQAAgEgFgHIgEgFIAAgCIADgEIAHgGIACACIAKAdIgMAKIgRAPIgHgBQgFAAgHAEIgNAJIgBABIgBABgAi3A+IgKAJIgDAFIAAAAIADgDQAFgGAFgCQAJgDAGAAIADgBIAFgEIAUgRIAAgFIgBgFIgHgQIgEAEIAAAEIAFAIQADAGAAADIgDAFIgHADIgBABQgFAEgIAAIgBAAQgHAEgHAGgAgygQIgUgOIABgTIgCgIIAAgHQAAgGgEgIQgEgJAAgFQAAgGACgHIACgNQAAgEgCgDQgCgDgIgFIgKgJIgBgCIgGgGQgCgFgDgCIgFgDIgBgCIgDgBIgHgCIgMAAIgGgBQgEgBgDACQgEADgBAEIABACIgBAIQgDAMAAAKIABAIIACAKIAEAJIgDAPIgDAAIgKgSQgDgIABgDIAAgNIgDgRIACgYIAFgKIAFgBIATgDIAKgBIAEAAIADABIANAAQADACADAEIAEAGIADAGQACAEADACIAhASIAAACIADAKIgCAGQgDALAAAGIADAPQADADAAAEIAGAYIAAAJIABADQABAHAEADQAGAEALADIATAHIAVALIgKAKIAAABgAhXiOQARAPAAAEIgCANQgBANAAAFIAEARIADAPIgBAQQAAAKAHAGQAHAGAVAHIAGACIABAAIAZAJIAEgBQABgBAAAAQAAAAABgBQAAAAAAgBQAAAAAAgBIAAgCIgtgRQgLgGgEgFQAAAAAAgBQgBAAAAgBQAAAAAAgBQAAAAAAgBIgDgXQgBgMgGgKQgFgKACgNQADgPAAgHIgJgFIgJgFQgLgFgEgHQgCgGgGgFIgKgKQgngGgKANQgDAFAAAGIABAXQAAAJgBAJIABAIIAHALQACAFAAAEIACAAIAAgEIAAgFQAAgDgCgEIgCgHIAAguIABgEIABgFIABAAIABAAIAogEQAEAGAZAXgAB6glIgIgFIgGgDQgGgHgDgGIgIgQIgRguIgFgIIgGgHIgBgEIAAgLIADgQIgBgHIAAgFQAAgPgKgHIgJgIIAAgBIAAgFIgCgHIgCgHQgFgKAAgLIACgKQACgGAAgGIAAgEQgBgDgFgCIgJAAIgdAIQgOAEgMAHIgUANIgLAFIgCgDIgBgBIABgBQAIgKAEgCIAOgIIAJgFIAsgTIAZABIAKALIAGAGIAAAAIgBANIAAAIIgBAGIAAAGIACAPIAEAHIASAVIAAABIAAABIABABIAAAYQAAAOACALIABAEIABAHQABAEAIAJIAGAGIAPAoIAEAIIACAIQADAHAEAFIADAAQAGgEACgGIAGgQIADgGQAFgFAPgDIAHAAIANAKIACABIgDAAQgQAAgHAEIgDAEIgGALIgCABIgCAGIgBAFQgDAGgJADgAAtkUIABAFIgCAQIAAABIgCALQAAAEADAHIABADIADAGIABAEQAAAKAEAEIAEAEIADACQAFAFABAEQAEAIAAAPQAAAKgCAIIgBAKQAAAEAEAIIANAYQAFAHAEALIAIAVQAFANAGAFQAHAIAIgBQAJABAFgIIABgBIAHgRQAFgJAFgEQAHgGAOAFIAAgBIgEgFQgDgBgIAAQgJAAgFAHQgDADgFAKQgFAMgCADIgEADQgDACgGAAQgBABgDgFIgFgKQgHgQAAgCQAAgNgFgJQgCgEgKgLQgIgLgDgGQgEgNAAgOQACgYgFgLQgCgJgHgDIAAgBIgCgBIgBgBIgDgBIgFgFQgEgGAAgRIAEgdIgBgDQAAgKgHgGIgBAAIAAAAIAAAAIgBgBIAAAAIAAAAIgBAAIgBgBIgBAAIAAgBIgBAAIgCAAIgBgBIgCAAIgMABIgBAAQgLACgNAFQgRAHgWAMQgSALAAACQAAAAAAABQAAAAAAAAQAAABABAAQAAAAAAAAIABAAIANgJIAUgLQAdgPAegBQAKABABAGg");
	this.shape_12.setTransform(119.5,68.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("AiQEWIgEgHIgBgEIAAAAIAAgBIAGAKIAIAJQAEgDADgGIAHgKQAEgHAMgEIAJgCIAFgDQAHgGAKgOQAJgKAGgDIgPAUIgNANIAAAAIgHAFIAAAAIAAAAIgCABQgIgCgKAJQgJAJgDAGIgEAHIgEADQgEAAgGgKgAinDLQgBAAAAgBQAAAAgBAAQAAgBAAAAQAAgBAAAAQAAgBAAAAQAAAAAAgBQAAAAABAAQAAAAAAgBIADAAQAFAAAAAFIAAACIgCACIgFgDgAi8DAIgGgFQgMgPgDgHIgCgKIAAgMIABgDIABgDIACAaQAAACACADIAEAGIAAAAIABAAIABABIABACIAAAAIAAAAIAKAPgAApCZQgFgHgDgJIgDgHIABgDIAHAMQAEAJACADQAEAFAHAGQAKAJAIAAQADAAAEgDIAJgIQAOgMATAAQAFAAAEADIADAEIgFgCQgEgCgDAAQgJAAgJAEQgHAEgGAFIgJAJQgGAEgFAAQgPAAgPgYgACNCfIAAAAIABAAQAGAAAGgHIAPgVQAFgEAAAIQAAADgKALQgLAMgEAAgADFBEIALgOIACgCIABABQAAAAAAAAQAAABAAAAQABABAAAAQAAABAAABIAAABIgFAEIgJAHgAiwA8IgBgBQACgCAFAAIAGAAIABABQAAAAAAABQAAAAgBAAQAAAAAAABQAAAAgBAAIgFABgAiSAgIgCgGQAAgIADAHIAEAGIABAGIAAAAIAAABIgBAAQgDAAgCgGgAgRgIIgIgDIgBAAIgGgDIgFgEQgEgDgJgCQgHgCgFgJQgDgDABgDIABgFIgBgWQAAgFgDgEIgCgGIAAgBIAAAAQAGAHACALIADAUQABAEADADQAEAGALAFIABABIAMAKIAHACIAHAAQAJABACAEIAAABIgCAAgAB9goQgJgCgJgTIgLgcIgPgYQgKgRAAgJIACgVIAAgDIABAAIABANIgBAHQgCADAAAGQAAABAMAQIAPASQAFAGAFAfIAHAJIAEAFIAEAFQAGAAADgDIAHgEQAFgFACgHIAFgMQADgFAEAAIABAAIAAAAIABABIgBACQgFAEgFAKIgHARIgBABIgDABIgIACIgFABIgBAAgAifhjIAAgCIAAgCIAAAAIABACIABADIgBAAgAighsQgDgEgCgSIgDgUIABgIQAAgFADgEQAIgKAXADIABABIgYAHIgBAAIgBAAIgCABIABABIAAAEIgBADIgCAkIACANgABJi1IgCgGIgDgHQgBgCgFgEQgGgFAAgCIABAAQADAAACACIACAAIAAABQADABAEAGIADAHIABAEIgBAFgAAtj4IAAgBIAAgBIACgHIACgHQAAgHgCgEQgGgKgMAAQgOAAgUAIIgLAFQAWgLAPgEIABAAIAMAAIACAAIABAAIACABIABAAIAAAAIABAAIABABIABAAIAAAAIAAAAIABABIAAAAIAAAAIABAAQAHAGAAAKQAAAFgCAEIgEALg");
	this.shape_13.setTransform(119.5,68.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#A2F2FC").s().p("AiEEhQgIAAgIgPIgEgIIACgKIAAgIIgCgFIACgHIABAAQAAANACAJQAEAOAIAIIAFgGIADgGQAFgHAFgEIARgHQANgHACgEIAKgNIAGgEQAFgEAMgLIADgCIgKALQgGADgJAKQgKAOgGAGIgGADIgIACQgNAEgEAHIgGAKQgEAGgDADIgIgJIgGgKIgBABIAAAAIABAEIAEAHQAGAKAFAAIAEgDIgBAFgAicDfIAAgBIgCgFIgDgHIgEgHIgCgBIAFADIACgCIABgCQAAgFgFAAIgDAAQgBABAAAAQAAAAAAAAQgBABAAAAQAAAAAAABIABACIgHgCIgDAAIgKgIIABAAIgKgPIADADIAFAGQACAEAGAEQAHADAGAAQAGAAADgDIACACIgBAEIAAAKIACAIQABAHADACIgBABgAjEC4QgJgJgCgEQgEgIAAgLIABgVIACAAIACAEIgCAMIAAgLIgCADIAAADIAAAMIACAKQACAHAMAPgAAuCgIgFgIIABAAQAOAYAQAAQAFAAAFgEIAKgJQAGgFAGgEIAJgDQgJADgMAKIgLAJQgFAFgCAAQgOAAgOgSgAA3ChQgHgGgDgFQgDgDgEgJIgGgMIgCADIADAHIADAGIgEgGIgDgKIAAgEIABgDIADgCIADAFIAAABQAAAEADAHQACAHAGAIQAFAIAGAFQAHAGAIAAIAGgDIAHgJQAMgMAMAAQAMAAAJAEIAGADIAHABQARAAAPgzIABAAIAAABIAAAeIgDAGIgIAMQgMAQgEAAQgFAAgNgIIgMgIIACAAQAEAAAEACIAFACIgEgEQgDgDgGAAQgTAAgNAMIgJAIQgEADgEAAQgHAAgLgJgACNCeIAIACQAEAAALgMQAKgLAAgDQAAgIgFAEIgPAVQgFAHgHAAIgBAAgAC6BNQAAgEAIgJQAIgJAHgFIACABIgDACIgLAOIABABIAJgHIAFgEQgBAEgJAGIgQALIAAABIAAAAIAAgCgAjEBMIAEgEIAJgJQAIgHAGgDIABAAQAIAAAGgFIABgBIAHgDIACgFQAAgDgDgGIgFgIIABgEIADgEIAFAMIgBgCQgEgHAAAIIACAGQADAGACAAIABAAIABgBIAAAFIgVAQIgEAFIgDAAQgHAAgIADQgGADgEAFIgEAEgAiqA4QgEAAgCACIAAABIAGABIAGgBQAAAAAAgBQABAAAAAAQAAAAAAgBQAAAAAAAAIAAgBgAgQgJIAOAAIABAAIAAgBQgCgEgJgBIgHAAIgGgCIgMgKIgBgBIAGADIAUAHIASAHIABADQAAAAAAABQAAAAgBABQAAAAAAAAQgBABAAAAIgFABgAg8gcQgHgFAAgLIABgQIgCgPIgEgRQgBgFACgNIABgNQAAgDgRgQQgYgXgEgFIgLAAIgeADIAZgHIgBgBQgYgDgHAKQgDAEgBAFIAAAIIACAUQACASADAEIABAAIgBgDIADAHQACAEAAADIAAAFIgBAEIgBAAQAAgEgDgFIgGgLIgBgIQABgIgBgJIgBgYQAAgGAEgFQAKgNAnAGIAKAKQAFAGADAFQAEAHAKAFIAJAFIAJAFQAAAHgDAQQgCANAGAJQAFAKACAMIACAXQAAABAAAAQAAABABAAQAAABAAAAQAAABABAAQgEgDgBgEIgCgUQgDgLgFgHIgBAAIAAABIADAGQADAEAAAFIAAAWIgBAFQgBADADADQAGAJAHACQAJACADADIAFAEQgUgHgIgGgAifhmIABACIABABIAAAAIgBgDIAAgCIgBAAgABxgtQgGgGgEgMIgJgWQgEgLgEgHIgOgYQgEgIAAgEIACgKQABgIAAgKQAAgPgDgHQgCgFgFgEIgCgCIgFgFQgDgEAAgKIgBgEIgDgFIgCgEQgCgGAAgFIABgKIABgCIACgQIgBgFQgCgGgJAAQgeAAgdAPIgVALIgMAJIgBAAQgBAAAAAAQAAAAAAAAQgBgBAAAAQAAgBAAAAQAAgCASgKQAWgMARgHQANgGAMgCQgPAEgWAKIALgEQATgIAPAAQAMAAAFAKQACAEAAAHIgCAHIgCAHIABABIAAABIAAAAIAFgLQACgEAAgFIAAADIgEAdQAAARAFAGIAFAFIADACIABABQgCgCgEAAIgBAAQABACAFAFQAGAEAAACIAEAHIACAGIAAAAIABgFIgBgEIgDgHQgDgFgDgCQAHAEACAIQAEALgBAYQgBAPAFAMQACAGAJALQAJALACAEQAGAJAAANQAAACAGAQIAGAKIgFgFIgHgJQgEgfgFgGIgQgSQgLgQAAgBQAAgGABgDIACgHIgCgNIAAAAIAAADIgDAVQAAAJAKARIAPAYIALAcQAJATAKACQAAABAGgCIAHgCIADgBQgFAHgJAAQgIAAgHgHgACJgyQADgDAFgLQAEgLAEgDQAFgHAIAAQAIAAADACIAEAEIAAABQgNgEgHAFIAAgCIAAgBIAAAAIgBAAQgFAAgDAFIgEAMQgDAHgFAFIgHAEgAighwIgCgKIADgkIgBAugAifilIAAgBIACgBIgCAGg");
	this.shape_14.setTransform(119.4,68.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("rgba(107,211,210,0.2)").s().p("Ah9E/IgVgDIgDgBQgOgHgCgEIgLgTQgHgIgDgMIgDgJQgBgHgCgDIgCgJQAAgCgDgDIgEgFIgBgFQAAgEgDgBQgEgBgCgDIgCgFQgDgMgPgNIgLgJQgEgDAAgCQAAgHAFgOQAFgOABgHIAEgKQADgDAEgCIAGgFIADgEIAFgFQAGgGAAgEQAAgEgFgFQgEgFAAgCIAEgHQADgHACgBQAEgDACgEQACgGACgBIAVgOQALgGAAgHIgDgKQAAgEABgBIAGgGQABgCAIgDIAIgFQABAEAKALIANAMIAJAMQAIAMAAACIgOAVIgDAFIgFAGQgIAGgTAEIgFAAIgCgBIgBgBIgKAAIgIAFIgHAAIgJAIIgCACIgBAEQAAAEANAKIASANQADACABAFIABAJIACAIQACAEADAAIAGgBIARAAQAIgBAEAHQAEAEACALIACATQACAMACAEIAEAAQAHgCAGgHQAHgHAFgDIAqgSIACABIACADQAEADAIgBQAJAGACAFQACADAAAHQAAAHgKAJIgUAPIgEAIIgCAQQgCAEgDAEIgNAPQgJAKgKAFQgGADgNAJIgYARgAipDFQADABAFAGIAHANIABACIABABIADAFIgBAHIAAABIgBAFIAAADIABAFIgBAFIAAACIAAAMIASAVIACAAIAJgDIAAgBIADgIIAEgJQAEgFAGgEQAHgEAHgBIACgBIACAAIADAAIATgSIgBgCQAAgCAJgNIAPgUIgBAAIgKAFIgjAhQgNAMgIAAIAAAAIgJAIQgBAAgBABQAAAAgBAAQAAABgBAAQAAAAAAABIgBABIgCADIgFAIQgBAAgEgIIgFgOIgDgLIAAgDIgBgDIgCgDIAAgCIABgEIgBgEIgEgIIgBgFIACgSIgBgDIgBABIgEABQgEACgDAAIgDAAIAAAAIgGgCIgKgEIgHgIIgEgGQgGgHgBgEIgBgKIAAgFIABgHIAAgEIAAgDIgBgBQgCgEgCAAIgDACIgBADQgDAHAAAGIAEAYIAPASIAKAGIADAFQABADADABIADABIABgBIACABgAiaApIgKACIgCAAIgXATIgBADIgDADIgBADIAAABIAAABIACgBIABgBIANgJQAGgFAFAAIAHACIASgQIAMgJIgKgdIgDgCIgGAGIgDAEIAAACIAEAFQAFAHAAADIgBAFQAAADgEAAIgBAAgAB+DaIgEgGQgJgJgNAAIgVAGQgSAFgPgCQgGgFgDgGIgGgYQgCgGgFgFIgJgJQgIgIgDgHIgGgNQgCgFAAgFQAAgGADgIQACgHAGgJQAPgUAZgIIAFAAIADAEIADAEQAEAFAFABIAMAGQAGADACADIAEAIIADAMIAEADIAJADIACABIABABQABACAEAAIAMgHQANgGACgEIAFgFIAGgDIAGgEIABgCQAFgCADgDIAEgEIABgEIgDgXIAAgKQAAgDAEgCIAIgCQAEgDAFgGQAGgGAAgEIgFgSIAAgHIAAgEQAAgFgBgBQgDgEgKAAIgBgCIgCgCIgFAAQgEAAgLAEQgFACgKAGIgWAPIgHAAQgKgDgCgFIgCgEIgEgFQgDgBgBgDIgDgFIgCgEQgCgDgKgBIgEAAIgLADQgIADgCAEIgFAMIAAADIgBADIgEADIgEACIgHAHQgEAFgCAAIgHABQgDABgKACQgpgDgHgCIgLgEIgPgGQgEgCgEgFQgCgEgBgEIgBgJQgCgFgCgCQgCgDgBgFIAAgIIgEgQIAAgHIAAgIQAAAAAAAAQAAgBAAAAQAAgBgBAAQAAgBgBAAIgEgEIgHgIQgDAAgFAIIgEAIQgDAGgNAGQgLAEgIABQgBgEgFgHIgUgWIgGgNQgCgDAAgGIACgNIACgLQAEgNgBgMQAAgEACgIIACgMQABgGAFgGQAEgHAJgGIASAAIAJgBIAXAAIACABIAEABIAGgBIAHgBIASAEQAHAAAEgGQADgFAAgEQAAgEgDgFQgBgDgEgDIgFgEQgCgCAAgEIADgPIAAgBIAEgFIAJgKIAKgKQAGgFALgGQAIgEANgBIAYgBIAPgEQAOgEAMAAQAZAAAOAVQAEAGAEAKIADAJQAFAEALAWIAJAWIgBAEIgCAGQgDAKAAAJQAAADADADIAFADIAFAEQADACAAAGIgBAOIAEAWQAFAWAGAAQADAAACgCIAEgEIAggDQAPAAAIACQAHACABACIADAFIAAAEQAAADADAHIACAJIgBADIgCADQgDAFABAKQAAACgIAJQgHAIAAACIAAABIAAABIAEAAIgBAAIAAABIgCADQgBADAAAEQAAAFACAGIADAKQABACAEADQAEADAAACIgBAFQAAAEAEAAIACAAIAAgBIABgBIgCgBIgBgEIAJAMQAIAOAAAOIAAAHIgDAKQgDAHgCADQgEAEgEADQgJAGgIAKQgIALAAAHQAAAHAGAPQAFAPAAAIQAAANgLAOQgNAQgWAJIgQAAIgMAKQgKAIgEAAgAAfBwIgBAKIgBADIAGANQABAEAFAIIAJAMQADAEAHADIATAIIAlgdQAEgCADABIACACQAEABAGAGIABABIAJADIAIABQAEAAADACIAZgeIAAgCQAAgNACgMIABgEIgBgBIgBgMIABgIQACgDAIgGIAKgIQAFgFAFgDIAEgCIgCgNIgKAAIgNAKIgMANIACAGIABAIIgBAEIgCACQgEACgCAEIgQAjIgCAHQgEAJgGAAQgIAAgLgHIgEgDIAAAAIgBAAIgGACQgMAAgHACIgGAEIgHAJQgGAIgGAAQgGAAgFgGIgGgFIgIgKQgDgEgCgFQgCgDAAgGIABgFIgBAAIgLgHIAAgBQgCAFAAADgAiEirIALAAIAIACIACABIACACIAEADQADACADAEIAFAHIABABIALAKQAIAFABADQADADAAAEIgDAMQgCAIAAAGQAAAEAFAJQAEAJAAAGIAAAHIABAIIgBATIAVANIA0ARIABgBIAJgKIgUgLIgUgHQgKgDgHgEQgEgDAAgHIgCgDIAAgJIgFgYQgBgEgCgDIgDgQQAAgFADgLIACgGIgDgKIgBgDIghgRQgDgDgBgDIgDgHIgEgGQgEgEgDgBIgNAAIgCgBIgFAAIgKABIgTACIgFACIgFAKIgBAYIACARIAAAMQAAAEACAIIAKASIAEAAIADgPIgFgJIgCgKIAAgIQAAgKACgMIABgIIAAgDQAAgDAFgDQADgCADAAgAAnkeQAFACAAADIABAEQAAAGgCAGIgCAKQAAAKAEALIADAHIABAHIABAFIgBABIAKAIQAKAHAAAPIgBAFIACAHIgDAQIgBALIACAEIAFAHIAFAIIAZA9QAEAHAGAHIAFADIAJAFIAOAAQAJgDADgGIACgGIACgFIABgCIAGgKIAEgEQAGgEARAAIADAAIgCgBIgOgKIgGAAQgQACgFAGIgDAGIgFAQQgDAGgGAEIgCAAQgFgFgDgHIgCgJIgEgHIgPgoIgFgGQgIgKgBgDIgBgIIgBgDQgDgMAAgNIAAgZIAAgBIAAAAIgBgBIgRgVIgEgHIgCgQIAAgFIABgGIgBgIIABgNIAAgBIgGgFIgJgLIgagBIgrATIgKAFIgNAIQgEACgIAJIgBABIABACIACADIAKgFIAVgNQALgHAOgEIAdgIgAgzjfQgFAEAAADIABARQAAADAHAFIAOAHQAMAHALAJQAGAFACAEIAAAEIgBAkIAAAKIACAIQACAFABACIANASIAHAGIAOAHIADADIABAEQACAFADAAQAFAAAAgGIgCgFQgCgDAAgDQAAgEgBgDQgCgEgCgCQgIgHgEgGQgDgFAAgHQAAgDAEgLQAEgKAAgDIgCgFIgDgIIAAgHQABgFgBgBIgDgNIgFgOQgBgDgIgEIgKgGIgEgHIgFgHIgBgGQAAgFgDgCQgHgJgUAJIAAgBIgCAAQgFAAgFAEgAh/iMIgHACQAAABgBAAQAAABgBAAQAAABAAAAQAAABAAAAIABACQADABACADIADAMQABABAAAAQAAABABAAQAAAAABABQAAAAABAAQABAAACgJIACgLQAAgDgDgDIgEgBIgCAAg");
	this.shape_15.setTransform(119,69.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("rgba(107,211,210,0.498)").s().p("AiRFJQgBAAAAgBQAAgBAAAAQgBgBAAAAQAAgBAAAAQAAgGADgJQACgIAAgHQAAgOgDgNQgEgQgIgKIgQgVIgBgEIgCgCIgMgGQgJgDgCgDIgEgDQgEgHgGgHIgFgFIADgSIAEgDIABACIADAKIAEAEIAFAJQAHAJAIAFIAWAMIABAAIAZAaIABACIAAAAIAGAgQACAMAAAFIgBAIIAAACIACABIABAAIAVgWIAHgIIASgPIAEgCIgBACIAAADIAAAAIgHAMIgHAPIgBACIgEADIgTARQANgMAHgKIAHgMIADgGIAFgJIgoArQgMANgHADIAAgCIAGgSQAAgNgEgRIAAAAIgBgDIAAgBIgFgTIgBgCIAAAAIgFgIQgGgIgJgIIgBgBIgTgOQgOgJgIgIQgJgIAAgHIAAgFIgCARIAIAJIAqAgIABAAQAIAJAGAJQANATAAAaQAAAFgBAEIgCAQQgCAKgCADQACACAFAAIACAAIADgDIAOgMIgRAPIgFAGQgDgBgCgCgABFEIIgGgFIgSg8IADgSQAAgMgOgRIgOgVIgBgEQgCgFgCAAIgBAAIgDgEIgCgCQACgVAGgUIAOgkIAHgEIAHAPIACAHIgMAjIgDAHQgDAGAAAEQAAAGAGAHIAFAHIAFAOIAMAbIAHAxIAAACQADANACADIABABQABAHACgBIABACIATgRIAMgDIgGAMIgaAagAA1DbIADALQAEAMAEAJQAEAIAEAAIAEgBIALgKIAAgBIABAAIABgBIANgRQgGABgJAJIgQAOQgIgSgFgQIgEgRQgBgJABgKIgDgOgAAbBBIgHAXQgGASAAAHIAAAAIAkA2Igbg3QAAgEAEgLIAFgMIACgFIAGgTQAAgUgCgBIgBAAQgDAAgHAZgACdC1IAAgBIAAgBIAAgBQAAgCADgEIABgDIACAAIAAACIgCAEIAAABIAAABQgCAFgBAAgACiCgIgBgEQADgEACgKIAGgSIAAgCQAAAAABAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAgEgCgEIgDgEIgEgLIgCgFIADgFIADgDIARgJQAZgNAGgEQAJgIAGgIQAEgFABgEIAAAEQgCAIgLAJIgOAKIgHADIAAABIgZANIgCACQgIAEAAADIAAAAQAAAGAFAKQAGANAAACIgDAJIgBADIgKAYIgBACQAEAAAEgEQAAgFADgFIAEgIIAEgSIgGgbQAAgEAKgFIAVgNQAOgIAHgGQAKgKAAgHIgCgHQABgDgBgDIAFAOIgCAKIgwAiIgDABQgDABgCACQAAABgBAAQAAABAAAAQgBABAAAAQAAAAAAABQgBADAAACQAAAFAEAHIAFAJQgBAGgFAJIgKAYIAAABIgCABQgFAFgDABgAjpCMIAAAAIgCgDIgFgRIAFgJQAFgHAHgIIAKgKIAHgEQAFgCADgEIAPgJQAMgIACgDIAEgEIACgDIgEgSIAAgIQAAgFgBgEIgGgSQgHgWAAgMQAAgEAGgHIADgEIADAIIAPA0IABADIAAACQAAAHAIAaIAAADIgJAVIgFAFIgOAIQgIABgHADQgIAEgIAHIgDADQgEACgDAFIAAAAQgJAEAAAPIgBACIABASgAiwgqQgBAGABAFIADATIABADQADAGADAOIAEAOIABAJIAAABIACAQQAAAEgEAEQgDAEgHADIgGADIgTANQgSAMgHAHQgMAMAAAJQAAAIADAFQACAEAFAEIgBgEIgEgMQAAgFAEgFIAIgNIAPgNIABAAIAAAAIAKgGIAAAAIAWgLIAHgCQAMgKAAgHQAAgJgDgOIgLgyIAAgBIgBgCQgGgKgBgIQgBgEAAgFgAgiAZIgPgLIgGgFIADgIIAIgJIABgBIgBAMQAAABAAAAQAAABABAAQAAABAAAAQABAAAAABIAFACQAHAEAEgBIAcgGIAWAIIAAAAIgVALgAgxABIgBAHIACADIAHAFQAJAHAKgBQAeAAALgGIAAgCIgEgCIgCgBIgBAAIgGgBIgBAAIgCAAIgFABIgEABQgJADgPAAIgGgDQgGgCgFAAIAAgHIAAgEIgCACgACKgIIgSgYIgKgGIgCgBQgBgGgGgPQgGgUgEgGQgGgIgHgFQgGgEgDgCIgEgGIACgFIAFgRQAHgQAAgOIAAgLIgBgFIgJgXIgGgJIgGgHIgIgeIACgXIABgMQAGAAADgIIABgIQAAgGgEgGQgGgHgNAFQgTAKgQAMQgIAGgGAGQgEABgHAFIgQAMIADgNIAGgMQAFgHAJgFIAMgIIAfgOQAFgDAZgIIABAAIAKAIIALAKIgKAaIgFAlQAAAMAEAGQACAGAOAOIAFAGQACALAHATIAAABIABAFIgBADIgCAFIgGAZIAAAPIAAAEQAAAFALAKIAJAJIAAAQIADARQACAHAFAKIAIAJQAHAGAFABQAFgBAEgHIAFgKIANgTIAAgBIANgCIAcgDIANAQIgGgBIgBgDQgDgHgEAAQgUAAgKAGQgKAEgGAIIgFAIIgFAIQgFAJgGAEIgbgaQgDgEgBgEQgBgCAAgLQAAgLgEgJQgDgGgHgIIgKgMQgFgFAAgGIABgDIAJgnQAAgVgFgMIgCgDIAAAAIgEgDIgBgBIgLgNIAAgBIgEgFIgBgEIgBgCQgCgEgBgIIAAgMIAAgDIABgHIACgJIADgHIABgCIAAAAIAAgBIACgFQACgGAAgHIgBgKQgCgGgJgHIAAAAQgKgBgRAGIgpAYIAAABIgKAIQgKAJAAACIABAEIAAAAIABABIAFgGIAMgJIABgBIAJgHIAGgEIAKgGIACgBQAYgQANAEIAFgBQADAFACAFIAAABIABADIABAJIAAAAQAAAEgDAHQgEAHgDABIgBADQgBAHAAALIAAABQAAAPAEAKQAEAJAGAFIAFAGIABABIAEAEQAEAHAAAKIAAAGQACAIAAAHQAAAKgEAKIgHAVQgBACAAAIIAAAAIAKAKQAMAKAFAIQAIALgCAHQgBAHACAEIAFANQAFAGAJAFIABABQAHAFAMANIAggoIAAAAQACgDAIgDQAIgDAHAAQAJgCADAFIACADIgJgCQgLABgFADIgLAGQgFACgGAFIgFAGIgSAggAgpgqIgEgNQgFAAgJADIgUAJIgBAAIgCAAIgLgHIABgVIgCgOIgCgGIAFgOIAGgcIAAgcIgEgQQAAgGgJACIgMAFQgPAHgHAHIgeAdIgOAPIAAgFQAAgHACgDQACgFAGgGIAKgMQAFgFADgHQAGgGAJgDIALgGIAGgFQADgEANgCIAUgBIABABIAKA9IgEAHIgCALQAAADADAFIABABIgBACIgDAYIAAACIgCAPIAAABIACAAQADAAAKgEQAMgEAEgDIAFgEIAEABQAHACAAACIADAYIgFAMIgDAEQgDgEgDgGgAgphBIAAACIACAOIAEAPIACgHIAAgEIAAgBIgBgNIAAgBQgBgHgDgEIgFACIgCAAIgKAFQgKAFgIABIgJAAIgBgBIAAgKIAGgeIgBgEQgBgDAAgFIgBgCIAAgCIABgJIADgHIAAgCIgCgTIAAgBIgCgKIgEgSIgCgGQgJgHgPAHQgMAFgQAOQgOANgKANQgJAMAAADQAEgGANgNIAbgZQAegZAKASQADAGABAKIgCAvIgEARIgCALIACAPIABAQIgBAHIAFABQAIgFANgBIAEAAIABgBIAJgGIAHgEg");
	this.shape_16.setTransform(119.2,64.6);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("rgba(107,211,210,0.2)").s().p("Ai3FkIgCgEIgDgLIgCgJIgCgbQgBgRgBgFQgBgEgGgHQgFgGgBgEQAAgFgGgGQgEgFgJgFIgFgDIgJgJIgEgCIgHgCQgJgEgBgEIgFgbIACABQACAAAHgMQAHgKAAgCQAAgHgFgFIgKgJIgHgFIACgJIABgGIAAgBIgBAAIgBABIAAgDIABgNQACgPAQgKIAMgBQAIgEAFgGQAEgEACgHIAGgNQADgFAAgGQAAgGgFgJQgDgHgHgJQgDgDgBgNIgBgfIABgBIAKgMIARgIQAMgHAAgKQAAgKgHgEIgHgEIgIgDIgBAAIAAgWIADgLIAIgTQADgGAGgIIAOgNIATgLQABACADAAIAfgRIAHgDIAHgCQAJgCAMAAQARAAALAPQADAEADAIIADAIQACAEADARIACAJIgGAeIgBAKIAAAGQAAADADADIAUALQAFADAFAIIADAFIABACIABAMIgBACQgCAEAAADIACANIgEANIAAADIADACIAJAAIAIgCIAIgBIAIAAIAFACIAIACIAKAKIABABIAAABIgBAGQAAABAEAEIAJAIQANAMAAAOIgBAJIgBAJIAAABIgCAGIgBAKQAAAJADAHIAOAXQAEAKABAJIACAPIADAOIABAIQABAFAEABIAFADQABABAAAAQAAAAAAABQABAAAAABQAAABAAAAIABAEQAAAAAAAAQABABAAAAQABAAAAABQABAAABAAIAHAAIAKgMQAGgKAAgEQAAgDgDgHQgDgGAAgFIACgJQAAgDgCgDIgEgFQgGgIAAgLQAAgFADgGIAIgOIAAgGQABgFACgDQAIgLAXAAQAIAAABgCIABgDIAAgEQAAgDACgDQACgDAHgDQAFgDABgEQABgCgBgEIAJgHQADgDAAgCQAAgJgCgEQgEgGgHAAIgSAKQgQAMgCAFIgLAXQgFAGgKAAQgHAAgDgBQgCgCgBgDIgCgEQgDgCgGgBIgGgKIgFgKQgFgLgMgGQgQgJACgKQABgDgCgGIACgBQgDgFAAgHIgBgLQgCgHgEgEQgFgHgLgHQgOgHgFgPQgEgLAAgOQAAgHAHgIIAGgEIAAgBQAFgCADgHIADgHIAAgEQAAgIgIgSIgFgMQgDgFAAgFIACgGIACgHIgBgCIgFgEQgHgGgFAAQgLAAgIALIgGAIQgCADgCAAQgBAAgDgDIgEgDIgHgDIgIgBIgVABIgFgBQgDgFgCgIQgCgHAAgHQAAgFADgJIAIgRQAMgUARgHQADgBAHgFIAJgIQADgEAFgCIAIAAQAGABADgBQAFAAAKgEQAEgBAEgEIAJgJQANgLAUAAQAMAAAOALIAIAJIAEAHIAHAOQAFAJgCAGQgDAMACAJQADAGAGAEIAKAJQAFAJAAALIgIAaQgHAYAAAGQAAAHACAEIAFADQADACACADQACAEAAAKIgEAXIgFAOQgCAEAAAGIAAAEIAAAGQADAKAJAAQAEAAADgCIAMgDIALgCQADABAIgCQADgBAGgFQAJgEAKAAQATAAAHAMQADAFABAEIABAEQABADAAAEIABAHQABAFADAEQADAEAAACQAAAEgKAOIgHAKIgDAHIAAACIABACIAAAMIABAFQADAGAIAIQAHAGAGAIQAGAIAAAGIADARIAJAYQACAHAAAHIAAAGQgBACgEAFIgKAHQgJAFgCAAIgOABIgRAHQgEABgEAEIgGAGIgCAGIAAAFQgBAIgCADQgFAFgCAGIgBALQAAAHgGAIIgFAFIgEACIgLgCQgCAAgHADIgJADIgFgBIgDgDQgFgFgFAAQgJAAgBAGIAAAFIABADIgEAJIgBAHIABAGIgBADQgDAFAAAGIAAAEIgEADIgCACIAAABIABABIAAAAIgIAMIgBAAIgDADQgHABgFACQgEACgEAEIgEADIgBABIgEABIgVADIgJgBIgDgCQgFgGgBgCIgEgNQgBgIgEgKIgCgHIgHgKQgHgOgCgJQgBgHgGgMQgGgMgBgHIgEgmIgGgKIgEgKIgCgUIAKgRIgCgOQgBgDgGgEIgHgDIgBgCQgCgFgMgFIgUgHIAAgDIgGgTIgGgUQAGgHAAgFIAAgBIgBgCQgCgCgIAAIgMgFQgIgDgDgDIgGgHIgQgXIgEgIQgDgEgFAAIgCgBIgFAAIAAAEIABACIACACIARArQAMAhAAAQIgCAOQAAAFADAGQACAEAAAGQAAAEgIAKIgFAHQgDAEAAACIABAEQAAADgGAFIgTARQgEAFgFACQglAMAAAQQAAADAFACIAHAEIACAEIACACQABABAUADQASABAIAHQADADACADIADAGIAEADIAGADQAHADACALIAEANQADAJADAAQACAAADgDIAIgGIACgBIAegEQAEAAAEADQAEADAAADIABAKIAEATIgCADIgBAEQAAANgBAFQgCAFgFAEIgQAMIgdAYQgFAFgLARIgFABIgCAAIgBgBIgIgBQgHAAgLADQgIADgHABIgOACgAjlCtIgDATIAGAFQAFAGAFAIIADADQADACAJAEIALAFIACADIACAEIAQAUQAIALAEAQQADANAAAOQAAAGgDAJQgCAJAAAFIABAFQACACAEAAIAEgFIApglIAEgDIABgCIAHgQIAHgLIABAAIAAgDIAAgDIgDACIgTAQIgGAHIgVAXIgBAAIgCgCIAAgCIABgHQAAgGgDgLIgFggIgBAAIgBgCIgZgaIAAAAIgXgMQgIgGgHgIIgFgJIgEgFIgDgKIAAgCgAASAyIgPAkQgEATgCAWIABABIADAFIAAAAQADAAABAEIACAFIAOAUQAOASAAALIgEATIASA7IAHAGIAEAAIAagaIAGgMIgNADIgTARIgBgCQgBAAgCgGIAAgBQgDgDgCgNIAAgCIgHgyIgMgbIgGgNIgEgHQgGgHAAgHQAAgDACgHIAEgGIALgjIgBgHIgHgPgACUCzIgCAEQgCAEAAACIAAAAIgBACIAAABIACABQABAAABgFIABgBIAAgBIACgFIgBgCIAAAAIgBAAgADfApIgBABQAAAEgEAFQgHAIgJAHQgGAFgYAMIgSAKIgCADIgDAFIABAFIAFALIADAEQACAEAAAEQAAABAAAAQAAABgBABQAAAAAAABQAAAAAAAAIAAABIgHASQgCALgCAEIAAADIACADQACAAAGgFIABgBIABgBIAKgYQAEgJABgHIgFgJQgEgHAAgEQAAgDACgCQAAgBAAAAQAAgBAAAAQAAgBABAAQAAAAABgBQABgCADgBIAEgBIAvgiIADgKIgFgOQABADgBADgAi9gmQgFAHAAAEQAAAMAHAVIAFATQACAEAAAFIgBAIIAEASIgCADIgDADQgCAEgNAIIgPAJQgDADgFADIgHAEIgJAKQgIAHgFAIIgFAJIAGARIABADIABAAIAJAGIAAgEIgBgOIABgDQAAgOAJgEIAAgBQAEgEAEgDIACgCQAJgIAIgDQAGgDAIgCIAOgIIAGgEIAJgVIgBgDQgIgaAAgHIAAgCIAAgDIgPg1IgDgHgAg6ACIgHAJIgDAJIAFAFIAPAKIAmABIAVgLIAAAAIgWgIIgcAGQgEAAgHgDIgFgDQgBAAAAAAQgBgBAAAAQAAAAAAgBQAAAAAAgBIAAgOgAAtksQAEAFAAAHIgBAIQgDAHgGABIgCALIgCAYIAJAeIAFAHIAGAJIAJAWIABAGIABALQAAAOgIAPIgFARIgBAGIAEAFQACADAGAEQAIAEAFAJQAEAGAHATQAGAQABAGIACABIAJAGIATAWIAIAFIASgfIAFgGQAFgFAFgCIALgGQAGgEAKAAIAKACIAAABIAHABIgOgRIgoAGIgBABIgHAJIgKATQgFAIgEAAQgGAAgHgHIgIgJQgFgJgBgIIgDgQIgBgQIgJgJQgLgKAAgFIABgEIAAgPIAGgZIACgFIAAgEIgBgEIAAgBQgHgTgBgMIgGgFQgNgOgDgGQgDgGAAgMIAFgmIAJgZIgKgKIgKgIIgBAAQgaAIgEADIgfANIgMAIQgKAGgEAHIgGAMIgEAMIAQgLQAIgFAEgBQAGgGAIgGQAQgNATgJQAGgCAEAAQAFAAAEAEgAg2gfQACAGAEAEIACgEIAFgMIgCgYQAAgCgIgCIgDgBIgGAEQgEADgLAEQgLAEgDAAIgBAAIAAgBIABgPIAAgCIAEgYIAAgCIgBgCQgCgEAAgEIACgKIAEgIIgLg8IAAgBIgVABQgMACgEAEIgFAFIgMAFQgIAEgGAGQgDAGgFAGIgKALQgGAHgCAEQgCAEAAAHIAAAEIANgOIAfgdQAGgHAPgHIANgFQAIgDAAAHIAEAPIABAdIgGAcIgFAOIACAGIABANIgBAWIAMAHIACgBIAAAAIAVgIQAIgDAGgBIAEAOgAkHCrIADgDIAAAAIgDAFg");
	this.shape_17.setTransform(120.5,63.5);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FFFFFF").s().p("Ah/FCIAAgBIAJgKIAOgPIAQgSQAEgFADABIgIAMQgHAKgNANIgQAOgAiLD8QgFgMgJgJIgHgGIgBAAIgFgFIgigbQAHABAFAGIAOAMIAZASIAMANIABACIAEATIABACIAAACIAAABgABQEEQgEAAgFgLIgHgOQgHgWAAgFIAAgCIACgCIAAAAIAEARQAFARAIARIAPgOIALgEIgJAMIgBABIAAAAIAAAAIgLAKgAAkCIQgNgRAAgDIABgKIACgFQAFgIACgLIACgSQAAgLAHgDIABABIAAACQgBARgDAMIgDAFIgEAMIgDAFIgCAIQAAAGACAFIAIAKIAJASgAC0CIIgBgDIABgDIACgIQABgDgGgNQgFgKgBgGIAAAAQADgDAGgEIABgCIAagNIAAAAIAHgEIAKgEIgZAPQgWAPAAADIADANQAEAMABAGIgDAHIgCAFgAjfBuQAAgFANgHIAVgOIAVgNQASgKgBgDIgCgLIgCgFIgBgFIAAgBIgCgJIAAgBIgBgJIgJgoIABAAIAHAUQAGALABAIIABAUIAFATIgDAHQgDAGgGADIgXAOIgFADIgBAAIgJAFIAAAAIgBAAIgIAGIAAABIgRALgAgUAWIAWgIIAIgCIAAAAIAHACIAAAAIACABIABAAIAAAAIgFADIgIACQgIADgJAAgACegYIAJgQQAGgLAFgEIAQgGQANgEAAAEQgHABgJADQgHADgCACIgBAAIgYAegACBgeQgIgGgFgGIgGgMQgBgFABgGQABgIgHgLQgGgHgLgLIgKgJIAAgBQAAgIABgCIAHgVQADgJABgKQAAgIgCgIIAAgGQAAgKgFgGIgDgFIAAgCIAAgBIAEAGIABABQAFAIAAAMIAAAdQAAAKgBAMIgCAMQAAAGAMARIAIAMQAEAFABAEQACAFAAAFIABALQADANAOAJIAAABgAgig1IgCgIIAAgCIgBAAIAAgDIgOAHIgSAHIgBgBIgBAAIACgCQAJgCAJgFIAKgFIADAAIABAAIAAgBIACgBIADAFIADAGIAAABIABANQgDgCgDgHgAhSg/IgBgEIACgOIgCgIIADgXQADgQAAgLIgDglIABgDIAAAAIAEASIACAKIAAABIABAIIgDAdIAAADIgFAyIgBABQAAAAAAgBQAAAAgBAAQAAgBAAAAQAAgBAAgBgAiZiNQgBgCALgLQAMgLAGgDIgcAcgAA9j6IgCgBIAAgBQAAgLABgHIABgDQADgBAEgHQADgGAAgEIAAgBIABgEQAAgFgCgGIgEgKIgDgEIgiAJIgUARIgHAEIgHAIIgBAAIgTAOIAAgDQAAgDAJgIIALgJIAAAAIABgBIASgMIAWgMQARgGAKABIAAAAQAJAIACAFIAAALQAAAGgBAGIgCAFIAAABIAAABIgCADQgFAHgBAEQgCAGABAHIAAABIAAABg");
	this.shape_18.setTransform(118.7,64.3);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#A2F2FC").s().p("AiKFFQgFAAgCgCQACgEACgJIACgQQABgFAAgEQAAgagNgTQgGgKgIgIIAGAGQAJAJAFAMIAJARQAEAPAAAOIgGARIAAACQAHgDAMgLIAKgNIAegfIgFAKIgDAFQgCgBgFAFIgQASIgOAPIgJAKIAAABIACABIgCACIgDADgAA/D6QgEgJgEgLIgDgMIgCgYIAAgaIADAPQgBAIABAKIgBACIgBACQAAAFAIAWIAGAOQAFALAEAAIABAAIgEABQgEAAgEgIgAiaDiIgagSIgNgLQgGgGgHgCIAIAIIgKgHIgIgJIACgRIAAAFQAAAGAJAKQAIAGAOAKIATANIABACQAJAIAGAIIAEAHIgKgNgABlDlIgEAEIgLAFQAJgIAGgBgAANBxIAAgBQAAgHAGgSIAHgXQAHgbAEADQACAAAAAUIgFARQADgMAAgPIAAgCIgBgBQgGACgBALIgCATQgCALgFAIIgCAFIgBAKQAAADANARIAKAPIAJATgACjCaIAKgYIABgDIgBADIABADIABAAIACgGIACgGQAAgGgEgMIgEgNQAAgDAXgPIAYgPIgKADIAOgJQALgJACgIIAAgEIAAgBIACAGQAAAIgKAJQgHAHgOAIIgVAMQgKAGAAAEIAGAbIgEASIgEAIQgDAFAAAEQgEAEgEABgAjpCGQgDgFAAgHQAAgJAKgKQgBAAAAABQgBAAAAABQAAAAAAABQAAABAAAAIAAABIAQgLIgHAHIgIALQgEAGAAAEIAEAOIABADQgFgFgCgDgAAYB4QgDgGAAgFIACgJIADgEQgEALAAAEIAJATgAjHBQIATgMIAGgCQAHgDADgFQAEgEAAgEIgBgLIACAFIADAKQAAAEgRAKIgrAbIgIAFQAHgHASgNgAi8BRIAYgNQAFgDAEgGIACgHIgEgTIgCgTIAEARQADANAAAKQAAAHgMAJIgHADIgWAMIAFgEgAgqAPIgHgFIgCgDIABgHIACgCIAAAEIAAAHQAFAAAGADIAGACQAPAAAJgCIAEgDIAFgBIACABIgHABIgXAJIAKABQAJAAAIgDIAIgCIAGgDIAAAAIADACIAAABQgLAGgeABQgKAAgJgHgAinAKQgDgOgDgGIgBgCIgDgTQgBgHABgFIACgGQAAAFABAFQABAGAGALIABACIAAABIAGAYIgFgMIgHgUIgBABIAIAoIABAHgAB9ghIgBgBIABAAIAAgBQgOgIgDgNIgBgLQAAgFgCgFQgBgEgEgFIgIgNQgMgQAAgGIAAgDQAAAFAFAHIAKALQAHAJADAFQAEAJAAALQAAAKABADQABAEADAEIAbAaQAGgEAFgJIAFgHIAFgIQAGgJAKgFQAKgFAUAAQAEAAADAHIABADIgBAAIgCgEQgDgFgJACQAAgFgNAFIgQAGQgFADgGAMIgJAQIgBACIgHALQgMgOgHgFgAgogyIgCgOIACAIQADAGADADIAAAAIAAAGIgCAFgAhagxIABgIIgBgQIgCgPIACgMIAEgRIACgWIAAgYQgBgKgDgHQgKgRgeAZIgPANIANgNQgHAEgLALQgLALAAABIAAABIgNAQQAAgEAJgMQAKgMAOgNQAQgOAMgGQAPgGAJAGIACAHIAAAAIAAACIACAlQAAAMgDAPIgDAYIACAIIgCANIABAFQAAABAAAAQAAABABAAQAAABAAAAQAAAAABAAIAAAAIAFgyIABABQAAAFABADIABADIgGAfIAAAKIABABIAJABIgDACIABAAIACAAIARgGIAOgHIAAADIgHADIgJAHIgBABIgEAAQgNABgIAGgAgmhDIgDgFIACgBQADAFABAHgAhOiRIABALIAAADIgDAGgABSiGQACgLAAgKIgBgdQAAgMgEgJIAEADIAAABIACACQAFAMAAAVIgJAngABIjRIgFgGQgGgGgEgHQgEgLAAgPIACAAIABAAIAAAAIAAgBQgBgIADgGQAAgDAFgHIABgBIgDAHIgCAJIgBAHIAAACIAAALQABAJACAFIABABIABADIAEAGIAAABIAGAIIAAABIAAABgABAkwIgBgDIAAgBQgCgFgDgFIgFABQgNgEgYAPIgCACIgKAGIAUgSIAigIIADAEIADAKQACAGAAAFIgBAEIgBgJg");
	this.shape_19.setTransform(119.3,64.7);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("rgba(107,211,210,0.498)").s().p("AhmEBIAAgBIgCgMIAAgDIgBgDIgDgEIgDgCIgIgCIgDAAIgDgFQgCgDgEgCIgCgBIgBgCQgDgDgLgIIgJgFIgDgDQgDgCgDAAQgDAAgCACIgEgCIgDgDIgHgQIACgDIARAIIABAAIAOALIAOAHIAGADQACADADABIABAAIAFAHQAFAHADAAIABgBIADABIADABIAFADIAEADIAAACIACADIAAAQIAAACQAAABABAAQAAAAAAABQABAAABAAQAAAAABAAQADAAADgEIACgEIAFgFIABgBIAEgBIAKgDIAHABIADACIgHAEQgEAAgIAFIgKAIQgDADgBADQgHAFgCAAQgEAAgEgJgAimDCIAFABIAJAFIABABIAAAAIAEADIADABIAIAFIAGAIIALAIIAGADIACAAIAGACIAAAAIABAAIAAABIAEAMIAAADIgBADIAAADIAHAKIAIgHQADgGAKgFIALgFIABgCIAAgBIgNADIAAAAIgNAOIgDACIgCAAQAAAAgBAAQAAAAgBAAQAAgBgBAAQAAAAgBgBIAAAAIgCgDIAAgFIAAgKQgBgFgCgCIgGgDIgHgDIgHgGIgBgBIgBAAIgBgBIgCAAIgJgJIgKgEIAAgBQgLgFgGgEQgMgIgEgGIAAAAIgBAAIAAAAIgDgBQABAGAOALIABgBIAAABgABrDbIgHgEIgLgDIAAAAIgGgDIgSgYIgCgDIAIAAIAsAcQACAAAHgJIABgCIAYgbIAFgBIgGARIgCANIABAGIghARgABYDMIAKAGIABABIANAJIACABIACAAIAAgBIAbgPIAAgIQABgLADgIQgZAkgHAAQgCAAgLgIIgQgKIgBgBIgBgBIgPgIgAAuCfIAAgBQgGgGgGgKIgKgQIgGgJIAAgBIgBgFIgDgGIgMgQIgCgGIAAgCIACgDIAEAAIAFACQAAADACAGIADAHIgBAFQAAABAEADIAHAEIAEAEQADAEADABQAFADADAGIAEAJIANASIAAALgAAcB9IAAACIABAAQADALAIAJIABACIABABIAGAEIAJAGIAAgCQAAgDgMgTIgGgHIgQgRIgDgEIgBgBgAACBRIAAABIAAADIADAFIAGAIIgBgIQgBgEgEgFIgDAAgAjdB6IgCgFIAJggIAWgOIAFAAIAIgBIAEABIAKAAIANgDIADgBIAPgCIAGgCQAKAEADAAQADAAAGgKIAFgIQAPgCAFgCIAVgOQAJgFACAAQAHAAAFACQAEADAHALIAJAIIACAFIABACIgDAEIgDAAIgbgUIgCgCIgEAAIgCABIgBABQgEAAgHAEIgKAGQgGAEgDADIgJAHIgMAJIgCAAIgCABIgBAAIgLABIgUADIgEgBIgHAAIgLABIgTAFQgZAJAAAQIABAFIABAFQAAAFgCAGIgDAHgAizBNQgVAAgKAKIgDADIgDAHQgCAIAAAFIABAMIADAJIAAgYQABgFAEgHIABgCQADgEAFgDIABgBQAFgCAHgBIAQgFQASgDARAAQARAAAHgCQAFgBACgDIACgDIADgEQAFgEAIgDIAGgEIATgKQANgGAIAGIABACQAEACAEAEIAFAFQAEADACAAQAAAAABAAQABAAAAgBQAAAAABAAQAAAAAAgBIAAgCIgHgFIAAgBIgFgFIgCgDQgGgHgJgBIgEABIgIACIgBABIgCAAIgFAEIgHAHQgEADgEACIgPACIgEAAIgCAFIgBAAIAAABIgFAIIAAAAIgBABQgDADgGAAIgFgBIgBAAgACIBtIgFgFIgCgHIgFgSIgDgHQgBgEgEgFQgFgHgGgEIAFgCIADABIAHAAIACAAIAEAEIAJAWIABAFIAFAPIAAAGIgDAHgAByA6IAFAFQADAFAEAJIAEAOQADAJAEAFIgIggIAAgBIAAgBIgBgCQgBgIgHgGIgBgBIgIgBgABUAuIgBAAIgNgEIAAAAIgJgHIgSgLIABAAIACAAIAPAAQAKAAAFABIAMAGIAOAOIgLACgABGAlIALAGIADABIAMAAIABgBIgSgNQgJgDgVgCgACfAFIgmgjIgEgDIgCgIIgBgNIACgHIAIgDIACAAIAmAzQADAFAHAIQAKAHAIAAQAJAAAKgHIAJgHIAEABIAAAAIgHAIIgQAUIgCABQgMACgHAEgAB3g4IAAACQAAAFAKAPQAJAOAFADIAWAVQAQARAGAAQALAAAJgIQAEgEAHgKIgCgCIgBADIgEAFQgGAIgNAAQgGAAgFgFIgIgEQgGgDgFgEIAAAAIgBAAQgJgJgIgKQgIgKgHgNIgHgMIgCAAgAAhAXIgCAAIgCgBIgJgEIgNgJQgFgDgCgDQgEgCgCgDIgFgHQgHgIgLgCIgJAAIgEgBIgBgBIgCgDIgHgHIgMgPIgBgDIgDgUIAAgSIAEgNIABgOIADgIIAAgBIAEgDIACAAIAAABQAAAIAIAaIAEAOIgCANIAAALIADAGIAFAFIAFAGIAGAFIAPAFIACACIAkAlIAHAKIAAABgAAgAVIgSgRIgRgRQgDgEgHgEIgUgMQgIgDgEgHIgFgUIAAgXQgCgTgFgNQgCAAgCASIAAAnIAEANQAEALAMAKIAFAEQAGgDAQAKIAUAUIAaARIAAAAgABmhdIgCgDIgBgFIgBgLIgDgOIgEgJIAAgBQgBgLgEgKIgFgSIABgLQAAgCgDgEIgRgiIgIgKQgNgOgNADQgGgBgHAFQgCgCgCgBIgNAAQgMACgIAFIgIADQgEABgDAFQgJALgBAEIAAAAIgFAPIgBAXIgDACIgIAIQgEAAgIADQgDAAgCAEIgBAFIgEATIABACIgCAGIgBgDIABgVQABgHADgDQAEgGAJgCIAEgBIACgDQAFgEADgFIgCgIQAAgGAEgMQAEgKADgEIAGgIIADgDIAAAAIAAAAIABgBIAAAAIAHgEIADAAQAQgJAVAAIANABIAEgCIAMgCQAHABADADQAOAIAFAPIAMAYQAHAPAAAIIAAAKIAPA1IABASIABAAIADAAIABgBIAAgEIgIgwIgMg4IgCgJIgMgQQgIgKgJgGQgHgGgMgEQgHgDgLgBQgNgBgOAFIgBAAQgVAIgQAQQgGAIgEAHQgEAHAAAHIAAAJIACAKQgGAFgKAGIgKAFQgFACgCADQgBADAAAHIABAKIABAKIgEgGIAAgZIAOgJQAJgGADgDQAEgEAAgEIgBgVIAAgEIAIgJIATgSIARgNIAQgGIAUgEIAGAAIAoAQIADACIAdAoIADATIAGAiIABAGQACAOAFAMIAAAZIgBACIgIACg");
	this.shape_20.setTransform(116.6,63);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("rgba(107,211,210,0.2)").s().p("AiJEQIgRgLIgLgMQgHgJAAgFIgCgIQgDgFgDgCIgFgEQgBgBgBAAQAAAAAAgBQgBAAAAAAQAAAAAAgBIgCgEIgCgDQgJgHgCgHIgCgPQAAgKgDgEQgEgIgMgFIgRAAQgGgIgCgXIgBgXQAAgHADgGIAGgPIACgGQACgEAEgDQAMgJAdAAIAKgBIAFgDQAJgGAWgHIAFAAIAHAEQAGADADAAQAFAAAJgJIAKgKQACgDABgDIABgFQABgDAHgBIAWgCIABgBIAAAAQABAAABAAQAAAAABAAQAAAAABgBQAAAAABAAIABgDQAAgCgCgDIgFgHIgYgLQgGgEgDgIIAAgMIADgSIAAgCIgCAAIACgHQAAgGgHgJQgHgKgGgDQgFgCgBgMIgBgIIABgFIABguIAEgHIAOgPQADgEgBgEQgBgRARgNIASgPQAKgJALgFQALgGAdgHIAbgHIAgAEIAMAFIAhAOQARAIAIAHQALAIADARQACAIAAAUQAAAOgCAIQAAAEgDAGIgDAJQgBAHAAALQAAAKADAFIADAEIABAHIgFAVQAAABAAABQAAAAABABQAAAAAAABQABAAAAAAIAGABIAHABQAEACAEADQACADACAFQAAAEAEACIAFAHIAFAJQAIAMALAAIAXgEQAXAAAIANQAEAHAAAHIACAgQAAAEgBACIgFAEIgdAKIgLAFQgIADgCADQgBAAAAABQAAAAAAAAQgBABAAAAQAAABAAAAIABADQAAABAAAAQgBAAAAABQAAAAgBAAQAAABgBAAQgCABgJAAIgDgCIgGgBIgDAAQAAAAgBAAQAAAAgBABQAAAAAAAAQAAAAAAABIAAABIgFAEQgBADAAAFQAAAGACAEIAEAMIAJAMQAIAHAAAEIgDAEIgFAGQgHAKAAAFIAAABIAAABIAAADQAAAGAIAKIAGAIQADADABADIAEAfIgBAFIgBAFIgHAEIgHAEIgEAFIgDAFIAAADIAAACQgCADgSAAIgPABIgXAFIgFADQgEAEgBAAQgCAAgKgHIgOgKIgSgSQgGgGgHgMIgMgSIgGgJIgEgKIgGgIQgFgGgBgDQgCgEgHgFQgGgEgFgFQgEgGgBgEIAAgJIACgVIAAgEQgBgDgEgDQgEgEgGADIgFADIgFABIgRgCQgEAAgHAEIgZAPQgHAEgGAAIgOgCIgJgCIgTAAIgPACQgNACgFADQgCADAAAEIABAHQAAAFgHAMIgEAGIAAABIAAAAIgCAAIAAACIACALQAEAIAKgCIADADIAFAAIADgBIAKgBIABACIACABIAPABIAMAHIAIAGIAQAHQAGACADADIAEAHIAEAIIAEAIIAFAGIAEAAIACgBIAGgBIAMABIAMgBQADADACAHIABAIQAAACgFAEQgFADgCADIgEAGIgjAhIgHABQgPAAgcgSgAikDGIADADIAJAFQALAIADADIAAACIADABQADACACADIAEAFIADAAIAHACIADACIAEAEIABADIAAADIABAMIAAABQAEAJAEAAQADAAAGgFQABgDAEgDIAJgIQAIgFAFAAIAGgEIgDgCIgGgBIgKADIgEABIgBABIgGAFIgCAEQgDAEgCAAQgBAAgBAAQgBAAAAAAQAAgBgBAAQAAAAAAgBIgBgCIAAgQIgBgDIgBgCIgDgDIgGgDIgCgBIgDgBIgCABQgCAAgFgHIgGgHIAAAAQgDgBgDgDIgFgDIgPgHIgOgLIgBAAIgRgIIgCADIAIAQIADADIADACQACgCAEAAQADAAADACgAA6C2IADADIARAYIAGADIABAAIAKADIAHAEIAIAFIAggRIAAgGIACgNIAFgRIgFABIgYAbIgBACQgGAJgCAAIgsgcIgJAAgABVB4QAAAGACAFQADAHAEAFIAHANQAFAKABAAQACAAAFgFIAGgFQAEgCADgDQACgCAAgDQAAgGgHgGQgGgGgJgFQgGgEgJgCIgDAAQgEAAAAADgAgCBOIgDADIABACIACAGIALAQIADAGIABAFIABABIAFAJIAKAQQAGAKAGAGIAAABIAPAGIAAgLIgMgSIgEgJQgDgGgGgDQgDgBgCgEIgEgEIgIgEQgEgDAAgBIABgFIgCgHQgDgGAAgDIgEgCgAi/BHIgGAAIgVAOIgKAgIACAFIAJAPIADgHQADgGAAgFIgBgFIgBgFQAAgQAZgJIATgFIALgBIAHAAIADABIAVgDIALgBIABAAIABgBIADAAIAMgJIAIgHQADgDAHgEIAKgGQAHgEAEAAIAAgBIADgBIAEAAIACACIAbAUIACAAIAEgEIgCgCIgCgFIgIgIQgHgLgEgDQgFgCgHAAQgDAAgIAFIgWAOQgFACgOACIgGAIQgFAKgEAAQgCAAgLgEIgGACIgPACIgCABIgOADIgKAAIgDgBIgIABgABkA0QAHAEAFAHQADAFACAEIACAHIAFASIADAHIAEAFIACABIADgHIAAgGIgEgPIgCgFIgJgWIgEgEIgBAAIgHAAIgEgBgAA4AjIAJAHIABAAIANAEIAAAAIAIABIAKgCIgOgOIgMgGQgFgBgJAAIgQAAIgCAAIAAAAgABwg9IgCAHIABANIABAIIAEADIAnAjIAUAYQAIgEALgCIACgBIARgUIAHgIIgBAAIgEgBIgIAHQgLAHgIAAQgIAAgKgHQgIgIgCgFIgmgzIgDAAgAhAh7IgBABIgCAIIgCAOIgDANIAAASIACAUIACADIALAPIAIAHIABADIACABIAEABIAIAAQAMACAHAIIAFAHQACADADACQADADAEADIAOAJIAJAEIABABIADAAIABABIABgBIgHgKIgkglIgDgCIgOgFIgHgFIgFgGIgEgFIgDgGIgBgLIACgNIgDgOQgIgaAAgIIAAgBIgDAAgAgEjbQgMAJgHALQgKANAAAJQAAAJAEAKIAJASIAGAJIAKALIAAACQAAAFACAEQACAGALAQQAMARALAMIAEAHIABAFIAAAEQAAAGAEADIAKAIIANAHIABgBIAAAAIAAgDIgCgOIgCgRQAAgHACgHQACgJAAgEIgFgTIgHgUIgBgGQAAgFgLgUIgGgLIABgYQAAgGgBgEQgCgGgFgGIgFgEIgIgHQgHgEgGAAQgEAAgEADgAAxjsIAJAKIARAiQADAEAAACIgCALIAGASQADAKACALIAAABIADAJIADAOIABALIABAFIACADIABAAIAIgCIAAgCIAAgZQgEgMgDgOIAAgGIgHgiIgCgTIgegoIgDgCIgngQIgbAEIgQAGIgRANIgSASIgIAJIgBAEIABAVQAAAEgEAEQgCADgKAGIgNAJIAAAZIADAGIABACIABADIACgGIAAgCIAFgYQABgEADAAQAJgDADAAIAIgIIADgCIACgXIAEgPIABAAQABgEAIgLQAEgFADgBIAJgDQAHgFAMgCIANAAQADABACACQAHgFAGABIAEgBQALAAAKAMg");
	this.shape_21.setTransform(117,63);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FFFFFF").s().p("AhWECIAAgBIABgCIAAABIABAAQAAABABAAQAAAAABABQAAAAABAAQAAAAABAAIABAAIADgCIABAAIAAABQAAADgGAAQgEAAgBgCgAhaDrIgCgBIgBgBIAAAAIgBgBQgEgCgBgCIAFACIAGAEIAAABgAhzDdQgEgGAAgCIAAgBIAFAFIABAAIABABIABAAIAGAIIgBAAIgBABQgEAAgEgGgAB7DeIgMgJIgEgEIAAgBIABAAIABgBIAEACIADAEQAGAFADAAIAdgTIAAAAIAAACQgGAIgEADIgEADIgMAHgAiHDOIgEgDIgBAAIAAgBIgKgFIgEgBIgCgDIgJgJIgCgEIAAAAIAAAAIABAAQAEAGAMAIQAFAEALAFIACACIAAABgAA2CYIgBgBIgCgCQgIgJgDgLIAAAAIgBgCIAAgBQACABAEAFIAPATIgBABIgBABgAjMBlIAAgCIADgHIAEgEQAHgGAIgCIAAABIABABIgHAGQgGADgDAEIgGAHgACFBFIgCgGQAAgBAAgBQAAAAAAgBQAAAAABAAQAAAAAAAAIAEADIADAGIABACIAAACIAAABIABABQAAAAgBABQAAAAAAAAQAAABgBAAQAAAAgBAAgAh5BIIgHABIAPgCIAAAAIAFABQAHAAADgDIAAgBIAAAAIAGgIIAAgBIAAAAIACgBIgBAEIgBACIgCAFQgDAEgFAAIgTgBgAgPAzQgBAAAAAAQgBAAAAAAQgBgBAAAAQgBAAAAgBIgFgFQgIgHgEAAQgDAAgHADIgHADIgBAAQADgFADgCIABgBIAIgCIABAAQAFAAADACQAGACADADIADADIAEAFIABABIAAAAIgBACIAAAAgABfAsQgFAAgGgEIgFgEIACgBIAGABQAJACACAEIAAABIgBABgAC4ALIgIgHIgDgFIAAAAIABAAQAEAEAGADIABABIAUAMIAAABIgCABQgHAAgMgKgAgigeIgEgFIgHgMQgDgHgBgGIAAgNIgBgCIAAgOQABgFADgBIAAANIACAOQACAKADAFIABADIABAIQAAADAFAEIALAJIAAAAIgDABQgFAAgFgFgABriWQgCgIAAgQQAAgFgIgOIgcgzQAIAGAJAKIABACIANAXIALA4IADAPQgFgLgCgHgAgbjoIAAgBQAAgCAIgGQAHgFAMgHIAEgBQAPgFAMABQAEABACAEQgVABgQAGQgKAEgKAGIAAAAIgFADIgBAAIAAABg");
	this.shape_22.setTransform(115.4,62.8);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#A2F2FC").s().p("AhkD8IAAgCIAAgEIAAgDIgDgMIACABIACAAIAAgBIgGgEIgFgCQABACAEADIAAAAIgGgCIgBAAIgHgDIgLgIIgGgIIgHgEIgDgCIADAAIAAgBIgBgBIAKAFIAEADIAAABQAAADAEAFQAEAGAEAAIABAAIABAAIgGgIIgBgBIACABIAAAAIAHAHIAHACIAGADQACACABAFIAAAKIABAFIABADIgBABIAAABQABACAEAAQAGAAAAgDIAAgBIAMgOIABAAIANgDIAAABIgCACIgLAFQgJAFgEAGIgHAHgAhgD9IAAgBIAAABgAhgD9gABpDSIgDgEIgEgBIgBAAIgBAAIAAABIAEAEIgCgBQgEgBgGgEIgTgTIAPAJIACAAIABABIAPAKQALAIADAAQAGAAAZgjQgDAHgBALIAAAAIgdAUQgDgBgGgFgACFDRQAEgDAGgIIABAHIgPAIgAinDBQgNgKgCgHIAEACIACADIAJAJIACADIgCAAgAAwCZIgFgEIAEACIABgBIABgBIgPgUQgEgEgCgBIgJgRIACABIACADIARARIAFAHQAMAUAAADIAAACgAjYB5IgBgMQAAgFACgHIAAABIABABIAGgHIgBACQgEAIAAAFIAAAXgACCBaIgEgOQgDgJgEgFIgEgFIgEgFIAIABIACABQAGAHACAHIgBgCIgDgFIgEgEQAAAAAAAAQgBAAAAABQAAAAAAABQAAAAAAABIACAGIAFAIQABAAAAAAQABAAAAAAQAAgBAAAAQABAAAAgBIAIAhQgFgGgDgJgAAFBZIgDgFIAAgDIABAAIADgBQAEAFAAAEIABAJgAjABPIgBgBIAAAAQAHgCAIAAIAngGIAHAAIATABQAFAAADgFIACgFIABgCIABgEIgCABIADgEIAEgBIAPgCQAEgBADgEIAHgHIAGgDIACgBQgDACgDAFIABABIAEgCIgCAAIgSALIgGADQgIADgFAFIgEADIgCADQgCADgFABQgGACgSAAQgRAAgRAEIgQAEQgIABgEACIgBABgAgaA1IgGgGQgEgEgDgBIgCgDQgGgFgKADQAHgCADAAQAEgBAIAIIAFAEQAAABABAAQAAABABAAQAAAAABAAQAAAAABAAIABAAIAAAAIABgCIAGAGIAAABQAAABAAAAQAAAAAAABQgBAAAAAAQgBAAgBAAQgCAAgDgCgABUArIgCgBIgMgGIgVgLQAWACAJACIARAOIAAAAgABEAhIAFAEQAGAEAFAAIACAAIABAAIAAgCQgCgEgJgCIgGAAgAClADIgWgVQgFgDgIgOQgKgPAAgEIAAgDIAAAAIADAAIAGALQAIANAIAKQAIAKAJAJIADAFIAIAHQAMAKAHAAIACAAIAAgBIgUgNIgBgBIAIAEQAGAGAGgBQAMAAAHgHIAEgFIABgDIABACQgGAKgEADQgKAJgKgBQgGABgRgSgAAGADIgTgUQgQgKgHADIgFgDQgLgLgFgKIgEgOIAAgQIABADIAAAMQABAGADAHIALARQAFAGAFAAIADgBIAAgBIgLgIQgFgFAAgDIgBgIIgBgCQgDgGgCgKIgCgNIAAgOQgDABgBAGIAAgJQADgTABAAQAGAOACASIAAAXIAFAUQADAHAIADIAUANQAHAEAEADIAQARIASARgABnhhIgBgSIgOg0IgBgBIABgKQAAgIgIgOIgMgZQgEgOgOgJQgDgCgIgCIgLACIgEACIgNgBQgVAAgQAJIgDAAIgCABIAAAAQAKgGAKgEQAQgGAVgBQgCgDgEgCQALABAIADQALAFAIAFIAcAzQAIAOAAAFQAAARACAHQACAIAFAKIAGAhIgBAEIAAABIgDAAgAhZiGIgBgJIgBgKQAAgIACgDQACgDAEgCIALgFQAKgGAFgFIgBgKIgBgJQAAgHAEgGQAEgIAHgIQAPgPATgHQgNAGgHAFQgIAGAAADIAAAAIAAABIgCACIgGAIQgEAEgDAKQgEAMAAAHIABAHQgCAFgFAFIgDACIgDABQgJADgEAFQgDADgCAHIgBAVgABMjlIgBgCIALAQIADAJIgNgXg");
	this.shape_23.setTransform(116.5,63.1);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("rgba(107,211,210,0.498)").s().p("AgSDjIgKgGIgGgIIgBgBIgDgGQgFgIgFAAIAGgBQAEADADAEIAGAKQADAFADACQACADADAAIgEgGIAAgBIgMgWIgHgFIgJAAIgBABQgEAFgNAAQgSAAgPgGIgCgBIgCAAIgMgBQAfAOAjgDIAAAAIACAAIgCABIgjAEQgHAAgFgCIgUgOIAAgBIAPgCIAIAFQAHADAHACIAOAAQAFAAAGgFIAEgDIALgCIALAJIAOAigAB6C+Ig5gZIgJgGIgTgSIgCgDIgCgDQgBgEgCgFQgFgIgKgGIgUgPQgGgGgEgBQgGgFgJgBIgKAAIAAAAIgDABIgLgBQgJAAgKADIgJAEIgBgBIgugTIgRgDIgBAAQgDgDgCAAIgCAAIgKgFIgHgBIgKgDIgNAAIgDABQgFACgDAFIgHAIQgEAFgBAHIgBALIAAABIgLAFIgGgWQAFgGACgGIAKgWIAcgMIALABIABACQAEAGAKAAIABAAIAEADQAJAGALADIARAEIALAEIACABQAEADAEAAIAVgBIADAAIAIACQAPAGAKAAIAlgCIAIACQAHABAHAFIAIAGIABAEQABAFACAEIAEAEIAeAcQAFAEAFAHIAKALIAFACIAbAMIAOAEIAIADIACAAQAGgDABgFIAGgZIgHgkQgCgOgEgJIgBAAIgFgZIgBgEIgBgEQgCgFgGgDIgLgGIgKgIQgHgFgJgJIgRgPQgDgDgMgDIgRgCIgGgEIgOgIIgIgGQgHgFgDgFQgCgDgBgGIgBgaQAAgOABgEQAIAIAEALIAJAoQACADAJABIAMACIALACIABAAQAEADAIADIAdAKIAEACIABADIAQAUQAHAGAGACIAKAEIABACQAAAAAAABQAAAAAAABQAAAAABAAQAAABAAAAIADACIABAGIADANIAIAdIAMAeIABAEIABAKIAAACQAAAHgDAMIgMAlIAAABQgIAFgGAAgAgXBPQAMACAMAJQALAJALANIAXAZQAPARAeAPQAMAHANAEQALADAJAAQAIAAAFgHQAEgFACgJIAAAAIABgEIACgSIAAgJQAAgJgIgVIgFgOIgCgMIAAgCIgBgCIAAAAIgBgIIgBgDIgDgOQAAgFgCgEIgCgBIALAzIAHAeQAEAOAAAKIgDATQgEATgKAAQgIAAgPgGQgMgEgQgJQgSgKgHgGIgOgKIgagbQgHgIAAgFQAAgDACgCIgCgCQgNgLg5AAIgDAAIgEgBIgEgBIgogCQgHgEgMgDQgPgEgLgFIgOgHIgIgBIgBAAQgDgBgDgCIgBgBIgBgBIgCgDIgDgBIgJACIAAAAIgDABIAAAAIgFADIgBABQgHAFgIAMIgGANIgBADIgBABIAAACIAAABIABALIACgBIABgBQAAgEADgIQABgFAFgJIACgDIAAAAIABgBIAAgBQAKgNAMAAIALAEQAGgCAIAEQAFAEAJACIAzAQIAHADIACAAQAFADAIACQADgEAGgBIAZAAIALgBIAKABgAgEhSIgCAAIAEASQABAMACAIQAFALAJAGIALAGIAEACIAPAEQAVAEAKAHQAHAEAIALQAJAKAGAEQAJAHARADQgBgCgDgBIgGgDQgFgCgFgDIgFgFIgFgEIAAAAIgBAAIAAgBQgEgCgDgEIgHgIIAAgBIgCgCIgCgCIgCgDIgTgHIgIgDIAAAAIgSgGQgHAAgFgCQgLgBgGgLIgDgIIAAgJIAAgBIgCgMIAAgBQgCgJgEgFgAiIC1IgMgMIgjgfQgIgHgGgDIAAgCIAAAAIADAAIAUADIAIAGIABAAIAMAPIAQAMIAKATIgHABgAinCUQAUAVAQAKQgBgEgEgEIgFgGIgMgKQgKgIgEgHQgDgEgGgEIgPgFQAOAJAKAMgAC4AzQgCgCgBgDIgCgEQgDgFgIgBIgEAAIgOgjIAGgFIAIAAIANASIAHAUIAEAHQADAGACAAIAagRIARgCIgXAXIgBAAIgOAJIgIADgACtAjQADABAEADQAEAEAAACIAHAMIABACQAHgBAMgLIAVgSIgTALQgRALgDAAQgDAAgHgLIgKgQQgGgMgFgEQgFgGgBAFIABACIABACQAFAJAFAOIABAAIAEABgAB/hAIAAgBIgBgGIgBgDIgGgGIgCgCIgGAAIgGgXIgCgPIAAgDIADgGIAHgJIAFASQAEANAEAGIABACIALAcIAEAHIACACgABvh+IgCAFQAAATAEAMIABADQALACADAEIACAEIAAADIgBAEQAGADAFABIAAAAIgIgOIgCgFIgBgBIgFgGIgBgCQgDgEgCgHIgFgYgAhGiGIgUAAIgDgZIASgUQASgUAPgNIAFgBIAOAAQAGgBAEgDIAHgGIAIgEIADAEIAGAHIACAEIAEAFQAGAHAFAAQAFAEADAAQAGAAALgGIABgBIAEgBIABABIACABIAUAJIAQAGIgQAAQgJAAgOACIgHACIgLgCIgKAAIgGgCIgSgKIgBgBQgHgHgKACQgFAAgOAIQgNAIAAADIgCABIgdAYQgIAIAAADIAAACIAAADIACAAIABAAIAKADIADABIABABIAEADIABACgAgLjVQgGADgKACIgNACQgLAHgKAJIgDADIgKAMIgIAKQgIALAAAGIAAADIABAEQACAFAMAAIADgBIAAAAIgEAAIgHgCIgDgCQgBgCAAgEIABgDIAKgNIAZgZQAPgMAJgBQALgGAQgFQAEALAVAHQAOAFAQAAIADgBQAHgCAJABIAJABQgDgDgFgBQgHgCgNgCIgOAEQgSAAgIgMIgBgBIgCgCIgFgGIgGgFQgFAFgHACg");
	this.shape_24.setTransform(118.1,60.4);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("rgba(107,211,210,0.2)").s().p("AgVD2QgEgBgQgHIgZgKQgHgCgIgEIgMgGQgPgHgPAAIgIADQgEAAgRgMQgPgKgFgFIgdgeQgGgIgEgHQgDgHgBgJQAAgHgHgBIgQgBQgKgBgGgDQgHgEAAgKQAAgJAKgZIAJgYIAAgDIgBgDQAAgEAHgEIAIgEIAJgFQAEgDALgCIAMgEIADgCIADgDQASALAfANQAjAPAfAIQAhAKAXAAQANgBAMgCIAPgCIAEADQAFADADAAQAFAAADgDQADACAAADQgBAGAFAIIAQAWQACADAHAEIAKAFIAMANQAKALAEgBQACABAFgIIAGgIIgCgIQgCgFAAgEQABgFgDgEQgCgFgFgEQgGgGgCgHIgIgTQgDgDgCAAIgKgNIgSgTQgDgDgLgFQgKgFgIgBQgTgCgFgFIgDgFIgMgNIgNgIIgEgIQgDgHgEgDQgDgEAAgPIABgRIACgMIAAgBIAAgBIACgFIgBgCIAAAAIACgHIgBgDIgFgEQgKgGgPAAIgbAGQgXgBgJgYQgCgFgCgMIAAgJIABgFIACgFIAOgMQAFgFANgGIAWgIQALgEAIgGIAHgFIAagLQAUgHAaAAQAEABADACIADAGQACAFACACQAFACAIAAQAhABAIAFQAEACACAEIAGAIQACACABAFIABAHIACAEQgCAIAAAIQAAALAIAHQAFAFAMAGIAKAEIACACIAEADIgEAWQAAADAHAWIAGAZIgDAJQgDAIAAAIIAAAGQABAEADACIAEAAIABACIACABIABAAIAAgBIAAgBIgBgBIANAAQAIAAADAGIABAGQAAAKACAEQACAGAFADQAGAFALgEIABACIADAAIAGAAIADgCIABAAIAFACQAGAEAOAAIAAAFIgFAQIgJASIgHAIIgJAJIgCADIgdAAQgLAFgCADQgCAEAAAGQAAARAJARIAJARQAAAHgGAIIgXAiIgCACIgMACIhFAAIgVgEIgBgBIgLgLIgHgEIgEgEQgLgNgXgOQgHgEgJgKIgMgOQgFgEgIgBQgGgCgIABIgEABIg3gCIgPgGIgBAAQgGgDAAgCQgGgFgEACIgDABIgLgGQgTgGgJADQgFACAAAGQAAAGADADQADAEAGACIAYAJIABAAIAGADIADABIABAAQAEADADAFQAFAGADADIAIAHIAKAFQAKgBAMAEIALADIAJgCIAjARIABAAIAFADIABACIADAIQABAJAFANIAGAQIACAOIgGAGgAgPDkIgOgjIgLgIIgLABIgEADQgGAGgFAAIgOgBQgHgCgHgDIgIgEIgPACIAAAAIAUAPQAFABAHAAIAjgEQAGgFAHALIADAGIABABIAGAJIAKAFIACACgAgdBTQAJABAGAFQAEACAGAFIAUAPQAKAGAFAIQACAGABADIACAEIACACIATATIAJAFIA5AZIAPABQAGAAAIgFIAAAAIAMgmQADgMAAgHIAAgCIgBgKIgBgEIgMgeIgIgdIgDgNIgBgGIgDgCQAAAAAAAAQgBgBAAAAQAAAAAAgBQAAAAAAgBIgBgCIgKgEQgGgBgHgHIgQgUIgBgDIgEgCIgdgKQgIgCgEgEIgBAAIgLgCIgMgCQgJAAgCgEIgJgoQgEgLgIgHQgBADAAAPIABAaQABAFACAEQADAFAHAFIAIAGIAOAHIAGAEIARACQAMAEADADIARAPQAJAIAHAFIAKAIIALAHQAGACACAFIABAEIABAEIAFAZIABAAQAEAJACAOIAHAkIgGAZQgBAFgGADIgCAAIgIgDIgOgEIgbgMIgFgCIgKgKQgFgIgFgEIgegbIgEgFQgCgEgBgFIgBgEIgIgGQgHgEgHgCIgIgCIglACQgKAAgPgFIgIgDIgDAAIgVACQgEgBgEgDIgCgBIgLgDIgRgFQgLgDgJgGIgEgDIgBAAQgKAAgEgGIgBgCIgLAAIgcALIgKAXQgCAFgFAGIAGAWIALgEIAAgBIABgMQABgHAEgFIAHgIQADgFAFgBIADgCIANAAIAKAEIAHABIAKAEIACAAQACAAADADIABABIARACIAuATIABABIAJgDQAKgEAJAAIALABIADAAIAAgBgAjEB9IAAACQAGAEAIAGIAjAfIAMAMIACABIAHgBIgKgTIgQgMIgMgPIgBAAIgIgGIgUgDIgDAAgACXAAIAOAjIAEAAQAIACADAFIACADQABADACACIAGAMIAIgDIAOgIIABgBIAHgHIAQgQIgRACIgaARQgCAAgDgGIgEgHIgHgTIgNgSIgIAAgAgfisQgGAGAAAQQAAAJAOAMQAFAGAHADIALAIQAIAGAHADIATAKIgBAIIAAAJIAGAMQAEAGACAIIAKAJIAPADIAVADQAGAAAFAEIAHAFIAEAFQADACAEAAQABAAAAAAQABAAAAAAQAAAAAAgBQABAAAAAAIAAgCIgDgGIgEgJIgCgIQgCgFgEgCQgPgIgIgHQgJgIABgHIgFgRQABgKAPgQIAKgLQAFgFAAgCIgCgHIgFgKQgHgNgFABIgWAAIAAAAIgCgBIgHAAIgFABIgQgBIgJABQgCABgHAAIgHgBIgJgCQgKgDgEAAQgLAAgEAFgABriBIgDAFIAAADIACAPIAGAXIAGAAIACACIAGAGIABADIABAHIAAAAIARACIgCgCIgEgHIgLgcIgBgBQgEgHgEgMIgFgSgAg8iGIgBgCIgEgCIgBgBIgDgCIgKgDIgBAAIgCAAIAAgCIAAgCQAAgEAIgIIAdgXIACgBQAAgEANgIQAOgHAFgBQAKgCAHAHIABABIASAKIAGADIAKAAIALABIAHgBQAOgDAJAAIAQAAIgQgFIgUgKIgCAAIgBgCIgEACIgBAAQgLAHgGgBQgDABgFgFQgFAAgGgHIgEgEIgCgFIgGgHIgDgEIgIAEIgHAGQgEAEgGAAIgOAAIgFABQgPAOgSATIgSAUIADAZIAUAAIAJABg");
	this.shape_25.setTransform(118,60.5);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FFFFFF").s().p("AgZDPQgLgLgCAAIgEABIgDACIAAAAIgCgBIAAgCQAAAAAAgBQAAAAAAgBQABAAAAAAQABgBAAAAIAHgBQADAAAEACIADABIAMAWgACKC2IgBAAIgBAAIgGgDIgXgHIgUgKQgdgQgGgLIABgBQAEAGAMAIQAHAFAQAJIAIAGQAGAEAIACIAPAEIAQADQAGAAAGgMIAEgHIAAAAQgCAJgEAFQgGAHgHAAgAiOClIgMgLQgMgMgEgKQAGAEADAEQAEAHAKAIIAMAKIADAEIgBAAIgBABQgCAAgGgFgACiCIIAAgBIAAgIQAAgIgCgHIgEgLQAIAVAAAJIAAABIgBAFgAADBWIgHgHIAMACIAFAEQAFAEABACIgBABIgCABQgFAAgIgHgAjdBSIAAgCQAAgEAGgIIAJgMIAHgKIABgBIAFgDIAAAAIADgBIAAAAIANABIACACIABABQADACADABIABAAIgHABIgQgDQgEAAgLAPIgBABIgBABIAAAAQgKAPgDAGgAhZBIIAdACIAAAAQAAABAAAAQgBABAAAAQAAABgBAAQgBAAAAAAIgNABQgFAAgIgGgADJA3IAAgBIAIgGQAIgHAFAAIAAAAQAAABgEADIgQAKgACtAbIgHgRIAAgBQADAAAGALQAGAKAAACIgBABQgGgDgBgDgABoAPIgEgHQADAEAEACIAAABIABAAIAAAAIAHAGIALAJIgBAAQgPgEgGgLgABWgEIgGgFIABAAQAEAAAEAEIAAAAIACACIACACIAAABQgFgCgCgCgAA8gQIgYgDIgEgCIgBAAQAAAAgBgBQAAAAAAAAQgBgBAAAAQAAAAAAgBIAUAEIALACIAAAAIAIADIgIgBgAABhOQAAgFADAGIAEAIIAAABIACAMIAAABIAAAHgACNhFIgCgDIAAgCIABgCQAAgCgEgEIgDgFIgHgFQgEgDgBgDIgEgWIAAgCQACACACAEIADAQQABAFACABIADACIAAAAIAFAGIABABIACAFIAIAOIAAAAQgCAAgDgDgAhSiaIANgVIABAAIAKgMIAVgQQAHgEAGAAQgGACgJAHQgIAGgLALIgQARQgGAIAAAEIAAACIgBADIAAABgAA2jAIgBgBQAAAAAAAAQABAAAAgBQABAAAAAAQABAAABgBQADgBADAAIAEABIAAABQAAABAAAAQAAAAAAAAQgBABAAAAQgBAAAAAAIgJABgAAQjMIgEgEIgFgHQAAgCAFAFIAJAJIAAABQgDAAgCgCg");
	this.shape_26.setTransform(117.5,60.4);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#A2F2FC").s().p("AgZDcQgDgCgCgGIgGgJIgDgEIAHAHIAJAJIAAACIADAGQgCgBgDgCgAh2C6IAMABIACAAIACABQAOAHASAAQAOAAAEgGIAAAAIAJAAIAIAFIgDgCQgEgCgEAAIgGABQgBABAAAAQgBAAAAABQAAAAAAABQgBAAAAABIAAABIACABIgNABQgbAAgZgMgAByCyQgMgEgNgGQgdgPgQgRIgWgaQgLgMgLgJQgMgKgNgCQgJgCgMACIgZAAQgFACgDADQgIgBgFgDIgCgBIgHgDIgzgPQgJgDgFgDQgIgFgGACIgLgDQgLAAgJAKQAKgNADAAIARADIAHAAIAIABIANAHQAMAEAPAEQAMAEAHADIAKAAQAJAHAFAAIAMgBQABAAABgBQAAAAABAAQAAgBAAAAQABgBAAAAIAAgBIAEABIAEACIADAAQAbAAASACIAIAHQAHAHAFAAIABgBIACAAQgBgCgFgEIgFgEQAJACAEAEIABABQgBACAAADQAAAFAHAIIAaAbIANALQAIAGASAKQAPAJANAEQAPAGAIAAQAJAAAFgTIACgTQABgLgEgOIgHgdIgLgzIABABQADAEAAAFIADAOIABADIABAPIALAhQADAHAAAIIgBAJIABABIABAAIABgEIAAAHIgDASIgBAEIgDAIQgGAMgGAAIgQgDIgQgFQgHgCgGgEIgIgGQgRgIgHgFQgLgIgFgGIAAAAQAFAMAdAPIAUALIAYAHIAGADIABgBIABAAIAEABQAHAAAGgHQgFAIgJAAQgIAAgMgEgAipCSQgJgLgOgJIAOAFQAFAKAMAMIAMALQAGAEACAAIABAAIABgBIgEgDIAGAGQAEAEAAAEQgPgLgVgVgAjlBRIAAAAIAAgDIABAAIABgEIAGgNQAIgLAGgGIgGALIgKAMQgFAIAAAEIAAACIABABQADgGAJgOIgBACQgFAJgCAGQgCAHAAAFIgBABIgCAAgAC+A4IgHgNQgBgCgDgDQgEgEgDgBIgFAAQgFgOgFgKIgBgCIgCgBQACgFAFAFQAFAFAFALIAKAQQAIALADAAQADAAARgKIATgMIgVATQgMAKgIABgADKAuIgIAHIAAABIABAAIAQgLQADgCAAgBIAAgBQgEABgIAGgACfAIIAHASQABADAGACIABAAQgBgDgFgKQgGgKgDAAgAi4ApIgNgCIAIgBIAEAAIACADgABpAYQgHgEgIgLQgJgKgGgEQgLgIgUgEIgQgEIADABIAWADIAIAAIATAIIABACQgDgEgEAAIgBAAIAFAFQADADAFACIAHAHIADAIQAHAKAPAFIAAgBIgLgIIgHgGIAFAEIAGAEQAEAEAGABIAFADQAEACABACQgRgDgJgHgAAqgWIgUgDQAAAAAAAAQAAABAAAAQABAAAAABQAAAAABAAIAAABIgKgGQgKgHgEgLQgCgHgBgMIgEgSIACgBIAAAAQAEAFABAIIAAABIgCgJQgDgGAAAFIAIAeIAAACIADAJQAFAKAMACQAFACAHAAIARAGgACAhHIABgEIAAgEIgDgEQgDgDgKgDIgBgCQgEgMAAgUIABgFIADgDIAEAZQACAGAEAFIABABIgDgCQgCAAgBgGIgDgPQgCgFgDgBIAAACIAFAWQAAACAEAEIAHAFIAEAFQADAEABACIgBACIAAABIACAEIADADIgJgEgAhbiOIAAgEIAAgEQAAgFAIgMIAHgIIgOAUIABAHQACAIADAAIAAAAIAAAAIAHABIAEAAIAAABIgDABQgMAAgDgFgAhYiaQAAgDAHgIIAQgSQAKgKAJgGQAJgIAGgBQgGAAgHAEIgTAOIgCACIADgDQAJgKAMgHIANgCQAJgBAHgDQAHgCAFgGIAGAGIAEAGIADACIABABQAHALATAAIANgDQANABAIADQAEABAEACIgJgBQgJAAgHABIgEACQgPgBgOgFQgVgHgEgLQgQAGgMAFQgIACgPAMIgZAZIgKANgAAyjEQgBAAgBAAQgBAAAAABQgBAAAAAAQAAABAAAAIAAABIADAAIAJAAQAAAAABgBQAAAAAAAAQABAAAAgBQAAAAAAAAIAAgBIgFgBIgBAAIgEABgAAAjZIAFAHIADAEQADACADAAIAAAAIgJgKIgFgDIAAAAg");
	this.shape_27.setTransform(118.3,60.5);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("rgba(107,211,210,0.498)").s().p("AhADsIgKgNIAAgBIgXgYIgpgkQgJgIgDgEIgKgMQAAgIgDgNQgEgIAAgDIACgCQAAgBAAAAQABgBAAgBQAAAAAAgBQABAAAAgBQgBgDgGgFIgKgHIgBgCQgDgMAAgLQAAgKADgLIAFAAIAXAAQAMAFAHAAQABAAAAAAQABAAAAAAQABAAAAgBQAAAAAAAAIADgDIADgBIAiABIAsgGIAcASIABABIAJAJQAMAMAKAAQAGAAAHgDIAJgDIALAAIAFAAIAIAAIALACIAEAAIAEACIAIACIgCADIgBAEIADAHIAHAMIAXAWQALAKABAAQAAAAAAAAQABgBAAAAQAAAAAAgBQAAAAAAgBIAAgDIAAgCIgBgEQAAgDgDgCIgBgEQgFgPgEgEIgHgJQgDgDgBgFIgDgIIgCgIQAAgEADgEQAEgEAAgEQgBgCgQgQIgFgEIgCgGIACgKQAAgHgNgMQgLgKgRgKIgTgLQgCgEgEgDIgigcIAFgbQAEgUAAgHIgBgLIgCgFIgvgkQgJgGgEgGQgEgHABgFIgEgZQABgCAFgFIAIgFIAEAAQAJADAMAIIASANIAUARIAHAJQABAAAJgGIAIgHQASAAAGADQAAAAABAAQAAAAABAAQAAAAABABQAAAAABAAIABABIAGACIAKABQAHAAADABIABADIADAFIACABIgTgDIgMAAQgEAAgJADIgQAGQgPAHgDADIgDgCIgIgMQgEgEgGgDIgggSQgJgGAAADIAHAKQACAGADAEIARAJIAGAGIARAPIALAKIAIAEIAHAFIAFAGIgDAAIgBACIgBABIgIAFQgDADgDAIIgBAIIAAARIACAMIAGANQADAEADACIAOAFIAOAFIAAAAIAKAEIAJAEIAJAFIASASIADAEIADAFQACAGABAMQAAALACAHIAFANIgBAKQAAAHACAGIANAZQACAEAEADIAOAJIAAANIADALIABALQgBAFAJABIAHABQAEAAACABIANAGIgSATQgCADgBAEIgCAGIAAADIAAADQAAAAAAABQAAAAgBABQAAAAgBAAQAAABgBAAIgFACIgLAMIgMATIgIgDQgFgDgLACIgGABIgMADIgFABIAQgSIAKgDIAFACIAIABQABAAABgEIACgHIAJgMQAEgEAGgJIAHgKIgCgEQgDgDgEAAIgPADQgJABgCACIgHgJIgtgrQgIgHgDAAIgLABQgNgHgLAAQgFAAgMADIgJADIgIgIQgPgLgHgGQgIgHgZgGIgjgHIgKAAQgEAAgHAGIgHAHIgdAAQAAAAgBAAQAAAAAAABQgBAAAAAAQAAAAAAABIAAABQAAAFADAEQABABAIAFQAHAFABADQAEAHABAIQAAAEgCACIgCAGIABAKQABAEAEADIALAIQABAFAFAHQAEAHAJAIIARAPQALAJAGAHQAEAFAOALQAJAIADAGIAIATIAAACgAiZCEIABAEIAIAIIACACIAXAWQAFAHARAOIANANIAEAIIAPANQAMALAIAKIAAgBIhihnIgMgOgAB4DQIACABIACABQACACADABIAAAAQAAgDAHgJIAIgKIADgFIAGgEIABgBIABgCIABAAIACgJIAAgBQAAgDACgEQACgEAGgEIAIgHIABgCIgNgFIAAAAIgLgEIAAAAIgFgBIgBgBQAAAAAAAAQgBAAAAAAQAAAAAAgBQgBAAAAAAIAAgBIAAgHIgCgIIgDgMQgDgHgJgMIgLgOQgGgIAAgGIgBgLIgDARQAAAHAEAIIALAPQAHALADAGQAEAKAAALIAAADIgBAAIgCACIgFAAQgEAAgNgNIgKgLQgFgGgEgCQgDgDgBgDIgMgLIACgIQgDgCgEgBIgDgBQgKgDgNAAIgQAAQgPACgOgCQgJgDgIgGIgLgKQgIgGgFgCQgRgHgyAEIgcADIgEAAIgBABIgBAAIgCAAIgMACQgDAAgFgCQgEgCgDAAQgEAAgDAJIgCALQAAAHADAFIAOANIACABIAFADIACADQgBADgDAHIAAACIADAOQAAgEACgGQADgFgBgGQAAgGgDgDIgKgGQgGgEgDgEQgFgGAAgJQABgDACgFQAEgHAEAAIAFAAIACACIAIACIAJABQAIAAAAgCIABgBIABgCQAIgEA1AAQAJAAAIADIAFADQAJAEANAKIABAAIADADIAAAAIAPALIAJAEIAnAAIABABIABAAQABABAQgBIAGAIIAHAEIAVASIAHAGIAJAMQANAOAIABIABAAIAIgBQAFgCABgDIABgBIAEACQAJAEAFADIgJAMQgHAKAAADQAAAAAAABQAAABAAAAQABABAAAAQAAAAABABIAAACQgDABgEAEIgGAJQgEAFgDADQgEADgHAAQAAAAgBAAQAAAAAAAAQgBgBAAAAQgBAAAAgBIgFgCIgIADQgHADAAAEQAMgEAIAAgAhHjgQAAAOAMAMQAIAIARALQAWAOADAEQALALAAAMIgCAKIgFAUIAAAGIAAAEQABAMADAGQACAJAIAGIAlAYIAZALQAQAKAGAHIAEAIIABAJIgBAKIgCAGQACAGAFAHIAGAHIABABIgDgQIgBgCIAAgKQAAgGgCgEQgDgQgLgMQgFgHgLgGIgSgKIgSgIQgJgFgHgFIgEgFIgHgKQgDgFgCgLQgDgMgBgGIABgHIAEgKQACgEAEgCQgCgKgKgKQgIgJgSgMQgUgPgGgGQgIgIgDgIIgBgIIAAgDIAAgBIABgDQABgFAJAAQgBAEADAEQAEADAGADIAMAFQAFADAEADIAMAOQALANAIAAIAEgCIACgCIAAAAIAAAAIABgBIAIgIQABAAAAgBQAAAAABAAQAAgBABAAQAAAAAAAAQAGgEAQACIAWADIACABQgJgEgMgCIgWgDIgDAAQgDAAgHAHIgFAGIgEACIgBAAQgFgCgLgLIgcgYIgBgBIgOgJIAAgBIgBAAIgBgBIgBAAIAAAAIgHgCIgBAAQgJAAgBASg");
	this.shape_28.setTransform(117.8,55.5);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("rgba(107,211,210,0.2)").s().p("AgaELIgLgCQgHgBgEgEQgDgCgQgBQgOgBgHgDQgHgFgCgFQgCgDABgIQgCgIgBgDQgCgGgIgEQgHgFgFgGIgJgLIgLgLQgIgGgBgEIgHgOIgFgKQgEgFgBgDQgBgFAAgHIABgIIABgGIAAgCIgCgBIgFAAIgJADQgBAAgFgJIgHgNQgDgCgCgJQgCgGAAgFIABgNQAAgEgDgEQgEgEAAgBQAAgDAEgCIALgGIAEgDIADgCIADgCIAFAAQADAAAEgDIAFgFIAYAAIACgBIAdABQAPACABABIAIAAIAJgDIAGgCQAIgDAfAAIARAAIAJAJQAGAGADAFIASAWIA6gBIANAGIABgBIAAAAIAAgBIgGgRIgCgJQgBgFgDgFIgHgJIgJgJIgIgFQgGgCAAgBIgIgKIgKgGQgHgEgEgIQAAgDgIgGQgGgFgHgEQgOgIgDgLIAAgKIgCgJIgEgJQgDgGAAgDQAAgEgDgGIgGgJIgRgTQgJgMgDgHQgDgGgJgMIgNgTQgCgEABgFIAAgKIgDgKIgBgIIAAgGQAAgGADgEQAJgPAeAAQAOAAALAIQAHAGAJAMIANATQAGAIAHAAQAEAAACgCIAGgEQAHgGAHAAQAQAAAHAEQAEABAAACQACADAFACQAIACABACQAHAGAQAFIAJADQABAAAAAAQABABABAAQAAAAAAABQAAAAAAAAIAAAMQAAAEgCABIgfAFIgVAAQgMABgEAEQgBABgBAEQABAKAGAKIAFAGIACAEIgBACIgBADIACAJQAAACgDAEIgFAGIgFAGQgDADABAEQAAAEAFAFIALAHIgCgBQgGgEgBADIAAABQAGAAADAEIAFAHQAEACAKADIAMAEIAIAFIARANQADADAGABQAIACAJAQQAIAPAEAPIAAAbIAHAOIAGANIgCAQIADAQQAAABAAAAQAAABAAAAQAAABAAAAQAAABAAABIABAEQABAFALACIALAKQALgEAFANIACAJIABAGIgBATIgKAKQgFAEgHAJIgNAMIgMANIgIANIgKAMQgGAIgGAEIgFABQgCgCgFAAQgDAAgBgBIgDgDQgCgCgDAAIgLACQgJAAgLgFIgIgDIgDgCIAPgeIAGgJQAIgMAJAAIAMgBQACgBAAgDQAAgBAAAAQAAgBAAAAQgBgBAAAAQgBgBAAAAIgFgDIgQgGQgEgCgEgGIgHgIIgIgIIgHgIQgDgFgEgDQgIgHgPAAQgFAAgCABIgCADQgEAEgWAAQgJAAgQgLQgSgMgLgPQgHgKgKgFQgKgEgJAAQgHAAgIAFQgFAEAAAHIABALIgBAHQAAAGACAFIAHAOQABAEABAJQACAKAGAJQAIALALAHQASAJAKAKQALAIACAKQABAEADAFIAIAJQALAOgBAFIgBAXQgKgFgHgBgAgaD5IAAgCIgIgTQgEgGgJgIQgOgLgDgFQgGgHgLgJIgRgPQgKgIgEgHQgEgHgBgFIgLgIQgFgDAAgEIgBgKIABgGQACgCAAgEQAAgIgEgHQgCgDgGgFQgJgFAAgBQgEgEAAgFIABgBQAAAAAAgBQAAAAAAAAQAAAAABgBQAAAAABAAIAdAAIAHgHQAGgGAFAAIAJAAIAkAHQAYAGAJAHQAHAGAOALIAHAIIALgDQAMgDAFAAQAKAAAOAHIALgBQADAAAHAHIAtArIAIAJQABgCAKgBIAPgDQADAAADADIADAEIgHAKQgGAJgEAEIgJAMIgCAHQgBAEgCAAIgIgBIgFgCIgJADIgQASIAFgBIAMgDIAGgBQAKgCAFADIAIADIANgTIALgMIAEgCQABAAABgBQAAAAABAAQAAgBAAAAQABgBAAAAIAAgDIAAgDIACgGQAAgEACgDIASgTIgMgGQgCgBgFAAIgHgBQgJgBABgFIgBgLIgDgLIAAgNIgNgJQgFgDgBgEIgOgZQgCgGAAgHIABgKIgEgNQgCgHAAgLQgBgMgDgGIgCgFIgMgNIgKgJIgIgFIgJgEIgLgEIAAAAIgNgFIgPgFQgDgCgCgEIgGgNIgDgMIAAgRIACgIQACgIAEgDIAHgFIABgBIABgCIADAAIgFgGIgGgFIgIgEIgNgKIgVgVIgRgJQgDgEgDgGIgGgKQgBgDAJAGIAgASQAGADADAEIAJAMIADACQADgDAPgHIAQgGQAKgDAEAAIALAAIATADIgBgBIgDgFIgCgDQgCgBgIAAIgKgBIgFgCIgCgBQAAAAgBAAQAAgBgBAAQAAAAgBAAQAAAAgBAAQgGgDgRAAIgJAHQgIAGgCAAIgIgJIgTgRIgSgNQgLgIgJgDIgEAAIgIAFQgGAFAAACIAEAZQgBAFAEAHQADAGAJAGIAvAkIADAFIAAALQAAAHgEAUIgEAbIAiAcQADADACAEIAUALQARAKALAKQANAMgBAHIgBAKIACAGIAFAEQAQAQAAACQAAAEgDAEQgDAEAAAEIACAIIACAIQACAFADADIAHAJQADAEAGAPIABAEQACACAAADIABAEIABACIAAADQAAABAAAAQAAABgBAAQAAAAAAABQAAAAgBAAQgBAAgKgKIgYgWIgHgMIgCgHIABgEIABgDIgIgCIgEgCIgDAAIgMgCIgIAAIgEAAIgLAAIgJADQgHADgHAAQgKAAgMgMIgJgJIgBgBIgcgSIgsAGIghgBIgEABIgCADQAAAAAAAAQgBABAAAAQgBAAAAAAQgBAAAAAAQgIAAgMgFIgWAAIgFAAQgEALAAAKQAAALAEAMIAAACIALAHQAGAFAAADQAAABAAAAQAAABAAAAQgBABAAABQAAAAgBABIgCACQABADADAIQADANABAIIAKAMQADAEAIAIIAqAkIAWAYIAAABIALANIAeANg");
	this.shape_29.setTransform(117,55.5);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#FFFFFF").s().p("AhWDkIAAgBIgFgEIgFgIIADABIALALIAAABgABwDfIgCgBIADgBIADABIADABIADgIQADgGAFgBIAAABIgFAFQgHAJAAADIAAAAQgEgBgCgCgACQDAQAAAAgBAAQAAAAgBAAQAAgBAAAAQgBgBAAgBIgBgDIABgEIADgBIACACIgBAJgAiPCpIgKgKIgDgCIAKAFIACABIAJAJgACPCdIgKgFIgDAEIgDADQgCABgGAAIgBAAQgFgDgGgGIgagYQgFgGgBgGIABAAIAYAXQARARADAAQACAAADgFQADgDADgBIAAgCQAAgFgFgOIgIgSQAIAGAFANIABAEIAAAAIACAIIAAAHIAAABQAAAAAAAAQAAABABAAQAAAAAAAAQABAAAAAAIABABIAFABIAAAAIAIADIABAAIACABIAAAAIAHADIAEAEIgCACQgFAAgOgFgAAcBgIgVAAIgBgBQAAgBAAAAQAAgBAAAAQABAAAAAAQAAgBABAAIAGgBQAMgCAIgDQANAAAJADIABABIgBADIgCAAIgMAAIgNAEgAgjBRIAAAAIgEgDIAAAAQgNgKgJgEIgFgDQAGgEAPAKQAJAGAHAHIgBABIgBABgAijBCIACgDIAFgDIADAAIABAAIABgBIAEAAIAAACQAAABgFAEIgCABIgJgBgABXAYIAAgRQADACACAHQABAEAAAGIABAKIAAACIgBACIgBADQgDgGgCgNgAANgpIgJgGQgFgGgFgLIgJgRIgBgEIAAgEIAAgGQADALALAPIAUAcIgBAAIgEAAgAgMiMIAAAAQAEgBADAEQAEADAAADIAAABIgBABIgBAAgAgUi8IgLgMIgFgGIASAPQAMALAFACIABABIATgQIACAAIAAABIAAABQAAABgDAEQAAAAgBAAQAAAAgBABQAAAAAAAAQgBABAAAAIgIAIIgBABIAAAAIgBAAIgDACQgHAAgPgPgAhLjHQgCgCgBgEIgBgGIABgHQABgEADgDIAAACIgBAEIAAABIAAABIgBACIAAABIABADIABAIIAAADIgBABgAg7jcQgDgDgCgEIABAAIABABIABAAIAAABIANAJIABAAIABABIgBABIgBAAQgEAAgHgGg");
	this.shape_30.setTransform(118.9,54.2);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#A2F2FC").s().p("Ag/DeIgJgIIADAAIAAAAIAaAcIAAABIgUgVgABpDLIAHgCIAFACQAAAAAAABQABAAAAAAQABABAAAAQABAAAAAAQAHAAAEgEQAEgCADgFIAGgJQADgEAEgCIAAgCQgBAAAAgBQAAAAgBAAQAAgBAAgBQAAAAAAgBQAAgCAHgKIAJgMQgFgEgJgEIgEgBIgBAAQgBAEgFABIADgCIADgEIAKAEQAOAFAFAAIgFAFQgGAFgCADQgCAEAAADIAAACIgDgCIgDAAIgBAFIABADQABABAAAAQAAABABAAQAAAAABABQAAAAAAAAIgBACIgBAAIgFAEIgEAGIgDAEIABgBQgGACgDAFIgDAIIgDgBIgDAAIgCABIgCgBIgFgBQgIAAgMADQAAgEAIgDgAhSDKIgNgOQgQgOgGgHIgNgLIAIADIArArIgDAAgAiFCVIgKgGIgHgHIgCgFIgBgGIAMAPIAKAKgACtCOIAGACIgBACgABuCDIgKgMIgCgDIAWAWQAGAGAGACQgJAAgNgPgAByB9IgZgXIgBAAQABAGAFAFIgVgSIgHgDIgGgIQgQABgBgBIgBgBIANgEIAMABIADgBIAAgCIAAgCIACABQAFACADACIgCAHIAMAMQABADADACQAEADAFAFIALALQANAOADAAIAFgBIACgBIABgBIAAgDQAAgLgEgKQgDgGgHgLIgKgOQgFgIAAgIIADgRIACALQgBAGAGAIIALAPQAJAMADAHIADAHQgGgMgIgGIAIASQAFANABAGIgBABQgCABgEAEQgDAEgBAAQgEAAgQgQgAibBsIgBgBQADgHABgEIgCgCIgFgEIgCgBIgOgNQgDgEAAgIIACgLQADgJAEAAQACAAAFACQAEACAEAAIALgBIgFADIgCADIgIgCIgCgCIgFgBQgEAAgEAHQgDAFAAADQAAAJAFAHQADAEAGADIAKAGQADAEAAAGQAAAFgCAFQgDAHABAEgAABBTIgIgFIgPgKIAFAAIAAAAIABgCQgHgHgJgFQgPgKgGAEQgIgEgKAAQg0AAgIAFIgBABIgBACQAAABgIAAIACgBQAFgDABgBIgBgCIAbgDQAzgFARAHQAFACAIAHIALAKQAHAGAJACQAPADAPgCIAQAAQgHADgNABIgGACQAAAAgBAAQAAAAAAABQgBAAAAAAQAAABAAAAIABACgABuAoIgGgIQgFgGgCgGIACgGIABgLIgBgJIgEgHQgGgIgQgKIgZgKIgVgOIAEABIgNgRIAGAEQAGAGAJAEIASAJIASAJQALAHAFAHQALALADAQQgBgFgEgCIAAAPQACAOADAFIACgCIABgDIADARgAALhBQgIgGgDgJQgCgHAAgLIABADIAHASQAGAKAGAGgAAKhSQgKgQgCgLIAEgUIACgJQAAgMgLgMQgDgEgWgNQgRgLgIgIQgMgNAAgNQABgTAKABIAHABQACAEAEAEQAGAGAFAAIAAgBIABAAIgBgBIABAAIAKAJIAFAGIALAMQAPAQAHAAIADgCIgBACIgEABQgIAAgLgMIgMgOQgDgDgGgDIgMgFQgGgEgEgDQgDgDAAgFQgHABgDAEIAAACIAAgBIAAgBIABgFIAAgBQgDACgBAEIAAAIIAAAGQABAEACACIAAAAIABgBIAAgDQADAIAIAIQAGAGAUAPQASALAIAKQAKAKACAKQgDABgDAFIgEAKIgBAGQAAAGAEANQACALADAFIAEAFgAABiaIAAABIAIALIABgBIABAAIAAgCQAAgCgDgEQgEgDgDAAIAAAAgAALi/IABAAIAEgDIAFgFQAHgIADAAIABAAIgTARgABLjGIgWgEQgQgBgGADQAEgDAAgCIAAgBIgBgBIAVAEQANACAJADg");
	this.shape_31.setTransform(117.6,55.5);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("rgba(107,211,210,0.498)").s().p("AhsEWIgBgCIABgFIABgIQAAgEgEgGIgIgOIADgIIgGgEIAHgeQAAgFgCgJIgFgOQgCgDgEgEQgEgEgFgDQgCgBgDABIgFgFIgQgWIAAAAIgBgCIgGgmIAIgQIACgFIAGgEIALgEIAjACIAHACIAHALQACACACABIAGAEQAHAGAKAAQAEAAADgCQACAAADgDIAFgEQADgBADAAIABAAIAIAAIADABIAagMIAGgGQAEgFAAgCQAAAAAAgBQAAAAAAAAQgBgBAAAAQgBAAAAAAIgDgBIATgNQAHgEAFgGIAGgFIAEgBIAOgIIACALIgMAKQgNAHAAACIAAABIAAABIAAABIAAADIgYARQgKAKAAADIAAABIgPAKQgOAJgEAFIgWAAIgNgGIgUgFIgPgNQgGgEgHgBQgJgDgNACQgFABgEAFQgEAEAAAEIAAAAIgBADIAEAQIADAIIAVAaIAPAZIAJAKIABABIABAJIAGASIAAAAIgKALQAAADAFADIAIAEIgDAEQgFAGAAADIAFAMIAAAGIgCgBIgCACIgBABIAAACIAJAZIAAABIgIABgAhoEFIABAMIABAFIAAAAIAFAHIABAAIACgBIABAAIgGgIQgDgIAAgGIAAgCgAilBWIgBAJQAAAOAJAQQAFAIAKAMIADADIABAAIAIAHIAFAGIALAOQAEAIAAADIgBADQACAGAAAGIgBAFIgCAEQgDAEAAAGIABAEQABACAFAAIgCAEIgBAGIABAJIAFALIABgBIAAgBIgBgPQAAgHACgCIADgDIABgBIgFgDIgGgDIgBAAIAAgCIAAgBIACgFIAIgJIABgBIAAgCQgBgLgIgMIgKgOIgKgNQgJgKgIgNIgIgLIgHgMIAAgCIAAgCIgBgGIACgIIAAAAIAAgBIACgDIAAAAIADgEIAFgIQACgDAIAAIAJABIADABIAEABIAAAAIADABIACAAIADACIABABIAGACIARAJIAOAHIAMAEIABAAIAJACIAQAAQADAAAFgDIADgCQALgHAcgbIAPgNIgFgBIAAAAIAAgBQAAgBAJgGIALgGIALgLIgBgDIAAAAIgjAaIAAABIgJAFIABAAIACAAIACABIAAACQgCAEgPAMIgXAQIgDAAIgEgBIgMAFIgFAAIgCAAIgGAFIgDgBIAAAAIgFgCIgBAAIgOgFQgEgBgFgEIgKgKIgHgCIgMgDIgRgBQgJAAgHAFIgFAGIAAAAIAAABIgCACIAAABIAAAAgABMDZQAEgIAJgGIADgCIAdgLQAGAGADAAQAFAFABAAQACAAAKgQIAJgQQAAgDgEgJIgCgGIgCgGIAAgVIgDgYIATgOIgDANIAAAeIABAIQABALAFAAIAIgEIAAAAIAAAIIgBAHIAAAGIABAGIgRARQgGAGgEAGIgFAIIgCACIAAACIgDAGIgTADIgDgLIgCgCQgBgDgEABIgDAAQgDAAgFAEIgCABIgZAPgABdDNQgEACgEAEIgEAEIAAADIATgQQADgDAHAAIACAAQAGAAACACIAHAGIAEAFIgCABIAEABIACAAIAAgBIACAAIgCgBIAYgiQAGgHAEgDIADgGIgBgGIgBgEIgEADQgCAAgCgDIgCgGIAAgBIgDgSIAAgNQAAgIABgFIACgEIgDgBIgCADIgBABIgEAGQgCADAAAGQAAAGAGAYIAGAWIgKATQgLATgGAAIgFgCIgIgGIgGgBQgIAAgNAJgAAuALQAAgBgBAAQAAAAgBAAQAAAAgBAAQgBAAgBAAIgDgFIgHgXIAAgFIgBgNIgEgeIgCgFIABAAIABgBIgKgQIgHgNIABgOIAAgEQACgGAAgJIgBgEQAAgBAAAAQAAgBAAgBQgBAAAAAAQgBgBAAAAIgGACIAEgQIAWgOIAKAEQANADAGAAQAGAAAEgCQADgBAAgDIAAAAIAmACIAIABIAHAMIACAHQACAGADADQAGADALAFIALAEIAAAAIgDABIgBAAIgDAAIgXABIgHgHIgEgFQgSgVgLAHIgJAAIgOgCIgZAAIgCABIAAABIgBAAQgEgCgDAHIgEALQgCAFAAAEIAAARIABAFIADAEQABAHAFALIANAbIACALIgEgBQgEACAAAMIADAWIAEAMIABAFIgEACgAAuAJIgFgMIgFgPIABgMIACgLIAAgBQAAgBAAgBQAAgBAAAAQAAAAABAAQAAAAABAAIABABIgBgIIgMgeQgMgbAAgEIADgUQABgIACgFQABgHADgCIBDAAQAJABAFADIAEACIADADIAEAEIAAABIACACIABABIAAAAIABACIAAAAIAFAFQAFAEAJAAIADAAIgEgDIgNgHIgDgDIgEgEIgHgNIgDgFIgVgEIgKAAIAAACIgFACQgFAAgIACIgIABIgTgGIgBgBIgFAAIgIADQgGADgDAFIgCAFIgBAGQAJgEAAAGIgBADIAAAMIgCAOIgBACIAIAQQAFAMAEAQQACAIABAMIABATQAAAMACAHQACAKAGAIIABAAgAh+iZIgIAAQgGgCgEgDIgGgEIgLgLQgFgEAAgGIgDgVIgDgKIAAgFIgBgFIgCgGIgBgBIAAgBIAAgEIABgBIAIgLIAZgcIAFAEIANAIIAHAEQABAAAAAAQABAAAAgBQABAAAAAAQAAgBABgBQAAAAABgBQAAgBAAAAQAAgBABAAQAAgBAAAAIgCgMIADgBIAlgGQAHAAAKAHIAJAJIAUAOIAAAEIAAAKQABADADABIALAFIAIANIgFAAIgPgCQgIgBgBgBIgHgMQgCgFgDgBQgEgCgCgEIgEgGQgGgHgUgCQgJACgFADIgHAFIgFAFQgCADgGABIgJABQgDgCgEgCIgFgDQgJAAgFAKQgFAJAAALIABAPIAFANIAAABQABADAGAAIADAAIAAAFQAAAFABADQABAEADAEIAHAJQAAADACACgAiWkHIgCAFQgFAJgGAIIgCADIgBABIgBADIAAAKQAAATAGAQQADAHAFAIQAHAKAKAFIAAgBIgPgXIAAAAQgEAAgBgFIgGgvQAAgDAFgEQACgGAGgFIABgBIADgCIAAAAIAFABQAZAEAHgGIAEgFIACgCIAEgDIADgCIAAAAIAHgCIAAAAIACgBIAGgBIAFABIAFACIAGACIAFACQAEACAFAHQADAEABAGIABACIAEADIAAABIAAAAIAAAAIAGAHIABABIAIAIIALAAIADAAIAAgBIAAgCIgJgDIgHgEQgEgEAAgFIgBgBIAAgFIgDgEIAAAAIgCgBIgMgMIgUgKIgBAAIgEgCQgEgBgHABIgMACIgEACIgEABIACAEQgKANgEAAQgIAAgIgGIgEgCIgBAAg");
	this.shape_32.setTransform(121.5,68.3);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("rgba(107,211,210,0.2)").s().p("AhiE0IgDgDIgDgDQgDgBgIgCIgKgCQgIgDgDgEQgCgBgBgFQgBgDgFgKQgDgHgBgHIgBgMIABgOQAAgFgDgIQgDgJAAgFIAAgIQAAgGgFgEIgFgEQgBgDgDgEQgDgGgHgEIgGgFIgDgEQgEgJAAgMQgBgJACgOQAEgaANgUQAJgOANgLIAEAAQAIAAAEADIALAFIALAFQACABAHAAIALACIAPAFQALADAGACIAGAAIAKgIQAJgFAFgBQAIgBAFgGIADgEQADgDADgBQAHgEABgFIAAgFIAAgEIACgJQABgEAAgFIgBgIIgHgRIACgBIAAgFIgBgDIAAgDIgIhEIABgDIAAgEIgBgDIgFgCQgFgFgCgEIAAgIIAAgHQgBgIgCgFQAKgOAOgKQAOgLAZgIIAGgBIAIABIATADIAGACIAIAEQANAGAMAAIAQAAQALACAFADQAEADABAFIABAJQABAGACACIAJAJIAKAIQAMAKAAAGIgBAEIgDAGQgHAIgHAAIgKgDQgKgDgGAAIgFABIAAAAIgWgEIgOgGIgPgHQgJgEgMgCQgPgBgCAFIAAAFIAAAEQgCAGgEADIgBACIAAAKIAFAIIAIAIQAFAEABADIAPAcQAHANADAIIABAFIgBAIIADAVIAAAFQgBAIgHAMIAAAAIgIAEIgGAFIgEAEQgDADgHADIgKADQgGAFgDAFQgDADgCAHQgBACgHAHIgOAJIgMAKQgJAIgGABIgFADIgTAFIgZgCQgJgDgDgDIgFgEIgHgCIgTgFQgJgBAAABIgGABIAAACQAAAFAIALIAmAoQAJALAAAGIgCARQAAAGACAFQACADAAAJIgCAPQAAAFACADIAEAEIAEAGQACAHAAAEIgCAJIgEAIQgFAJgBAKIgLAGgAiSCeQAEADAFAEQADAEACAEIAFANQACAJAAAFIgHAeIAGAFIgCAHIAIAOQADAHAAADIgBAIIgBAFIABACIAJAJIAIgBIAAAAIgJgaIAAgCIABgBIACgCIACACIAAgHIgFgLQABgEAEgGIADgEIgIgEQgFgDAAgDIALgKIAAgBIgGgSIgCgIIgBgBIgIgKIgQgaIgUgZIgEgJIgEgQIABgCIAAgBQAAgDAEgFQAFgFAEgBQANgBAKACQAGACAGADIAPANIAUAGIAOAGIAVgBQAFgFANgJIAPgKIAAAAQAAgDALgLIAXgRIAAgDIABgBIgBgBIAAAAQAAgCANgIIAMgJIgCgLIgNAHIgFACIgFAEQgGAGgHAEIgTANIAEABQABAAAAAAQABABAAAAQAAAAAAABQABAAAAABQgBABgFAFIgGAGIgZAMIgEAAIgIgBIgBAAQgDAAgDACIgFADQgDADgCABQgDABgEAAQgKAAgHgGIgGgEQgCgBgCgCIgGgLIgIgBIgjgDIgLAEIgGAEIgCAFIgIARIAHAlIAAACIABAAIAQAXIAEAEIADAAIADAAgAAQg+IAFAdIABANIAAAFIAGAYIAEAEQAAAAABAAQABAAAAAAQABAAAAABQABAAAAAAIAAAAIAFgCIgCgFIgEgMIgCgWQAAgMADgCIAEABIgCgLIgNgbQgFgLgBgHIgDgEIgBgFIAAgRQAAgEACgFIAEgLQADgGAEABIABAAIABgBIACgBIAYAAIAOACIAJAAQALgHASAWIAEAEIAIAHIAWgBIADAAIACAAIADgBIgBAAIgKgEQgMgFgFgDQgEgCgCgHIgCgGIgCgFIgFgIIgIgBIgmgCIAAAAQAAADgDACQgDACgHAAQgGgBgNgDIgKgEIgVAOIgEAQIAGgCQAAAAAAABQABAAAAAAQAAABAAABQAAABAAABIABADQAAAJgCAHIAAADIAAAPIAGAMIAKARIAAAAIgBAAgABdDyQgOgDgOgBQgPABgJgEIAHgRIAAgJQAAgGADgDQABgDAJgGIAQgKIAMgBIABgBIADAAIAPgBIAPgNQAEgGAAgGQAAgDgEgIQgEgGAAgEIABgKIgBgSQAAgFADgEIAIgKQAGgHAHgGIAJgHIAEAAQALALALAMIgBAGQgEAMgBALQAAAKAPAKIAJAHIAFADIgCAGIgDAFQgDAHAAAHQAAAFADAGIAFAIIgDACIgFACQgKAGgDAOQABADgDACQgFADgJACIgQAKQgRABgGADIgEAFIgGAEgABSDMIgDADQgJAFgEAIIgDAJIAZgPIACgBQAGgDACAAIAEAAQADgCABADIACACIAEALIASgDIADgGIAAgCIACgCIAFgIQAEgFAGgHIASgRIgBgGIAAgFIABgIIAAgIIgBAAIgHAFQgFAAgCgMIgBgIIAAgeIADgMIgTANIADAZIAAAUIADAGIABAGQAEAJAAADIgJARQgKAPgCAAQgBAAgEgEQgEgBgFgGgAiAiEQgWgJgVgMIgOgIIgHgOIgEgLIgEgXIAAgSQAAgSAIgMQAEgJAJgHIAGgKIAFABIAVAAQAJgBAEgDIAJgHIAIgIIAKgGIAYAAQAcAJASAIQAWAMACALQACAIAIANQAIAQALAJIAAAAIgGAIQgDAEgHAAIgQgCQgRAAgIACIgFACQgFgDgEgFIgHgJIgGgKQgEgEgGgDQgJAAgHACQgEACgCADIgEAEQgFADgHACIgUAAQgGABgCACIAAADQAAADACAEQADAFAAADIAAAIQABAFADADIAKARQAGAMAAABIAAAIQgBAFACADIABAFIAAADIgCACgAiHiWQgCgCAAgDIgHgJQgDgEAAgDQgCgEAAgEIAAgGIgDAAQgGAAgBgCIAAgBIgFgOIAAgOQAAgLAEgKQAFgJAJgBIAFADQAEACADACIAJAAQAGgBACgEIAGgFIAGgFQAFgDAJgBQAUABAGAIIAEAFQACAFAEABQADACADAEIAGAMQABABAIABIAPACIAFAAIgHgNIgLgEQgEgCgBgDIAAgKIAAgEIgUgOIgJgJQgJgHgIAAIgkAHIgDAAIABAMQAAABAAAAQAAABgBAAQAAABAAAAQgBABAAABQAAAAgBABQAAAAgBABQAAAAgBAAQAAAAgBAAIgHgDIgMgJIgGgEIgZAcIgHALIgBABIAAAEIgBABIABABIADAGIAAAFIAAAFIADAKIAEAWQAAAFAEAFIALAKIAGAEQAEAEAGABIAIAAIABAAIAAAAg");
	this.shape_33.setTransform(122.5,68);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#FFFFFF").s().p("AhjEaIgFgHIAAAAIABAAIAHAGIgBAAIgBABgACDDTIgFgBIACgBIgEgFIgGgGQgDgCgGAAIACgBQAIAAAHAGQAGAGABAEgAhwDQIAAgCIAGgKIgBgDIgDgEQgDgHAAgHQAAgCgIgJIgIgIIAHAEIALAOQAHAMACALIgBADIgIAJgACfCoIAEgJQgCgBgBgEQAGgCADABIAAAGIgCAGQgFADgFAHIACgHgAiECYIgIgHIgBAAIgOgSIAAgBQAFACACADIAJAOQACADAFAEIAAAAgACcCUIAAgDIAAgCIAAgBIABAAIAAAAIAAABIADAGIAAAAIgBABQgBAAAAgBQAAAAgBAAQAAAAAAgBQAAAAgBAAgACWB4QgBgEAAgEIAAgMIACgDIABgBIAAAAIACADIAAAZIABAEIgBACIAAABgAilBnIgCgSIAAgCIACgHIABAAIAAgBIABgCIABgBIAAAAIAFgGQAAAGgDAHIgBAAIgBADIgBABIAAAAIAAACIgBABIgBADIABAFIAAADIAAAEIAAACgAhDBdIgBAAIADgEIACABIAFgFIADAAIAFAAIACAAIAFABIAIgEIAAgBIAEAAQAAAAAAABQABAAAAABQAAAAAAABQAAAAAAABQAAADgCACIgDACIgBABIgWACgAhOBaIgDgBIgBgBQgBgBAAAAQgBAAAAgBQgBAAAAgBQAAAAgBgBIAOADIAAAAIAFACIABAAQgCABgHAAgAh1BHIgBgBIgEgCIgBAAIgDgBIgBAAIgEgBQAFgDAHACIAHACIADADIAAABIgCAAgAAHA3IABgCIAAgDIAAgDIgCgBIAAgCIAGgDIABgBIABADIABAFIAAACIgHAGgAAhg1IgBgJIAAgDIABgEIACAGIADAPQAAAAgBAAQAAAAAAAAQgBAAAAABQAAABAAABIAAABQgBgBgCgIgAB7iIIgCgDIAAAAIgCgCIAAAAIgBgBIgBgCIgBgBIADACIAGAFIAAACgABxiVIgDgDIgLgGIgHgCIgFAAQgGgBAAgDQAAgBAAAAQABAAAAgBQAAAAABAAQABgBAAAAIAHAAQAJAAAEAEIAGAHIADAGIAAABgAALiZIgBgCQAAgBAEgFIAEgFIABAAIAHgDIAFAAIABABIAMAEIABACQAAABAAAAQAAAAgBABQAAAAAAAAQgBAAAAAAIgFAAQgRAAgEAEIgDADQAAAAAAAAQAAABAAAAQgBAAAAAAQAAAAgBAAQAAAAAAAAQgBAAAAAAQAAAAAAgBQAAAAAAAAgAiVirIgGgIQADAAAFADIAHAKIgCABQgDAAgEgGgAimjPQgCgKAAgFIAAgGIAAAAIAHAjIAAABIgBAAQgCgDgCgMgAgajqQgGAAgFgCIAAgBIgGgHIAAAAIgBAAIAAgBIgDgHIAAgFIABgFIAAgBIAGAFIABABIAAADQAAACAEAEIAAABQAAAFAEAEIAHAEgAiZkHQADgCACAAQAEAAACACQABAAABAAQAAAAABABQAAAAAAAAQAAABAAAAQAAABAAAAQAAAAAAABQgBAAAAAAQgBABgBAAIAAAAIgGgBIAAAAIgCACIgBABIgFAAQAAgFADgCgAhmkQQAAAAgBAAQgBAAAAAAQgBAAAAgBQgBAAAAAAIAAgCQAAAAAAgBQAAAAABgBQAAAAABgBQAAAAABAAIAIgCIAIAAQAEABAAADIAAAAIgGABIgBABIgBAAIgGACg");
	this.shape_34.setTransform(121.8,68.6);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#A2F2FC").s().p("AhfEaIgHgGIgBAAIgBgFIgCgMIADgBIAAACQAAAGADAIIAFAIgAhwDzIgBgJIABgGIADgEQgFAAgCgCIAAgEQAAgGADgEIACgEIAAgFQAAgGgCgGIABgDQAAgDgEgIIgKgOIgFgGIAAAAIAAAAQgFgEgCgDIgJgOQgCgDgFgCIAAABIAOASIgEgDQgKgMgEgIQgJgQAAgOIABgJIAAACIACASIABAAIAAgCIAAgCIABACIAGAMIAIALQAJANAJAKIAJANIgHgEIAIAIQAIAJAAACQAAAHADAHIADAEIABADIgGAKIAAACIABABIgCADIgBADIABABIAAABIABAAIAGADIAEADIAAABIgDADQgDACAAAHIACAPIAAABIgCABgABQDVIADgEIAJgGQANgJAIAAIAFABIAIAGIAGACQAFAAAMgTIAKgTIgGgWQgGgYAAgGQAAgGACgDIABgDIAAAMQAAAEABAEIAEALIAAgBIABgCIACAOIAAAAIgBAAIAAABIAAACIAAADQABAAAAABQAAAAAAAAQABAAAAABQAAAAABAAIABgBIAAAAQABADADAAIAEgDIABAEQgDgBgGACQABAEACABIgEAJIgCAHIgRAWIgHAMIABABIgBAAIAAABQgBgEgGgGQgHgGgIAAIgCABIgCAAQgHAAgDADIgSAQgACZBhIABAAIgBAAgAg5BgIAWgCIABgBQgFADgDAAgAhNBbIADAAQAHAAACgBIABAAIgDAEgAgdBWQAAAAAAgBQAAgBAAAAQAAgBgBAAQAAgBAAAAIAWgQQAPgMACgEIAAABIAAADIgBACIABABQgdAbgLAHQACgCAAgDgAhdBTIgSgJIgFgCIAGAAIACAAIAAgBIgDgDIgHgCQgHgCgFADIgDgBIgJgBQgIAAgBADIgFAIIgDAEQADgHAAgGQAHgFAJAAIAQABIANADIAGACIALAKQAFAEADABIAPAFIgOgDQABABAAAAQAAABABAAQAAABABAAQAAAAABABIABABgAgvBWIgCAAIALgFIAEABIAAABIgIAEgAAQAxIgBgFIgBgDIAigaIABAAIAAADIgLALIgKAGQgKAGAAABIAAABIABAAIAEABIgHAHgAAFAvIgBAAIADgCIAAACgAArAHQgFgHgDgLQgCgHAAgMIAAgTQgBgMgCgIQgFgQgFgMIgHgQIAAgCIADgOIAAgMIAAgDQAAgGgJAEIABgGIACgFQADgFAGgDIgEAFQgEAFAAABIABACQAAAAAAAAQAAABAAAAQAAAAABAAQAAAAAAAAQABAAAAAAQAAAAABAAQAAAAAAgBQAAAAAAAAIADgDQAEgEARAAIAFAAQAAAAABAAQAAAAAAAAQABgBAAAAQAAAAAAgBIgBgCIAHACIAJgBQAHgCAFAAIAFgCIABgCIAKAAIAUAEIADAFIAIANIAEAEIADADIAMAHIAEADIgDAAQgJAAgFgEIgCgCIACAAIAAgCIgGgFIgDgCIgDgEIAAAAIAAgBIgDgGIgGgHQgEgEgJAAIgHAAQAAAAgBABQgBAAAAAAQAAABgBAAQAAAAAAABQAAADAGABIAFAAIAHACIAGAEQgEgDgKgBIhCAAQgDACgCAHQgCAFgBAIIgCAUQAAAEALAbIAHAQIgBAEIAAADIABAJQACAIABABIgBALIgBAMIAEAPIAGAMgAiaiwQgGgIgCgHQgHgQAAgTIAAgKIACgDIAAgBIACgDQAGgIAFgJIgBAFIAFAAQgGAFgDAGQgFAEAAADIAHAvQABAFADAAIABAAIAGAKQgFgDgDAAIAGAIQAEAGADAAIACgBIACADIAAABQgLgFgGgKgAinjdQAAAFACAKQACAMACADIABAAIAAgBIgHgjIAAAAgAgcjjIgHgIQAFACAFAAIACAAIAKADIAAACIAAABIgDAAgAguj3IgCgCQgBgGgCgEQgGgHgEgCIgFgCIgGgCIgEgCIgGgBIAAAAQAAgDgEgBIgIAAIgIACQgBAAAAABQgBAAAAAAQgBABAAAAQAAABAAAAIAAACQAAAAABAAQAAABABAAQAAAAABAAQABAAAAAAIAEAAIgDACIgDADIgCACIgEAFQgHAGgZgEIAAAAQABAAABgBQAAAAABAAQAAAAAAgBQAAAAAAgBQAAAAAAAAQAAgBAAAAQgBAAAAgBQgBAAgBAAQgCgCgEAAQgCAAgDACIgBABIACgEIALgCIAAAAIAEACQAIAGAJAAQAEAAAKgNIgCgEIADgBIAFgCIALgCQAHgBAFABIAEACIABAAIAUAKIAGAHIAAABIgBAFIAAAFIADAHgAgmj9IAAgDIABAAIACAEIABAFQgEgEAAgCg");
	this.shape_35.setTransform(121.7,68.5);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("rgba(107,211,210,0.498)").s().p("AhyELQgFgEAAgGQAAgEADgJQADgJAAgEQAAgCgCgDIgFgGQgHgHAAgEIAAgGIgDgGIgCgLIAJAJQAEAFAHAFIAEACIAFAEIABADIAHAKIgEANQgFALAAADQAAAEAOAVQgRgEgHgFgAh5DRIACADIABABIACADIABABIAFAIIACAEIAAADIgFAPIAAAFQAAAFADADIAFAGIAEACIAAAAIgHgOIgCgGIADgHIABgHIAAgCIAAgEIAAgDQAAgEgDgFIgPgPgAB9DjIAGgCIADAAIALADIAHABQABAAAAAAQABgBAAAAQABAAAAgBQABAAAAgBIAAgDIAEgGQABgEACgDIAGgGIACgCIACgEIAAgDIAAgDQAAgEABgBIAFgBIAEgBIABgBIABADIADACIgBACIgCAKIgCAFIgBADIgHAEIgDAKIgCAJIgTAGgACGDlIAMAFIAOAAIAGgFIACgHIAEgKIABAAIACgCIADgDIABgCIABgEIgBgEIgPATIAAACIgFAMIgBABIgDAAIgVgDgACwDBIACACIADgBIABgCIgEgBQAAAAgBAAQAAAAAAABQAAAAAAAAQgBAAAAABgAi4B1QgCgGAAgDIAAgDIAAgRIgBgDIAAgBIAggYIBdAbIABAAIAPAGIACABIgaAFIgIgDQgIgDgEAAIgQAAIgIABIgIgDIgRgKQgHgGgCgDIgDAAQgGADgIAIQgHAHABAGIABAFIAAADIgDAKQgDAHgBAEQgEgEgDgEgAizBzIgBgYQAAgEAKgHIANgKIAMAAQAEAFAQAHQAPAHAHAAQAPAAAIADIAFACQAFACAIAAIACgBIAAAAQgEgEgSgDIgCgBIgWgFQgFgDgQgFIgSgEIgNgDIgLAKIgIAFIgEAEQgCADAAAFIACAVIACAAgAADBAIAKgLQAFgIAFgEQARgPAagFIgdAVQgIAFgHAJIgEAGQAAAAgBABQAAAAgBABQAAAAgBAAQAAAAgBAAIgCAAIgHAAIgCABgAAyAcIgMAFIAAABIgJAGQgRAOgDAIIAKgIIAAgBIAJgKIAIgGIAJgEIAJgFIABgBIAAgCgAAmgjQgBAAAAAAQgBAAAAgBQgBAAAAAAQgBgBAAAAIgCgNIgCgRIgJghQAAgJgDgIIgCgKIAAAAIABgEQAAgBAAAAQAAAAAAgBQAAAAABAAQAAgBABAAIAKgGQANgGAGAAIAEABIAGABQAGAAAKgEIAIgFIAOACQAMABADAEIAIALIgcABQgCgEgGgBQgIgCgNADQgNADgJAGQgJAGAAAGIAAAFIABAHIAAADQAAAIAEAKIAGANIACAjIgGAAIAAABgABSiTQgIADgNACIgbAEIgFADIgBAAIgIAGIAAABIgBABIAKAwIAAAAIAAABIAAACQAGAZABAHIAAACIACAAIAAgQIgDgUIgFgPQgHgUAAgHQAAgGACgCIAEgDIABAAIAGgCIAMgEQAXgGAKAAQAOAAAIADIAGACIADAAIAAgBIgFgDIgBgBQgJgEgNgBIgBAAgACHh3IgFAAIgGgJIADgCQACgCAFAAIABAAIADAEIANALIgQgCgACJh4IABgCIAAAAIgFgFIgEgBgAi2juQgDgGgBgCIACgFIAOgWIAKgCIAKABIAHgBQAJACAOAAIACABIAOACIAMgBIAEAFQADADADAAIAJAAIgOAQIgBgCIgCgEQgEgDgGgDIgMAAIgLgCIgCgCQgCgCgEAAIgKADIgMgBIgIAAQgHADgDAFIgEAKIgEAJIgBACgAivkFQgDAFAAADIgBAFIAAADIABABIAAgCIADgKQAGgOAIADIAJABIAUgBQAaABAKAEIAHAEIADAEIACgCIABgBIgCAAIgEgFIgJgEIgBgBIgDAAIgrgEIgFgBIgEAAQgNAAgIALg");
	this.shape_36.setTransform(122,66.5);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#FFFFFF").s().p("AhzEHIgBgCIAAgDIABgCIACAHIAEAGIgBABIgFgHgACZDrIAAAAIABgCIAFgMIAAgBIABgBQADgEACAAQABAAAAAAQAAAAABAAQAAAAAAAAQAAAAAAABIAAAAIgEAJIgCAHIgHAFgAhyDpIgBgFIgGgIIAAgBIgDgCIAAgCQAGAEAEAHIADAEIAAABIAAAEIAAABgACqDUIgBgBQAAgBAAgBQABAAAAgBQAAAAABAAQAAAAABAAIABAAIAAACIgDADgAheBcIgKgCIgQgFQgPgGgEgEIAGACQARAFAEADIAXAGIgCABgAAfgoIgBAAIAAgBQAAgHgGgZIAAgCIAAgBIAAAAIgHgiIACAEIACAFIACARIABAHIAIAaIAAALgAAPh9IAIgHIABAAIAFgCIARgDIgVAJIgBAAIgCACQgFACgCACgABRiOIgFgCIACAAIABAAQANABAJADIAAABQgMgBgIgCgAikkIIAAAAIgDgBIgBABIgEABQAAgDAFgBIAHgBIAFAAIAFABIAOABIABAAIgBACIgCAAIgEAAIgIABg");
	this.shape_37.setTransform(122.5,66.2);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#A2F2FC").s().p("AhoENIABgBIgEgGIgCgHIgBACIAAADIABADQgDgEAAgFIAAgEIAEgPIAAgDIADADIgBABIgBAIIgCAGIABAGIAIAOIAAABgACTDsIgMgEIAAgCIAVAEIADAAIAAAAIABACgAhsDhQgEgHgGgEIgCgDIgDgIIAOAPQAEAFAAAEIAAACgAClDaIAPgTIABAEIgCAEIgBAAQgBAAAAAAQgBAAAAAAQAAABgBAAQAAABAAABIABABIAAABIgDACIAAAAIAAABIAAAAIAAgBIgCAAQgCAAgDAEIgBABIAAABgACxDDQAAAAAAgBQAAAAABAAQAAAAAAAAQAAgBABAAIAEABIgBADIgEABgAi0B1IgCgVQAAgFABgCIAFgFIAIgFIALgKIAYAFQAEAEAPAGIAQAFIAKACIADAAIACgBIABAAQATADAEAEIAAABIgDAAQgHAAgFgBIgGgDQgHgDgPAAQgHAAgPgHQgQgHgFgFIgLAAIgOAKQgKAIAAADIACAYgAAeArIAJgHIAAAAIAMgGIAFgCIAAABIgBABIgKAFIgJAEIgHAGIgJAKIgBABIgKAIQAEgHARgOgAAehOIgBgHIgCgRIgCgFIgCgEIgDgOIABgBIAAADQACgCAFgCIgCACQgCACAAAFQAAAIAHATIAFAPIACAVIAAADgACCh+IAEACIAFAEIAAAAIgBACgAA0iKIAKgCQANgCAHgDIAFACQAIACAMABIAGADIAAACIgEgBIgFgCQgJgCgNgBQgLABgWAFIgNAEgAiyjyIAAgEIABgEQAAgEADgFQAHgKANAAIgHABQgEABgBACQgEADgEAIIgDAKIAAACgAhYkAIgHgDQgLgEgagCIACAAIABgCIAcACIADAAIAAABIAJAEIAFAFIACAAIgBACIgCACg");
	this.shape_38.setTransform(121.9,66.3);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("rgba(107,211,210,0.2)").s().p("AhoEbIgQgJQgHgFgCgDQgDgGAAgHIACgGQACgEAAgEIgFgQQgHgRAAgJQAAgFACgFIACgHIgDgHQABgGAOABIAKACIAFACQADAFAEADQAEAEAHADQADACACAFQADAHACABQAFAFADAKQAAACgEAIQgDAIAAAKQAAAIAFAFIAEAEIABAGIgNAaIgVgLgAh9DAIACAGIABAGQgBAEAIAHIAEAGQACADAAACQAAAEgDAJQgCAJAAAEQgBAGAGAEQAGAFARAEQgOgVAAgEQAAgDAFgLIAFgNIgHgKIgBgDIgGgEIgDgCQgHgFgEgFIgJgJgACEDvIgBAAIgIgEIgOgJQAGgBAEgDIAGgFIAGgEIAWgEQAEgDACgHIAEgMIAHgKQAGgHAFgCQAIgDAGgHIAEgEIABAHIADAWIAAASQAAAAAAABQAAABAAAAQgBABAAAAQgBABAAAAIgJAHQgCACAAAEIAAAJIgEAFQgDADAAABQgCAFgFADgACBDeIAbALIASgGIACgJIAEgKIAHgEIABgDIACgFIABgKIABgCIgCgCIgBgDIgCABIgDABIgFABQgCABAAAEIAAADIAAADIgCAEIgCACIgFAGQgDADgBAEIgDAGIgBADQAAABAAAAQgBABAAAAQgBAAAAABQgBAAAAAAIgIgBIgKgDIgDAAIgHACgAixCNQgFgGgNgUIgIgMIAAAAIAIgPIABgQIAEgIQADgEAEgEQANgIAcgEIAOAAIABACIADABIAsAIQAAACAKAEIALAEIAFAAIALAJIAMAGIAIACQALAAAJgTIAFgNIADgIIAJgMQAHgGAHgEIAXgMQAQgIAGAAQAGAAABACIAAAEIADADQABABAAAAQABABAAABQAAAAAAAAQAAABAAAAIgUApIgBABIgNABIgCABIgCAAQgDAAgDADQgCAEgFABQgFAEgOABQgDAAgJADQgIADAAACIAAAHQABABAAAAQAAABAAABQAAAAgBABQAAAAAAAAQgDAAgMAFIgNAGQgCADgMADIgSAHIgEgEQgFgEgEAAIgHABQgCACgEAAIgEgBIgNgBIgCgCIgBgBQgIACgIgFIgFgDIgFgCQgGAAgLATIgLAbgAi2BPIAAABIAAADIAAARIABADQAAADACAGQADAEAEAEQAAgEAEgHIACgKIAAgDIgBgFQAAgGAHgHQAHgIAHgDIADAAQABADAIAGIARAKIAIADIAHgBIAQAAQAFAAAHADIAJADIAZgFIgBgBIgQgGIgBAAIhcgbgAAcAkQgFAEgFAIIgKALIAAABIACgBIAHAAIACAAQAAAAABAAQAAAAABAAQAAgBABAAQAAgBAAAAQACgBADgFQAHgJAHgFIAegVQgbAFgQAPgAAhggIgOgsQgBgFgEgIQgEgJAAgDIgGgVIAHgYQABgDAEgBQAFgCAQgCIAagEIAJgFIAFgFIAHgGQAEgCAJgDIAGAEIAGACIAGAFQADACADABIAGADIADAGQACADADACQACACADAAQAEAAACgBQABgBAGAAIAYAdIAAACIgBACIgSAIIgJADQgFAAgIgFIgNgIIgFAAIgCABIgDACIgDACIgGgEQgJgEgLgDQgNgCgIACQgKADAAAKQAAAIACAGIAFAJQADAGACAFQACAHAAALIgBAOIgCADIgEAEIgCAEQgBAEgKAAgAAiiRIgLAGQAAAAgBAAQAAABgBAAQAAABAAAAQAAAAAAABIgBAEIAAAAIACAKQADAIABAJIAIAhIADARIACANQAAAAAAABQABAAAAAAQABAAAAABQABAAAAAAIAAAAIABgBIAFAAIgBgjIgHgNQgDgKAAgIIAAgDIgBgHIAAgFQgBgGAKgGQAJgGAMgDQAOgDAHACQAHABACAEIAbgBIgHgLQgEgEgLgBIgPgCIgIAFQgJAEgGAAIgHgBIgEgBQgFAAgNAGgACDiHIgDACIAHAJIAEAAIAQACIgMgLIgEgEIgBAAQgEAAgDACgAjDjzQACgKADgFQAHgQAIgIQAKgLANAAIALABQAFABAJAAIAEAAIATAAIAKAFIAgABQANABACADQADACABAEIACAEIgTAQIgDADIgDAEQgEAFgOAAQgNAAgQgHIgLgFIgJgCQgNAAgSAXQgGAGgFAKIgBABgAimkWIgNAWIgCAFQAAACAEAGIACAEIAAgCIAFgJIADgKQADgFAHgDIAIAAIANABIAKgDQADAAACACIACACIAMACIALAAQAHADADADIACAEIACACIAOgQIgJAAQgEAAgDgDIgDgFIgMABIgEgBIgKgBIgCgBQgOAAgKgCIgGABIgLgBIgKACg");
	this.shape_39.setTransform(121.5,67);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("rgba(107,211,210,0.498)").s().p("AhwELIgGgDQgDgBAAgDIgBgPIABgDQADgFAGAAIADACIACABIAAABIAHAfIgCABIgKgGgAhyD3IAAAJIAAAEIAAAAQABAFAGACIgEgZQgCABgBAEgACmEJIgDgDQAFgDAEgGIAKgVQAFgJAEgCIAEAAIAEAHQACADAAAEIgDAQQAAABAAAAQAAAAAAABQAAAAAAABQgBAAAAABIgHAEIgEAEQgEADgKAAgAC2DzIgGAHIgEAHIACABIAEAAQAHAAAEgJIABgBIABgEIABgIIAAgFIgCgDIgBAAQAAAFgHAKgAi/BvQgCgBgCgEIgDgFIgBgDIABgNIgCgJQAAgBAFgCQAGgBAGAAIAGABIAEABIAGAAIABgBIAAgBIgBgHIAJAGIAHAGIADAHQAEAEAAACIAAABIAAAAQgHgCgFAAQgGAAgCACIgCABIgDAAIgDgCQgDgDgEAAQgEAAgCAEIgBAEIAAATgAi3BOIgGADIgBAAIgDACQAAABgBAAQAAAAAAABQAAAAAAABQgBABAAAAIAAABIAAADIAAAGIABACIAEAAIABgEIAAgFQABgHAKAAIACAAIAFAAIACACIACACIAHAAIAEAAIABgCIgBgBIgLgGgAANBiIgBgHIAAgFQAAgHACgCIAMgQIAGgFIAEgCIACABIAAADQAAABAAAAQAAAAAAAAQABABAAAAQAAAAAAAAQAIAAAIgDIAMgDQgCADAAAFQAAABgDADIgHAEIgCAEIgEAEIgFAFIgDAEIgPAGIgNAGgAARBUIADACIAFAAQAIAAALgJIARgPIgBgCIgBgBQgYAEgSAVgAAQhoIgFgTQAAgEALgGQALgGAHAAIAIACIACgBIALABQAIgBgBADIAAACIAAADIAIAKIgDAAQgIAAgHgEQgHgDgHAAQgHAAgEAHIgCAJIAAABIgFAGgAAniHQgIAAgFAEIgFAEQgCADAAAFIAAAFIAAAEIADABIACgBQAAAAAAgBQgBAAAAgBQAAAAAAgBQAAgBAAgBIABgGQAEgKAQAAIAOABIAAACQABAAAAABQAAAAABAAQAAABABAAQAAAAABAAIABAAIgGgHQgKgCgFAAIgDAAgAisj+QABgFAIgFQAIgEAMgEIAAACIABACIAHAAIAagEIASAKIgYAIIgGgCIgDgCIgFABIgDACQgDADgGAAQgFgDgNAGQgLAGgIAIgAiLkIQgKACgJADIgCABIgHAFQgEADABADQAAAAAAABQAAAAAAABQAAAAAAAAQAAAAABAAIABgCIAEgDIADgCQADgDAWgDQAGgGAEgBgAh4kGIAFAEQAEABAGgGIgBgBQgDgBgNAAIgBAAg");
	this.shape_40.setTransform(123,64.3);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#FFFFFF").s().p("AC1ECIAAgEQAAAAAAgBQAAAAABgBQAAAAAAgBQABgBAAAAIAEgDQABAAAAgBQABAAABAAQAAAAABAAQAAAAAAAAQABAAAAABQABAAAAAAQAAAAAAABQAAAAAAABIgBADIgCADIgEAFQgEAAgBgCgAjABfIgBgDIABgBIACgBIAIgGIAEgCIAJAAIACABIgGAEIgDAAQgJAAgCAHIgDACgAAcBUIAAgBQAAgBAEgEIAIgGIAIgDQABAAABAAQAAAAABAAQAAABAAABQABAAAAABQgBABgIAHQgJAGgDAAIgDgCgAAYh6IAAgBIAEgDQAFgEAJgBIgPALQgBAAAAgBQgBAAAAAAQAAAAAAAAQgBgBAAAAgAidj9IAAgBIACgBQAJgDAKgCIAAABQgEADgHACIgIACQAAAAgBgBQAAAAAAAAQAAAAAAAAQgBAAAAAAg");
	this.shape_41.setTransform(122.8,63.9);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#A2F2FC").s().p("AhxEEIAAAAQABgBAAAAQAAAAAAAAQAAgBAAAAQABgBAAAAIgBgIIgBgDQABgEADAAIADAZQgFgCgCgFgACwECIgCgBIAEgHIAFgHQAIgLgBgEIACAAIACADIAAAEIgCAJQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAAAgBAAQAAgBAAAAQgBAAAAABQgBAAgBAAQAAAAgBABIgEACQAAABgBABQAAAAAAABQgBAAAAABQAAAAAAABIAAADQABADAEAAIAEgFIABgCQgEAJgHAAgAjABjIgBgCIAAgHIACABIADgCIAAAGIgBAEgAilBXIgFgEIgEgBIAGgDIgCgBIAFAAIALAFIABACIgBACIgEAAgAi/BTIACgCIABAAIAHgDIACAAIgEACIgIAFIgCACQAAgBAAAAQAAgBAAAAQABgBAAAAQAAgBABAAgAAVhuIgBgEIAAgFQAAgFADgDIAAABQAAAAABAAQAAAAAAABQAAAAABAAQAAAAABAAIAPgKQAGgBAMADIAFAHIgBAAQAAAAgBAAQAAgBgBAAQAAAAAAgBQgBAAAAAAIAAgCIgPgBQgPAAgEAJIgBAHQAAABAAABQAAAAAAABQAAAAAAABQAAAAABABIgCABgAipj4QAAgDAEgCIAHgGIAAABQAAAAABAAQAAABAAAAQAAAAAAAAQABAAAAAAIAIgCQAHgCAEgCIAAgBIAMgBQgEABgGAGQgVADgEADIgCACIgFADIgBACIAAAAIgBgDgAhykDIgEgDIgEgEIACAAQAMAAAEACIAAABQgFAFgDAAIgCgBg");
	this.shape_42.setTransform(122.9,64.4);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("rgba(107,211,210,0.2)").s().p("AC3EqIgCgCIgCgCQgBgCgJgBIgEgGIgCgGIgEgFQgEgFABgBQAAgHgEgGIgCgFIgBgHIACgIIAFgPQAEgJAFgFIAFgFQAEgCAEAAQAHAAACABIACgBIADgEIARgCIACABIAIAUQADAFAAADIgCAFQgDAEAAAEIACAOQAAAGgOAUQgNATgEAEgAC2DcIgLAVQgEAGgEAEIADADIAGABQAJAAAFgDIAEgFIAHgEQAAAAABgBQAAAAAAgBQAAAAAAAAQAAgBAAAAIADgRQAAgEgCgCIgEgHIgEgBQgEACgFAJgAiBEDQgFgHgDgIQgDgGAAgGQAAgCAGgHIAHgLQAKgCAHAEIAEAFIAFADQADACADAFQADAEAAADQAAAEACAEIANAOQADAEAAADIgBAEIgCACIgKAGIgIACQgWgCgMgSgAh5DmIgBADIABAPQAAADACACIAHADIAKAGIABgBIgGggIAAAAIgFgDQgHAAgCAEgAjKB3QgGgEgEgHQgEgGgCgJQgDgHAAgJIABgGIADgJIAAgEQAAgDADgCQAGgFAdgBIABACIAEABIACgBIACgCQAVgEAKAIQAEACADAFIAFAGQAHAEADAIIAEAMQgPACgDAFIgBAEQgBACgCACIgFAAIgFgBQgDgCgFAAQgGAAgEAGIgDAEIgBACQgDADgDAAIgGADIgBACIgBACQgCACgIAAQgGAAgFgFgAjDA+QgFABAAABIABAKIgBAMIABAEIAEAFQACADACABIAFAEIAAgTIABgFQACgEAEAAQADAAAEADIADADIADgBIACgBQACgCAGAAQAFAAAGADIABgBIAAAAQAAgDgEgEIgEgGIgGgGIgJgGIABAGIAAABIgBABIgGAAIgEgBIgGgBQgGAAgGACgAAFBuIgIgWIgBgLIABgNQACgGAFgIQAQgQAtgFQAMACACAIQACADAAAEIAAAGIgBAHQgCAGgEADIgNAHQgJAGgCADQgFALgIAGQgIAIgQAGIgIgFgAAgAsIgGAFIgMARQgCACAAAGIAAAFIABAIIAAAAIANgGIAPgGIADgEIAFgEIAEgEIACgEIAGgEQAEgDAAgCQAAgEACgEIgMAEQgIACgIAAQAAAAAAAAQgBAAAAAAQAAAAAAgBQAAAAAAAAIgBgDIgBgCgAAShcIgJgQQgGgNAAgEQAAgMAEgHQAGgLAQgHQAOgHAIgDIADgBIALABIAEADQAIAGACADQACAEAAAFIgBAHIgBAGIABAOQAAAFgCACIgJAIIgFAAIgEgCIgEgBIgfAUgAAWiRQgLAGAAAFIAEASIALAAIAFgFIAAgCIACgJQAEgHAGAAQAIAAAHAEQAHADAIAAIADAAIgIgJIAAgDIAAgDQAAgDgHABIgLAAIgCAAIgIgCQgIAAgKAGgAjDjsQgEgEAAgCIABgDIACgFIgBgJQAAgDAGgHIAOgMQAXgQAUAAIALAFIALABQAMAAABgBIACAAIAEgBQAIAAAHAHIAEAFIACAEQAAAGgEAEQgEADgOAHIgQAAIgqAQQgbAJgFAAQgGAAgFgEgAijkTQgIAEgBAFIgGAUQAIgJALgGQANgGAFADQAGAAADgCIADgDIAEgBIAEACIAGACIAXgHIgSgLIgZAFIgHAAIgCgDIABgCg");
	this.shape_43.setTransform(123,65.5);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#A2F2FC").s().p("Ah9EUIAAAAIAAgCIACgDQACgCADAAQAIgCAHAEIgDABQgDAAgMAFgAC9D+QADgHAEgDIADADQABAAAAABQAAAAAAABQAAAAAAABQAAABAAAAIgHAIIgIAIQAAgFAEgIgAAhBZIAAgDQAAgDADgCQADgCAGABIABACIABACIgEADIgHADgAjHBMIAFgDIABAAIAEgBIgBACIgBABQgCACgGABgAAriCIgQgDIgBgBQAFgFAJACQAGABAGAEIgBACQAAAAAAABQAAAAgBAAQAAAAAAAAQAAABgBAAgAizkHQADgFAMgDIAOgFQgCADgEABIgIACQgLAEgCAEg");
	this.shape_44.setTransform(127.6,62.5);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("rgba(107,211,210,0.2)").s().p("Ah6EmIgIABIgGgJIgCgDIgCgDIABgIIAAgGQAAgGACgEQADgNAOABQAMAAAKAFIAHADIADACIABADIADAEIADADIACAEIgEAEQgFAGAAAFIgBAHQgBADgDABQgHABgNAAgAh+EFIAAABIAAABIgBADIgCAEIAAACIACADIAZgEQAIgDAAgDQAAAAAAgBQAAAAgBAAQAAgBgBAAQgBgBgBAAIgKgCIgJgCQgGAAgDADgAC5EPIgDgHIgDgFQgDgCAAgCIgCgFIAAgDQAAgFACgBQACgEAIAAIAKgIQAHgFAFACIARACIAAABIAAABIgDAYQgEACgKALIgKALIgCgBIgFAAIgCACIgEABgADCDsQgEACgBADIgEATIABAJIAGgIQAFgHABAAIABABIABABIAAAAQACgEACgCQAAAAAAAAQAAgBABAAQAAgBAAgBQAAAAAAgBQAAgEgCgDQgBgCgEgBIgCgBIgCABgAATBmIgBgKIADgJIAFgJIANgIIACgCIACgCQAEgCAOgBIADAFIgCAHQAAADACACQAAAAABAAQAAABAAAAQAAABAAAAQAAABAAABIgLAXIgGAFIgDAAIgBgCIgHgBQgDAAgFADQgEACgCAAQgCAAgCgIgAApBHIgFADIgBACIgFAHIAAADIABADIACADQAEACAGgEIAGgFQABgCABgGIgBgDIgDgCIgDgCIgDABgAjgBWIgBgEQABgGAHgJQAIgJAGgGQAEgCAHgBIAJgBQAFgDACACIABACIACADIAJAIQAFAEAAADQAAACgDACIgFAFIgOACQgBABgBAAQgBAAAAABQgBAAAAAAQAAABAAAAIgCAEIgEAFQgHAHgLABgAjLBFQAAAAAAAAQAAABgBAAQAAABAAAAQAAABAAAAIABAGIAOgEQADgBABgDIADgEIAAgBQgGgBgDABIgCABIgBAAIAAAAQgGAAgDADgAA2hwQgDgDgNgEQgOgFgHgBQgFgDgCgEIgBgDQAAgBAAAAQAAgBAAAAQgBgBAAAAQAAgBAAAAIgCgFIgBgFIAAgBIAGgDQAOgGAIAAIAGAAIADADQACADADAAIADgBIACAAIACAAIAFAAIACgCQAFADAIAMIAHANQACAFAAAEQAAACgEACQgFADgDAAgAApiTIgIADIgHABIgIACQAHAIAMACIATAEIAGgBIAFgBIgIgIIgJgIQgDgCgDAAIgDAAgAi8j7IgCAAQAAgFgBgEIgDgFQAAgDAFgHQAGgJADgBIAFgGQAFgDAHAAQANAAAMADQAMADAHAAIgBABIgYATIgRAKQgBACgGABIgIAAIgKAEgAikkYIgPAHQgBACAAAEIgBAFIACgCIASgJIAVgGIgCAAIgDgCQgDgCgCAAQgEAAgKADg");
	this.shape_45.setTransform(127.5,62.9);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("rgba(107,211,210,0.498)").s().p("AiBEVIAAgDIACgDIABgEIAAAAIAAgBQAEgFAOADIAKADQAEABAAACQAAADgIACIgZAFgAh4EUQALgEADAAIAEgBQgIgEgIACQgCAAgCACIgDACIAAADIABgBgAC5EIIAEgSQACgEADgBQABgCADABQAEACABACQACACAAAEQAAABAAABQAAABAAAAQgBABAAAAQAAABAAAAQgCABgBAFIgBAAIgBgBIgBgBQgBAAgFAGIgGAIgAC9D+QgDAHAAAGIAIgIIAHgIQAAgBAAAAQAAgBAAgBQAAAAgBgBQAAAAAAAAIgDgDQgEADgEAHgAAhBhIgCgDIAAgEIAAgDIADgGIACgDIAFgCQAEgCADACIACADIABADQgBAGgBABIgGAGQgEACgEAAIgCAAgAAkBRQgDACABACIAAAEIACABIAHgDIAFgDIgCgCIAAgCIgEAAQgDAAgDABgAjMBNQAAgBAAAAQAAgBAAAAQABgBAAAAQAAAAABgBQADgDAFAAIABAAIAAABIACgCQADgBAGACIAAAAIgCAEQgCADgDABIgOAFgAjABJIgBAAIgGADIABABQAGgBACgBIABgBIABgCgAAlh+QgMgCgHgIIAIgDIAHgBIAIgCQAGgCADADIAJAJIAIAHIgFACIgFAAgAAbiGIABABIAPACIAHACQAAAAABAAQAAAAAAAAQABAAAAgBQAAAAAAAAIABgCQgHgFgFgBIgFAAQgGAAgDAEgAi1kGQAAgFACgCIAPgGQAKgEAEAAQACAAADACIADACIADAAIgWAHIgSAJIgDACgAikkQQgLAEgDAFIACABQABgEALgEIAJgCQAEgBACgDg");
	this.shape_46.setTransform(127.5,62.5);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("rgba(107,211,210,0.2)").s().p("ADDEfIgCgJIACgFQADgFADgEQALgLASAFIADAEIgBAMQAAAEgDAEQgHAIgWAGgADSEQIgDAEIABAEIADABQADgCACgEQADgDAAgBIgBgDIgDgBgAiGEeIgCgGIAAgEQAAgDACgCQAGgDAMAAIADABIACADQAEAFAEAAQABAAABgBQAAAAABAAQAAAAABgBQAAAAAAAAIAIAFQADADAAACIABACQAAAAgBAAQAAABAAAAQAAAAAAABQgBAAAAAAQgGAEgSAAQgRAAgEgHgAh+EVIABADIAFACQAEACADAAIAHgBQAEAAABgCIgKgDIgMgCIgDABgAjmBPIgCgFIAAgFQAAgIADgEQAEgIAPABIAQAAQACABADAEIABAFIgCAFQgBADgEAEQgJAHgTAAIgHAAgAjYA6IgBACIAAABIABADIAQAAQAAgBAAAAQABAAAAAAQAAgBAAAAQAAgBAAAAIgBgDIgBgBIgEAAIgLABgAjBkRIgBgFQAAgFADgEQADgEAHgCQAGgCADAAQAFABAAAFIgFAGIgFAEIgFAGQgDADgGABgAi3kbIgFAEIACAEIAJgHIgEgDg");
	this.shape_47.setTransform(130,59.9);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#A2F2FC").s().p("Ah5EbIgFgCIAAgDQAFgBAJACIAKACQAAADgFAAIgHABQgDAAgEgCgADPEZIgBgEIADgEIAGgFIACABIABADQAAABgDADQgCAEgDABgAjZBBIAAgDIAAgCIABgBQAEgBALAAIABAAIAAAEQAAAAAAABQAAAAAAABQAAAAAAAAQAAAAgBABgAi9kWIAFgFIADgBIADACIgJAIg");
	this.shape_48.setTransform(130.1,59.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4}]},1).to({state:[{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8}]},1).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12}]},1).to({state:[{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16}]},1).to({state:[{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20}]},1).to({state:[{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24}]},1).to({state:[{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28}]},1).to({state:[{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32}]},1).to({state:[{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36}]},1).to({state:[{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40}]},1).to({state:[{t:this.shape_46},{t:this.shape_45},{t:this.shape_44}]},1).to({state:[{t:this.shape_48},{t:this.shape_47}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(98.7,48.7,42.7,42.8);


(lib.shock = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(107,211,210,0.498)").s().p("AguAdIALgxIACgEQAFgDAJgBQAEgBAGADIAJAFIAGAFQAEADAEAAQAGAAAJgFQAKgGAFAAIACADIgFAHQgDAFgEADIgIAHIgCAEQgCADgGAAIgIgDIgHgDIgFgEIgGgEQgKAAgEAIIgDAJIgTASgAgTgWIgGACIgBABIgBABIgCABIgCADIgDAPQgBAIgDAIIgBACQAFgEAEgLIACgDQAAgCABgEQADgEAFgCQALgDAPANIANACIARgUIgEACIgBABIgFAEQgFAEgCAAQgLAAgFgDQgDgCgFgFIgFgDQAAAAAAgBQgBAAAAAAQgBAAAAgBQgBAAAAAAg");
	this.shape.setTransform(197.9,-6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgegDIACgCIACgCIABAAIABgBIAFgCIADgBIACAAIAGABIAFADIAHAHQAGADALAAQACAAAFgDIAFgEIABgBIgCAFIgIAIIgDABQgFAAgOgIIgOgHQgDAAgFAEIgGADIgBgBIgGAMg");
	this.shape_1.setTransform(197.8,-7.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#A2F2FC").s().p("AgeARQADgIACgJIAGgLIABABIAFgEQAGgEADAAIAOAIQAOAIAEAAIADgBIgDADIgMgCQgQgMgKADQgFABgDAFQgCAEAAACIgCADQgEAKgFAFg");
	this.shape_2.setTransform(197,-5.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("rgba(107,211,210,0.2)").s().p("AhQApQgEgIAAgFQAAgFAGgKQAFgNAHgJQAVgeAVAAQALAAAMAGIAIAFIAGACQAFAAANgJIAYgNQANgHAIAEQAJAGAAAVQAAAFgIAKQgGAJgLAIQgKAJgMAHQgLAHgIAAQgUAAgJgDIgHgDIgEgDIgLARQgMAOgOAAQgOAAgIgMgAgPgUQgKABgEADQAAAAgBAAQAAABAAAAQgBABAAAAQAAABAAABIgLAxIAAAAIATgSIACgJQAEgJAKAAIAGAEIAGAFIAGADIAJADQAGAAABgDIADgEIAHgIQAEgCADgFIAGgHIgDgDQgFAAgJAGQgJAFgHAAQgDAAgFgDIgGgFIgIgFQgFgCgEAAIgBAAg");
	this.shape_3.setTransform(197.5,-6.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AjaBAQANgBAOgfIAIgWIADgJIAEgHQALgSAKgNQAOgRATgNIADAAQgOALgNAOQgQAUgHASIgGAQIgKAZIgJATIgIAKQgBAAAAABQgBAAAAAAQgBABgBAAQAAAAgBAAQgEAAgHgEgABUAiIALgHIABAAQAFAAASgLIAVgPIAFgCIABAAIgCABIgVAQQgeAVgDAAIgGgDgAgMgTIgVgMIAlAQQAEACALAIIAJAGQgRgGgXgOgADYAAIgVgDIACAAIAFgBIARADIgBABg");
	this.shape_4.setTransform(220.1,-9.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#A2F2FC").s().p("AjmA8IgGgFQAKAGAIAAIACAAQAHAEAEAAQABAAAAAAQABAAABAAQAAgBABAAQAAAAABgBIgGAHIgDAAQgFgBgQgJgAi3AiIAKgZIAGgQQAHgSAQgUQANgOAOgLIAMAAQAIAIAuATIAUAJIAVANQAXAOARAGIAPAJQAgAYAJAAIAGACQADABAegWIAVgPQgIAIgWARQgXAPgFACIg5gkQgMgJgIABIgKgGQglgVgbgMQghgPgHgCIgDgCQgHgDgGAEIgNANIgaAhQgPAVAAAFQAAAGAFADQgEAIgJAKIgLAPgAC2gCIgfgBIABAAIAIAAQATAAASgDIAVAEIACAAIABgBIAMABIAEAAIgBAAg");
	this.shape_5.setTransform(219.9,-9.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("rgba(107,211,210,0.2)").s().p("Aj/BIQgMgHgJgJQgIgIAAgEQAAgLAIgHQAIgHAOAAQAGAAAQAEIAWAEQAMAAgBghIgDgiQAAgTAXgPQAXgPAhgCQAkgCAjAOQAjAOAYAeIg6gYIgVgHIgIgEQgZgRgIAAQgCAAgWAPQgYARgHAGQgEADgIAPQgJARAAAFIABACQACACABADIAAAFQAAAJgBADQgCAEgGAJIgNAQQgGAGgGAAQgFAAgIgDIgGgCIASARQACACAIABIAJAEIAagcIAFgHIAGgHIALgOIgCgDIgDgDIgFAAIgBgDQAAgGAFgGIAFgGIAGgKQAJgSAMgLIAHgHQAFgFAEgBQADAAADACQADAEAEAAIALAGIAOACIAHADIAEADIADADIARANIAPANIAEADIAGACIASADIAHACIAbARQAFACAFAEQAHAFAMAHIATAKIAEABIALgGIAbgPIAbgTIADgEQACgCAOAAIADAAIAEABIAKAAIAmADIAWgHIgCgCQgHgCgPgCIgUgBIgUAEIgTAAIgDgBIgPgBIgnAaIgDABQgEADgDgCIgCgBIgDABIgCACIgDACQgPgHgEgEIgagXQgHgHgJgEQAhABALAHIAGAGQACADADAAQAJAAAJgGIAPgLQAMgIAIgEQAMgFAQAAIBNAGQAaAAAMAQQAEAEACAHIABAHQAAAKgEAIQgHAMgPAAIgRAAIgRAAQgqAHgHgHIgCgCIgBgDQgCgDgGAAQgKAAgGAFIgJALQgFAHgJAEQgNAGgWAAQgdAAgMgHIgGgFIgEgDQgmgDgTgGQgRgFgIgKIgLgQQgGgLgMgIIg2AAQgEAGgGAUIgKAnQgHAYgIAMQgMAPgQAAQgjAAgggUg");
	this.shape_6.setTransform(219.5,-8.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("rgba(107,211,210,0.498)").s().p("AjXBLQgIgCgCgCIgSgQIAGACIAGAEQAPAKAGABIADAAIAZggQAJgKADgIQgEgEAAgFQAAgFAOgVIAagiIAOgMQAFgEAHADIADACQAIACAhAPQAbAMAlAUIAKAHQAIgBALAIIA6AkQAFgBAXgQQAWgQAIgIIABgCIgBAAIgEACIgWAPQgRALgFAAIgBAAIgLAHQgJAAgggXIgYgQQgMgIgDgCIg6gZQgtgUgJgHIgPAAQgTANgNARQgKANgLASIgFAHIgCAJIgIAWQgOAfgNABIgCAAQgIAAgKgGQAJADAEAAQAGAAAGgGIAOgRQAFgIACgEQABgEABgIIAAgHQgBgDgCgBIgCgCQAAgFAJgQQAJgPADgDQAHgHAYgQQAXgQACAAQAHAAAZASIAIAEIAWAGIBNAgIABAAQAIAEAHAGIAaAXQAFAEAOAHIADgBIADgCIACgBIACABQADABAEgCIAEgCIAZgRIANgIIAPAAIAEABIASAAIAUgDIAUABQAPABAHADIACACIgVAFIgDAAIgkgDIgKAAIgDAAIgEAAQgOAAgCACIgDADIgbAVIgbAPIgLAGIgEgBIgTgLQgMgGgGgFQgGgEgFgCIgbgSIgFgCIgUgCIgFgDIgFgDIgPgMIgRgNIgDgEIgEgDIgHgCIgNgDIgMgFQgEgBgDgDQgCgDgEAAQgEACgFAEIgHAHQgMAMgJARIgGAKIgFAFQgEAGgBAIIABACIAFAAIADADIACADIgLAOIgGAIIgfAjgACWgBIAfABIA2AAIAAgBIgPgBIgRgDIgGABIgBAAQgSACgTAAIgIAAg");
	this.shape_7.setTransform(220,-9.7);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AkpA6IgMgKIABgBIACgBIANAIQAWALAQAAIAEAAIAVgJQgDAEgFAEQgKAHgOAAQgQAAgTgNgAB8A0IgPgRIgCgCIgBgBIgOgSIgEgJQgJgNAAgCQAAgCAHAHIAAABIAGAFIATAdIAAAAQAMAQALALIAAAAQgGgCgEgDgAjcAuIAJgNIABADIgBABIAAABIgGAHIgBABIgJAHgADtAiIAIgHIAAAAIASgUIABAAQAPgHAKgCQAMgCAJACIgFACQgdAGgHAGIgTAUQgQAPgOACIARgPgAjHAPIAfghIAEgDIAAACIgBACIgPARIgSAPgABGgiQgFgEgHgCIgPgIIABAAIAHABIABAAIACABIAIADQAIAEAEAHgAiVgtIAFgJIAFgMQACgFALACIAEACIAEABIABAAIACAAIAGACQAHADADAAIgCABIgFAAIgBgBIgagEQgCAAgGAJIgIALgAgBgxIgvgGIgNgEIAAgBIABgBIACAAQAPAAAMACIADAAIAXAEQAKABAAABIgBADIgEABg");
	this.shape_8.setTransform(226,-10.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#A2F2FC").s().p("AkMBHIgSAAIgLgFIgMgJIgEgEIAAgDIAAgBIAMAKQATANAQgBQAOABAKgIQAFgDADgEIADgEIAJgGIABgBQgSAVgIAHgAB9A6IgFgGQAEADAGADIAMALIAAACQgGgDgLgKgADOA2IAKgEQAOgCAQgPIATgUQAHgGAdgHIAFgBQAEABAEABIAAAAQgHgBgGACQgIACgGACIgKAGIgZASQgVARgCACQgIAGgHACgAjWAlIgBgDIABgCIAJgPIACgBIABAAIASgPIgfAlgABJgQQAAgLgHgHIAEADIAGAOQACAGAEAEIAGAIIgGgEIAAgBQgHgIAAADQAAACAJANIAEAJQgPgTAAgMgAiogTIAAgBIgEADIACgDIAYgqQAGgJACgCQADADAFACQgLgDgCAGIgFAMIgFAIIAAABIAIgMQAGgIACAAIAaAEIgXgCIgjAtgAAegtIgjgDIABAAIAEgBIABgDQAAgBgKgCIgUgDIAQABQAKAFAQAAIAbAFIgBAAIAPAIQgIgDgQgDgAhpg7IACgCQgDAAgHgDIgGgBIAEAAQANAEAPAAIAXAAIgBACIAAABIANAEg");
	this.shape_9.setTransform(226.4,-10.2);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("rgba(107,211,210,0.2)").s().p("AlSBJQgSgSgLgLQgLgNAAgDQABgHAFgHQAHgIALAAQAJAAALAEIAUAMIAXANIADABIgMgDQgHgBAAgDIgHAAIgCgBIgFAEIgGAEIAUAXQAFAGAEAAIArgDIAHADIADAAIBFhFQAJgKAGgFIACgCIAAgHQAAgDADgHIAIgRQAJgQALACIADAAIAHADIASgDIALAAIA9APIATAAQAHAAAFACIALADIAUABQAAAAAAAAQABAAAAAAQAAABABAAQAAAAAAABIAKAAIAJAAIAHAbIgBAFQAAAIAFAIIANAUIAjAeIALAEQAMAGAFgBIAFAAIgLgLIgJgLIgIgLQgHgIgBgDIAAgOQgEgFgIgIIgQgNQgEgFgDgIIgFgOIACACIgFgHIgKgHQgHgEgIgBIgfgDIgggJQgEgBgEgCIgGgDIgHABIgPAAIgGgBQgGgCgKAAIgJADIgMACIgGgBIgDgBIgTAAIgVgOIgNAMIABAGQAAAKgEAHIgmA1IgBAAIgDADIAAAAIgEAEQgOAJgEAKQgCAEgBAFQgBAFgDADIgGAFIgEAEQgIACgPAAQAKgIAIgMQAHgLAJgPIARgeIARgdQAWgfAbgMQAjgPAyAKIArAOQAcAJAcAAQAuABAQAPQAGAGACAHIABALQAAAlAeAcIASASIACgCIAbgSQArgdAlgTQA0gdAdgCQAlgEgBAkQAAAKgCAHQgDAFgIAGQgIAEgPAFIgoAOQgPAFgpAVIglAVQgjAAgNgEIgBAAQgCAEgGAEQgLAIgQAAQgpAAgWgpQgJgQgFgTQgDgRgBgMQgMgBhJgRQhDgPgGAAQgBAAgdAlIgmAyIgLAUIgPAcQgVAlgTAAQgqAAgwgpgAElgVIgkAHQgIACAAACIgBAEQAAAEgCACQgKALgKAIQgNAKgVAKQABADAHADQAGACAEAAQAGAAAigeIAMgGIAOgGIATgOIAXAAIAAAAQgGgMgSAAIgBAAg");
	this.shape_10.setTransform(227,-8.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("rgba(107,211,210,0.498)").s().p("AjzBSIgHgDIgrADQgEAAgFgHIgSgUIgCgCIAGgEIAFgEIACABIAHAAQABACAFACIANADIACABQABAAAAABQABAAABAAQAAAAABABQAAAAABAAIACACIAEACIAHAAQAPAAAIgCIAEgDIAGgGQADgCABgFQABgGACgDQAEgKANgLIAFgDIAAAAIADgDIABgBIAmgzQAEgIAAgJIgBgGIANgMIAVANIATABIADABIAHAAIALgCIAJgCQAKAAAGABIAGACIAPAAIAHgBIAGACQAEADAEABIAgAJIAfADQAIABAHAEIAKAHIAFAGIgCgBIAFAOQADAIAEAFIAQAMQAIAIAEAGIAAANQABAEAHAIIAIALIAJALIALALIgFAAQgFAAgMgFIgLgEIgjgfIgNgTQgFgJAAgIIABgFIgHgaIgJAAIgKgBQAAAAAAAAQgBgBAAAAQAAAAgBAAQAAgBAAAAIgUAAIgLgDQgGgCgGAAIgTAAIg8gPIgMAAIgSACIgHgCIgDAAQgKgCgKAPIgIARQgDAIAAADIAAAGIgCADQgGAEgJAJIhFBHgAk5AyIgBABIAAABIAAADIAFAEIALAJIALAGIASAAIAWACQAHgGASgWIAGgHIAAgBIBRhjIAXABIABABIAFAAICHAPQAQACAIADQAHACAFAEQAHAGAAALQAAAMAPATIAPASIABABIABACIAUAWQAMALAFACIAAgBIgMgMIAAAAQgLgLgMgQIAAAAIgZgmQgDgEgCgGIgHgOQgEgHgHgEIgIgDIgDgBIAAAAIgjgFQgQgBgJgFIgXgBQgMgCgPAAIgCAAIgXgBQgPAAgNgEIgGAAIAAAAIgFgBIgDgCQgFgCgEgDQgCACgGAKIgYAqIghAjIgCACIgJAOIgBACIgJANIgKAKIgUAJIgFAAQgQAAgWgLIgMgIgADNA+QgHgDgBgDQAVgKANgKQAKgIAKgMQABgCAAgEIACgFQAAgBAHgCIAkgGQATgBAHAMIAAAAIgXAAIgTAOIgOAHIgMAGQgiAegGAAQgEAAgGgCgAEcAAQgKACgPAIIgBAAIgSAUIAAAAIgIAHIgRAPIgKAFIAIACQAIgCAHgGQACgBAVgSIAZgSIAKgFQAHgDAHgCQAHgBAGABIAAgBQgEgCgEgBIgKAAIgLAAg");
	this.shape_11.setTransform(226.5,-10.5);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("rgba(107,211,210,0.498)").s().p("AGRCZIgEgJIgFgGQgDgDgLAAQgFAAgOAEIgLAEIgQAAIgJgRQgGgLgFgGQgGgIgHgHIgLgGIgFgFQgFgEgOACIgUAAIgEAAIgEABIgKAAQgbAAgSAMQgEADgJAIIgMAKIgcAGQgCgBgEgBIgGgBIgGgDQgEgDgDAAQgGAAgHgFQgGgEgHgBQgGgHgBgOIgEgVIgLgVIgTgUQgGgJgGgLIgMggQgBgFgIgFQgFgIgGgFIgHgFQgCgDgEgDQgGgGgFgCQgJgFgHgFIgLgJQgIgDgIgHIgJgIQgGgEgNgEQgNgEgMACIgSAAQgSAGgNAMQgLAJgIAMQgEAFgCAGIgDAKIgBAFQAAADgEACIgGAFQgDAEAAACQAAAEgDAGQgCAHAAADIABAEIAAACQAAADgLALIhDBDIAAAAIggASQgQAJgNAJIgmAcQgHAHAAAEIgSgBQgbgEgOgFQgIgDgJgHIgEgDIAdgCIAeACQAQAAAWgQQAJgGAJgKIAMgIIALgJIAIgLQAFgGAAgCIAAAAIgBAAIAEgEIAGgGQADgBADgFIAFgHIAvgiIAMgKQAMgNAAgTIgBgDIAAgEQAAgDANgLIALgMIAJgGQAFgEABgDIADgGIAEgHQAHgPAUgLQAJgFAPgGQATgHAFAAQABAAAKAHQALAIAFABIABAAIALACIASAEQAEABAFAFIAUAUQAJAGAQAHIAHAEIAEADQAGAEALACQAGAAAGAFQAGAEgBADIABAOQABAIADAGQADANAIAPQACAEAFAEIAIAFIAKAOQACADAFAMIAGANQAIAKARARIAAABQACAGAGAGQAGAHADAAQAEAAATgLIAVgMIADABIAdAAQAgAAAMgFQAGgCACgCIAFgEQADgDAOgFIARgGIgCAKIABAFQABADAEAAQAFAAAEADIANATQADADADABQAMADADAEIADAEIADAFIAPANQAFAEAKAAIAegCIACAEQADAEAEgBIABABIABAAQADAAAJgIIAIgIQAEgFAKgGQAKgFAAgCIgDgFQgDgEgDAAIgIABIgKAAIAAgDIgBgEIgGgHIAkgmIAAABIgCAWIAAALQAAACAFACIAJAEQADAEAAAJIAAAFIgBAAIACAFQADACAFABIgBAAQgEAEgOAKIgsAhQgCACgHAEgAGPCFIAAACIADADQAEAFAHAAIAKgFIADgDQARgPAUgOIALgHIABgBIgBgCIgEAAIgXAPIgBAAIAAABIgBAAIAAAAIAAAAQgbASgJAFIgCgDQgDgEgHgEIgKABQgRAAgWgLIgPgIIgEgCIgDgBQgEgCgDgFQgHgJgDgGIAAAAIAAgBQgPgSgYAAIgIAAIgHACIgfAIQgWAGgbAAIgIAAIgOAKIgLAIIgBAAIAAABIAAAAQgGAEgEAAQgHAAgIgHIgEgDIAAAAQgFgFgIgKIAAgBIAAgBIgBAAQgHgKgFgJIgGgLIgYgfQgSgWgEgHIgQggQgKgSgMgKIAAgBIgYgTIgBAAIgBgBIgKgHIgBAAIgLgHQgfgSgwgKQgiAGgUAOIgBABIgWAcIgBABIgNAgIAAAAIgEAIQgMAWgRANIhKBGIgBAAIAAABIgBABIgYAUIgRASIgIAHQgKAIgKAFQgQAJgNABIgRAAIgWgGIgFgCIAIAEQAQAHAkAAQA6ggAlghIAagYIAAAAIAmgoIACgBQASgWALgQIABgDIAAAAIAKgTIABAAIAAgCIABAAIAAgCIABAAIAAgBIACgCIAFgNQAEgKAHgMQAJgNAIgHQANgKAOAAQASAAAVAHQAaAIAXANQAdARAVAWIAFAGQAPARAMAYIAFALQAGANARARIANAOQAHAHAEAIIAGANQAGANAFAIQAEAHAGAHQANAOAQAAQAJAAAPgMIAQgNQAFgEALgCQASgEAxgGIAQgBIABAAQAKAAAKAFQAHAEAHAHIAAABIAKANQAFAHAEACIAPAKQAKAFAGABIAJADQATAEAIAAIAGgCgAHBA9IgHAIIgCAHIAMAAIAJADQAJADAAAGIgDAFIADgBIABgCIABgEQAAgEgFgEQgCgCgMgGIABgBQAEgJAAgLIABgEIgCAAg");
	this.shape_12.setTransform(242,-14.7);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("rgba(107,211,210,0.2)").s().p("AFLC7QgRgIgQgPIgUgXQgJgKgIAAQgKAAgJAKIgRAXQgLAPgLAIQgPAKgUAAQgrAAhsh2Qgigkgwg5Ig9hJQgSAPgdAvIgBABIgCADQgjA7gWAfQglA6ghAcQgpAlgqAAQggAAgggMQgbgMgVgSQgSgOgNgTQgLgRAAgJQAAgKAJgLQAJgMARAAQASAAAdASIAUANIAKAGQAWAAASgKQAPgIAMgRQAKgOALgYIAUgsQANgcALgVQARgdARgSQAtgzBJgXQAjgLAiAUQAKAGAMAMIAOAPQACAEANAKIAaARQAlAZAGANQAHATAQAVQALARAVAYIAiAlQAPARAKAQQAMgJAKgMIAQgRQAIgHAMgDQAQgEAaAAQAeAAAUAHQARAGAMALIAGAGQAJADAFAEQANAJAHAQIAFADIAKgWQAJgVAJgLQAbgpAmAAQAkAAANAbQAGAKABAKIABAIQAAAKgKAXIgCAEIAFADQAJAGACACQADAFAAAFQAAAHgMALQgLALgUAQQgTANgVAKIgGADIgGAEQgfAVghAAQgcAAgWgKgAGSCVIAEAFIAFAJIAPAAQAGgDACgDIAsghQAOgJAEgFIABAAQgFAAgDgDIgCgEIABgBIAAgEQABgKgEgDIgJgEQgFgCAAgDIAAgLIADgWIAAAAIgkAmIAFAHIABAEIAAADIALAAIAHgBQAEAAACAEIADAFQABABgKAGQgKAGgEAEIgIAJQgKAIgCAAIgBgBIgBgBQgFACgCgEIgDgFIgeACQgKAAgFgEIgOgMIgEgFIgDgEQgCgFgNgDQgDgBgCgDIgOgSQgEgDgFAAQgEAAAAgEIgBgEIACgKIgRAFQgOAGgDACIgGAEIgHAEQgNAFgfABIgeAAIgDgCIgUAMQgUAMgEAAQgDAAgGgHQgGgHgCgFIAAgBQgRgRgHgKIgGgOQgFgLgDgDIgJgOIgJgHQgEgEgCgDQgIgOgEgNQgDgGAAgIIgBgOQAAgEgGgEQgFgEgGgBQgMgCgGgDIgFgEIgGgEQgQgGgIgGIgVgVQgEgEgEgCIgTgEIgLgCIgBAAQgFgBgKgHQgKgHgCAAQgFAAgSAHQgPAGgJAFQgVALgGAPIgFAGIgDAHQgBADgEADIgJAHIgMALQgMAMAAADIAAADIABADQgBATgMAOIgMAJIguAjIgGAGQgDAFgCACIgHAGIgDADIABAAIAAABQgBABgFAHIgIAKIgLAKIgLAIQgJAKgJAGQgWAQgRAAIgegDIgcADIADACQAJAHAIAEQAOAEAcAFIASABQAAgFAHgGIAmgdQAMgIARgJIAggTIAAABIBDhFQALgJgBgDIAAgDIgBgDQAAgDADgHQADgHAAgEQAAgCACgDIAHgFQADgDAAgCIABgGIAEgKQABgGAEgEQAIgNALgJQANgLATgHIASAAQAMgBANADQAMAEAHAFIAJAHQAIAHAHADIAMAJQAHAGAJAEQAFADAGAFQADADACAEIAGAFQAHAFAGAHQAHAFABAFIANAfQAFAMAGAJIATAVIALAVIAFAVQABANAGAHQAGACAGAEQAIAEAGABQADAAAEACIAFADIAHACQADAAACACIAdgHIAMgKQAIgIAEgCQATgMAagBIAKAAIAFAAIADgBIAUAAQAOgCAGAFIAEAEIALAHQAIAGAGAIQAEAHAGAKIAJASIARgBIAKgEQAPgEAEAAQALAAAEAEg");
	this.shape_13.setTransform(241.1,-15.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AFjCBIgCgEIgBgCIgCgBIgGABIACgCQABgBAAAAQAAAAABAAQAAgBABAAQAAAAABABIAEABIAGABIACADQAJgFAbgRIABAAIAAgBIAAAAIABAAIAAAAIATgOIAAAAQAGgBACACIgLAHQgUAOgQAPIgEADIgKAFQgGAAgFgEgAE0B0QgGgBgKgFIgPgJQgEgDgFgHIgKgNIAAgBQgHgHgHgEIgDgHIgPACIgDAAIgQABIAAgBQAAgEAOgFIACAAQAYABAPARIABABIAAAAQACAGAIAJQADAFAEACIACABIAEACIAGAJQADAEAIAEIANAGIABAAgAA4BZIgBgFQgDgLgEgJQgIgNgKgNIgUgdIAAgBIAAgCIAEADIATAZIAGALQAFAKAHAJIABABIAAABIAAAAQAIALAFAEIAAAAIABABIADADQAIAGAIAAQADAAAGgEIABAAIAAgBIAAAAIAIgGIABAAIAHgEIAcgEIABAAQgLADgFADIgQANQgPAMgIAAQgQAAgNgOgAmqBdIAHgHIARgSIAYgUIABAAIABgBIAAAAIAjghQAZgSAPgGIABAAIgmAoIAAABIgRAMQgkAcgiAWIgBABgAGJBCIACgHIAHgIIAIgQIACAAIgBAIIgEAQIAAABIgCAHgAgzhGIgHgMQgMgQgMgMIgFgDIAAAAIALAGIABACIAAAAIAYATIABAAIAOAbIAOAeIgBAAQgMgYgQgRgAkOg1IgBgDIACgKIAAgBIAOggIAAgBIAWgcIABAAQAHgFAFABQgJAGgIANQgIAMgEAKIgFAOIgBABIgBABIAAAAIgBACIAAAAIgBACIAAAAIgKATIAAABg");
	this.shape_14.setTransform(246.7,-13.7);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#A2F2FC").s().p("AFsCEIgCAAIgMgGQgIgEgDgEIgGgIIAPAHQAWALAQAAIAKgBQAIAFADAEIgGgCIgFgBQAAAAgBAAQAAAAgBAAQAAAAAAAAQgBAAAAABIgCACIgCAAQgIAAgRgEgAnSB+IgIgFIAGACIAWAGIARAAQANAAAQgKQAJgEALgJIABABIAAgBQAigWAkgcIARgMIgaAYQgmAgg6AhQgjAAgRgHgAHSBlIADgCIAFABIABACIgBAAQgCgCgGABgABcBYQgGgHgFgOIgGgMQgFgJgGgHIgNgNQgRgSgGgNIgFgKIAAgBIgNgeIgOgbQAMALAKARIAQAgQAEAIASAWIAEAFIgDgCIgBABIAAABIAVAdQAJANAIANQAEAJADALIABAFQgGgGgEgIgAHVBbQAAgFgIgEIgKgCIACgGQALAFADADQAFAEAAAEIgBAEIgBABIgDABgACZBcIAOgKIAIAAQAbgBAVgFIAmgKIAHAAQgOAEAAAFIAAABQgxAFgSAFIgCgBIgbAEIgGADgAERBKIAOgCIAEAHQgJgEgJgBgAj/gKQARgNAMgXIADgHIgCALIACACIABACIgCADQgKAQgTAUIgBACIgBgBQgOAGgZATgAgJg+QgWgXgcgQQgXgNgagJQgWgGgRAAQgPAAgMAKQgFAAgHAEIABgBQAUgOAigFQAvAKAgASIALAHIAFAEQANALAMARIAHALg");
	this.shape_15.setTransform(242,-15.1);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("rgba(107,211,210,0.498)").s().p("AHMDOIAAgGQAAgJAEgNIAEgLIgBgBIgBgCQgHADgGAIIgGALIgMAKIgQANIgjAAIAAgSIAGgLQAEgGAAgEQAAgCgFgHIgFgJIgBgDQgBgEgCgCQgGgGgVAAQgWAAgOAEQgKAEgIAGQgIAJgDABQgGAGgKAAQgMABgSADIgJgWQgJgQgSgKQgBgBgHgBIgHgBQAAgSgGgSQgHgSgNgPQgFgHgBgLIgBgIIgBgJIgFgQQgDgKAAgHQAAgMgKgWIgHgRQgDgLgBgFQgBgNgDgFQgFgKgKgGQgagFgqgFIgWgCQgEgJgDgCIgMgQQgGgFgGABIgJAGIgTALQgKAHgFAHIgXAcIgzA2IgLAOQgEAGgCAHQgBAHAAALIABAVIgDAEIgGAIQgBAEgDABQgDAEgFACIguATIgeAVQgTAOAAAKIABADIACAFIAAABIg0AuQgmAggPAAQgVAAgKgHIgHgFIgFgEIgqgSQgMgFgLgNIgQgXIACgCQAAgEgFgLIgEgIIABgCIAQgBQALAAARAQQAMALAHAHIAfAVQAUAMAGABQAMgBAGgCQAHgCAHgGIAOgOIA5hGQANgPALgJIAYgMQAUgHADgEQAIgMAGgMIALgYQAGgNAHgNQAJgPAKgKQAJgJAHgRIAFgMQAEgIAEgFIAVgaQAMgPAMgIIBCgaIABACQACAJADAEQARADAFAKIAEAIQACAFAEADQAMABAhAIIA7AMQAOACAEAEIAFAJIAHAIQAFAFAAADIgIgCQAAAAgBAAQAAAAgBAAQAAABgBAAQAAAAAAABIAAACQAAAMAGAgQAGAfADAHIAWAyIAIAPIgBAGIABAKIADALQADAGAEAHIAJAKQADADAQAXQAMASAEAAQACAAARgIIAQgHIATAGQAKAAAOgGIAJgDIAJgDQAJAIAJAAQACAAAJgEQAKgGACAAQAEAAADAMIAEAOIAEAMIACANIABABIACAAQAKAAAQgXQAKgPAFgOIAAgBIgCgBIgIACQgIADgIABIgEgDIgCgCQgEgDgDABQgFgBgDgBIgHgFQgEgDAAgCIAKgPQADgDAAgFIACgHIAIgOIANgQIAHAKQAHAJAAACIgEAFQgEADAAADIgBANIABACIACAGQADAGAFAAIAFgCIAPAAIACAEQADADAFAAQgBAAAAABQgBAAAAABQAAAAgBABQAAAAAAAAIAAAEQAAAAAAAAQAAABAAAAQABAAAAABQABAAAAABIAFACQAIAHAAAOIgEApQgBAKgMARIgJAKIgEAFQgFAAgBgFgAGACEIAJALIABACIAHAKIgDASIAAAMQAEADAHAAQAHAAAJgFIApgxIAEgGIADgQIAAgGIgCABQgDAQgQARIgDADQgMANgNAHIgPAHIgCABIgGggIgDgKIAAAAQgDgIgEgDIgCgBIgQAHQgEAAgLgDQgVgBgMACQgKACgJACIgSAGIgdAFIgEABIAAAAIgFAAIgkgoIgBgBQgLgNgGgNIAAgBIAAgBIgBAAIAAgBIAAAAIAAgBIgBAAIAAgBIAAgBIAAgCIgBAAIAAgCIAAAAIAAAAIgRhEIAAgBIgEgWQgBgCgDgOIgGgaIgHgYIgFgRQAAgEAEAAIgBgBQgIgNgagFIgdgDIgVgCIgogQIAAAAIgBgBIgBAAIgKgGQgQgIAAgFIAAgLQgMgFgZARQgVAMgeAeQgTATgSAYIgMAQQgOATgIAPQgJAQgEAKIgHAVIgBADQgFALgLAHIgkAWQgVAOgLAIIggAgIgCAEQgJARgPAPIAAABIAAAAIgBAAIAAAAIgLAKIgBAAQgGAGgJAEIgOAHIgKACIgBAAQggAAgngpIgRgUQgKgJgEgBIgEABIgCACIAAAAIAAAEQAAAGALALQANAOAOALQATAOASAIQAVAKARAAIAGgBIAKgFQAPgKAWgVIAfgdQAEgQASgSQAVgUAegPIABAAQAOgIALgEIABAAIAAAAIADgBIAHgIQAIgLAAgLQAAgQAQgbIAAAAQAOgYAZgcQAYgcAcgWQAVgSAWgMIAEgDQAHgEADAAIABAEIABADIATARIACACQAKAIAAADIAAABIASAFQAKADAVADIAcADIAAAAIAQABIABAAIABAAIAFAFQAOANAMAnQALAnAGArIAEAcIAIARQANAiADAMIAAAEQAIAHANADQAEACADAEIABABIAAAAIAKASQACAEAEADIAYAAIAbgJQAagJAPAAQATAAAKAEIAOgCgAHfB5IgBAEIACAJIABAFIABAFQAAAEgCAEIAAAAIAAABIgBAEIgIAcIAAABIAEAAQABgKADgKIAAAAIABgEIAAgBIABAAIABgEIAEgQIgHgVgAGyAtIAAAAIgFATIAAABIAAAAIgEAMQgBADgEAGIAAAAIgFAGIACABIAGABQAKADAGAFIAGABIAGgCIACgBIAAAAIAIgDIAFgBIAFABIADABIgEgEIgEAAIgSAAIgGABQAAAAgBgBQgBAAAAAAQAAgBgBAAQAAgBgBAAIgBgCIgBgBIgBgEIgFAAQACgKABgKIADgXIABgCgAHUAhIgBgGQgBgIgIAAIgLgBQAAAAAAAAQgBAAAAgBQAAAAAAgBQAAgBAAgBQAAgEAMgEIAJgDIADgDIAFACIABAAIADAFIAAAQIgDAMIgEABQgBAAAAAAQgBAAAAgBQgBAAAAgBQgBAAAAgBgAHPALQAHAGACAEIABAGIAAABIADgBIgCgJQgEgQgIAEQgFACgHAJIAEgBIADgCIAFgDIABAAg");
	this.shape_16.setTransform(240.8,-18.6);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("rgba(107,211,210,0.2)").s().p("AmvDRQgegWgYgpQgTgfgLgoQgIgbgDgVIAEgHQACgDAJAAQAFAAAOAQIAhAkQAzA0AiAAQATAAAYgVQASgPAagiIArg4QAaghALgKQAOgNALgWQAGgKAMghQAMgeAIgPQAPgZARgQQAQgPAagGQAYgFAdADQAdAFAXALQAcAOASASQAMAMAZAFIAtAGQAbAEAOAKQATAOAFAbQACAKADAlIAFA4QADAdAEAQQAHATAJAAIA7gCQAvgCANACIAFgPQAGgQAFgJQAUgiAnAAQAuAAASAzQAIAcAAAcIAAAcQAAAdgEASQgMBAgvAAQgSAAgUgIIgVgJIAZAAIAQgNIAMgKIAGgLQAGgIAGgEIACACIAAABIgDAMQgEANAAAJIAAAGQABAEAFAAIAEgEIAIgKQANgRABgKIADgqQABgOgIgGIgFgDQgBAAAAgBQgBAAAAAAQAAgBAAAAQAAAAAAgBIAAgDQAAAAAAgBQAAAAABgBQAAAAAAAAQABgBABAAQgFAAgDgDIgCgEIgPAAIgFACQgGAAgCgHIgCgFIgBgCIABgNQAAgDADgDIAEgFQAAgCgGgKIgHgKIgNAQIgIAPIgCAHQAAAFgDADIgKAPQAAACAEADIAHAFQADABAEAAQAEAAAEADIACACIAEACQAIAAAIgDIAIgCIACAAIAAACQgGAOgJAPQgQAWgKAAIgCAAIgBAAIgDgNIgDgNIgEgNQgDgMgEAAQgCAAgLAFQgIAFgCAAQgKAAgIgIIgJADIgJADQgOAGgLAAIgKgDIgIgDIgRAHQgQAHgDAAQgEAAgLgSQgQgWgEgDIgIgLQgEgGgDgGIgEgLIgBgKIABgGIgHgPIgWgyQgDgHgGgfQgHghAAgLIAAgDQABAAAAAAQAAgBABAAQAAAAABAAQAAAAABAAIAIACQAAgDgFgGIgHgIIgFgIQgEgEgOgCIg7gMQgigIgMgBQgDgDgDgGIgEgIQgEgJgRgDQgDgEgDgJIgBgCIhCAaQgLAIgMAPIgVAaQgEAFgEAHIgFANQgHAQgKAKQgJAKgJAOQgHANgGANIgMAZQgFALgIANQgDADgVAIIgXALQgLAKgNAPIg5BGIgOAOQgIAGgGACQgHACgLAAQgGAAgUgMIgggVQgGgIgNgLQgRgPgKAAIgQABIgBACIAEAIQAFAKAAAFIgCACIAQAWQAKAOAMAFIArASIAFAEIAGAFQALAHAVAAQAPAAAmggIAzguIAAgBIgCgFIAAgEQAAgJASgOIAegVIAvgUQAFgCADgDQACgBACgEIAGgJIADgDIgBgWQgBgKACgHQACgHAEgGIALgOIAyg2IAYgcQAEgIALgGIATgLIAJgGQAFgBAGAFIANAPQADADAEAJIAWACQApAEAbAGQAKAFAFALQADAEABANQAAAGAEALIAHARQAKAWAAAMQAAAHACAJIAGARIABAJIABAIQABALAFAGQANAQAHASQAGASgBARIAHABQAIACABABQASAJAJARIAJAWQARgEANgBQAKAAAFgFQADgBAJgJQAIgHAKgDQANgEAXAAQAVAAAFAGQADACABAEIABADIAFAJQAEAHABACQgBAEgDAGIgGALIAAANIgJgEQgdgMgagFQgogIgsAAQhPAAgag+QgIgTgFgfIgEgmQgFgbgUgdQgPgXgYgWQgUgSgWgMQgTgLgMAAQgVAAgWAWQgRARgWAjIglA7QgWAigOAMIgrArIg6A5QhJBJgGAAQguAAgmgcgAHdAEIgIADQgMAFAAAEQAAABAAAAQAAABAAABQAAAAAAABQABAAAAAAIALABQAIAAABAIIABAGQAAAAABABQAAABAAAAQABAAAAABQABAAABAAIADgBIAEgMIgBgQIgDgGIAAAAIgFgBIgEACg");
	this.shape_17.setTransform(239.7,-18.8);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FFFFFF").s().p("AGJC6IABgVIACgJIgGgKIgCgCIAAgBIgCgIIgDACIAAAAIgEgFIgCAAIgOADQgKgEgUAAQgPAAgZAIIgbAKIgYAAQgFgDgCgEIACAAIAHAAQAKAAAPgDIAXgEIALgGQAMgEAKAAQAKAAAGACIADACIADABIAEgCQAGgDAFAAQAFAAACABIADACIAIgGIAGgDQAEADADAHIABABIAHAcIACAOIABgBIAAADIAAABQAGgDAIgHIABgBQAOgHAMgNQAJgHAHgCIgoAwQgKAGgHAAQgGAAgFgDgAmQCoQgggMgNgHQgCgBgRgSQgRgTAAgFQAAgFAUARIALALQAoApAfAAIACAAIAJgCIAKAGIgKAFgAHZCiIACgFIAAgDIAAgBIABAAQACgEAAgEIgBgGIACgGIADAJIgEAQIgCAEIAAAAIAAABIgBADIAAABgAlRCXIALgKIAAAAIAAgBIABAAIAAAAQAPgPAIgRIADgFIAHgIIADgCIAPgPIgKAXIgKANIgQARQgSARgKADgADiB8IgBAAIAAgCQgDgDgFgCQgMgDgIgHIgBgEIABgJQAAgDgEgIIgJgUQgMgcgBgTIAAgWIARBEIAAAAIABAAIAAACIAAAAIAAABIABACIAAAAIAAABIAAABIABAAIAAABIAAAAIAAABIABABQAFANAMANIAAABQACADACACIADACIAWAYQgGgEgGgCgAGyBnQgFgGgLgDIgGgBIgBAAIAFgGIAAgBQAEgFAAgDIAEgMIAAAAIAAABIgBAGIgCAOIAMAEIABABQAAABABABQAAAAAAABQABAAABAAQAAAAABAAIACAAIAJAGIgBAAIgCAAIgFACgAjYArQAAgBANgJQAPgJACgFQABgCABgHIACgEIAHgUQADgKAJgQIAHgEIAAADQgQAaAAARQAAALgHALIgHAIIgDABIgBAAIgBAAQgLAEgOAIgAHUARIgKgKQAIgEAEAQgAiBhaQASgYAUgTQAegeAUgNQAZgQAOAFIgoAZIgwAlQgLAJgOAPIgLANQAAAAgBAAQAAAAAAAAQgBAAAAgBQAAAAgBgBgAB+h6IgBgBIgFgEIAAAAIgBAAIgQgCIgBAAIgKgDIgSAAQgVgCgKgDIgRgFIAAgBQAAgDgKgJIgDgIIAJAFIACABIAAAAIABAAIAFADIAAAAIAGAFQAKAFAGgBIANAFIAUACIAdADQAbAFAIANIgXgFg");
	this.shape_18.setTransform(241.2,-18.7);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#A2F2FC").s().p("AHXC7IAAAAIAHgZIABAGQgDAJgCAKgAmXCrQgTgJgSgNQgOgLgOgOQgLgLAAgHIAAgEIABAAIABgBIAFgBQADAAAKAKIARAUIgLgLQgTgRAAAFQgBAFASATQAQARADACQAMAHAhAMIAfAKIgFABQgSAAgUgJgAGYCvIAAgDIAQgHIgCABQgHAHgHADgAlsCoIAPgGQAJgFAGgFQAKgEASgQIAQgRIAJgMQgDAGgBAGIgfAdQgXAVgPAKIgKgHgAGDCKIABAAIACgDIACAJIAAABgAHECOQAQgSADgQIACgBIAAAGIgDARIgFAGQgGACgKAGgADmB8QAGACAHAFIAHAJIAEgBIABABIAEgBIAdgGIASgFQAJgDAKgCQAMgBAUAAQAMAEADgBIARgHIABACIgGADIgIAGIgDgCQgCgBgFgBQgFAAgGAEIgEACIgDgBIgDgCQgGgCgKgBQgJABgMAEIgLAFIgYAFQgOACgLAAIgHAAIgCABgAHgCIIgCgKIABgEIAAAAIAEALIgCAHgAC4A6IgHgRIgEgcQgGgsgLgmQgNgogOgNIABABIAXAFIABABQgFAAAAADIAGASIAHAXIAFAbQAEANABACIADAXIAAAWQABAUANAcIAJAUQADAIAAADIAAAJQgDgNgOghgAG8BgIADgBIATAAIAEABIAEAEIgDgCIgFAAIgFABIgIADgAkNBPIAGgGQALgJAVgNIAkgXQAKgGAGgMQgBAIgCACQgCAEgOAJQgOAKAAAAIAAACIAAAAQgfAPgVAVQgJAJgGAKgAGpBYIACgOIABgGIAGgVIAAgBIADgFIgBACIgDAYQgBAJgDAKIAFABIACADIABACIgMgEgAHYAdIgBgHQgBgEgIgFQgBgBgFADIgDACIgDABQAHgJAFgCIAKAKIACADIACAIIgDACgAiJhKIANgQQAAABAAABQAAAAABAAQAAABABAAQAAAAAAAAIALgNQAOgPALgJIAwglIAngaIAAAMQAAAEAQAJIADAIIgCgCIgUgRIgBgCIAAgFQgEAAgHAFIgDADQgWAMgVARQgdAXgXAbQgZAcgOAYIAAgCIgHAEQAIgQANgTgABOiDIASAAIALADgAAoiUIgFgFIgBgBIAWAKIgBAAQgGAAgJgEg");
	this.shape_19.setTransform(240.8,-18.7);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("rgba(107,211,210,0.498)").s().p("AGhCPQgEgDAAgHIAAgHQACgFADgCIAGgDIAFgCIAEgDQAFgDAEAAIAFABQABABAIAAQAAAAABAAQAAAAABAAQAAAAAAAAQAAgBAAAAIABgBQgFgRgDAAIgFABIgUAAQgIgBgHgGIgFgFIgGgDQgWgGgHAFQgCABgBADIAAAFQggABgHADIgGADIgdAEIgZgkQgGgIgEgJIgJgSQgEgEgIgEQgMgFgBgBQgGgFgUgGQgXgHgigGQgbgEgNgLIgpgiQgNgKgQgIQgTgLgUgFIgEAAIgCgCQgHgGgSgHIgdgKQgbgHgXAcQgHAKgWAVIgkAgQgRAPgMAOQgNANAAAHQAAADgOALQgPALgRALIgjAUQgQAJgFAAQgHAAgXgOIgSgNIAAgBQABgDADgCIAGAAIAKAEQAHADAKABIAHAAIAxghIABgCQARgNALgKIAhggQAPgOAJgKQAgggAAgKIgBgIQAAgDAKgJIALgKQAJgJAPgEQASgFASAAQANAAATAIIAWAKQALACAOAFIAZAIQARAFAWAPIBAAuQASAMARAHIAfAQQAGAFAWAGQAXAGAQAAIAEAAIABgBQABgBAEAAIAAAAIAUASQAAAAgBAAQAAAAgBABQAAAAgBAAQgBABAAAAIAAADIAGAJQAHAJAAADQAAAGADAHQAEAJAFAAIAHgCQAGAAACACIAEADIAdAAIARgQIAUAAQAEACASABIANANQAKAJACAAIAPgIIAKgHIgDAEQgLAPgIAAIgLAAQgEAAgBgCIgNgIIgCgCIgEgEIgCgCIgWgBIgBAAIgBAAIgGADIgCAAQgMAJgKAAIgEAAQgLAAgFgCIgBAAIgPAAIgGACQgGAAgKgLQgJgHgGgGIgIgMQgGgLAAgEIAAAAQAAgBAAAAQAAgBAAAAQABgBAAAAQAAAAABgBIgDgCQgFgGg2gSIgsgQIgRgHIhVgzQgwgbgtgRIgMgGQgugQgsAgIgBAAIgBABIgBAAIgEAEQgIANgcAgIgbAcIgNAOQgIAKgSAPIg7AvQgTAOgKAAQgIAAgUgJIgGgCQAaASAHADIACAAQAIAAASgLQARgKAUgRIAlggQASgRAJgMIAGgHQAcgjATgTQAlghAcgHIANgCIACAAIAGAAQAhAEBAAkQAcAPAaARIAhAWIAAABQAMAKA1ARIAnAMQARAGALAFQAFAEAHAKIANAWQAHANAIAIQAIAIAIABIADAAIAvgDQABAAAAAAQABgBAAAAQABAAAAgBQAAAAAAgBIADgDQAEgCAKgBIACAAIAEAAIARAAQAFAAAGACIAKAGQAFAEAGACIAGACIAAAAIAJABIAFgBIAEgDIAIgIIACgIIAAgBIABgEIAAAAIAIgGQAAAAABAAQAAABABAAQAAAAAAABQAAAAAAAAIAAACIgBALIABAFIgBAAIgBAAIAAACIADAGIADAIQgBADgEAIIgDALQAAAIgDAFQgCAJgKAAIgHgEQgGgFgDAAIgDAAIAAABIgBADIADAJIgFAGQgFAFgBAEQgLgHgBgDgAGqB5IgEABIACANIAAABIABAFIAEACIABgBIABgCIgEgGIgBgFQAAgBAAAAQAAgBAAAAQABgBAAAAQAAgBABAAQADgEAKAAQAEAAACABIADADIACABIABAAIAFADIADAAIAFgOIABgSIAAAAIAAgDQABgHADgFIgBAAQgDADgBADIgDARIgBAMQgBAGgDABIAAAAQgBAAgDgDIgCgBIgCgBIgCgBIAAAAIgJgCIAAAAgAnYAwIgFgBIAAgBIgCgEIAAgJQAAgCAMgHIAggSQAKgFATgBIAMAPQAIAKADAHIAAABIgngKQgFAAgQANIgDABIgJAHQgHAEgCAAgAm5ARQgXANgIADIgCABIABABIAHADQAEgBAPgJIAHgEQAVgMAEAAIAAAAIAAABIABAAIAQANIgBgGQgDgHgEgDIgBgCQgDgCgFgBIgDAAgAG3APQgGgFgMgEQgMgEgDgCQgGgFABgLIAAgUQgBgLgHgMIgKgWQgFgNgBgKQABgEACgGIAGgLQAFgEAGAAQAHAAAFACIAJACQAJACACADIAGALQAEAHAGADIARAJIACADIAAAPIghgXIgVgQQgDAAgCAMIgCAOQABAGABACIAEAEQAFAFACANIABAQQAAAJACAGQACAKAEAEQAGAGARAFQAGABAGAOQAEALAAAEQAAAAAAABQAAABgBAAQAAABAAAAQgBABAAAAIgEAFQgIgRgLgIgAGJh4IgDAFIAAABIgBABIgCARIAAADIAIARQADACADAHIAAABIAAABIAAABQABAFAAAIIAEAlIABADIAJALQACACAGACIAJADQAMAFACAEIAJAOIAAgCQgBgLgIgHQgFgEgKgDIgEgCIAAAAIgJgEIgCgBQgFgGgBgLIAAgDQAAgcgJgQIgGgJQgDgFAAgDQgBgHABgJIABgCIAAgEIABgFIACgCIABAAIABgBIAHgEIAEgBIAIAGIAUATQAGAGALAHIAEAEIABAAIAAgFIgEgHIgEAAIgFgCIAAAAQgHgEgIgJIgHgJIAAgBIgRgHIgHgBQgFAAgDADg");
	this.shape_20.setTransform(241.8,-13.1);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("rgba(107,211,210,0.2)").s().p("AGHCnQgFgFgJgNIgLgQQhJgGgugQQgigNgSgTQgFgGgHgLIgJgQQgEgIgHgHQgHgHgLgGIhxg5QhJgngNAAQgKAAgKAJQgIAHgKARIgTAhQgPAcgGAJQgbAwgeAYQgoAhg0AAQgjAAgUgPQgIgEgIgKIgWgiQgGgHgIgHQgRgNgbgBIADgCQAQgMAGAAIAmAJIAAAAQgDgIgHgJIgMgQQgUACgKAEIggATQgLAHAAABIAAAJIABAFIABAAIgcAUIgLAHIgcgFIgBgCIgBgBQgCgDAAgIQAAgSAXgQQATgNAggKQAYgIAjgGQAcgFAQAAQATAAAUAWIANAQQAGAHADAAQARAAANgGIgCABIgxAiIgHAAQgKgCgHgCIgKgEIgFAAQgDABgCADIAAACIASAMQAXAPAHAAQAFAAARgJIAjgVQARgKAOgMQAOgLAAgDQAAgHANgNQAMgNASgQIAjggQAWgUAIgKQAWgdAbAIIAdAKQATAHAFAFIADACIADABQAWAFASAKQAQAIAOAKIAoAjQANAKAcAFQAhAGAXAGQAUAGAHAFQABACALAEQAJAEADAFIAKARQAEAKAGAIIAYAjIAegDIAFgDQAIgDAfgCIABgEQABgEABgBQAHgFAWAGIAGAEIAGAEQAGAHAIAAIAUAAIAGgBQACAAAFARIAAACQAAAAAAAAQgBAAAAABQAAAAgBAAQgBAAAAAAQgHAAgBgBIgGgBQgEAAgFADIgEADIgFACIgGADQgDACgBAEIgBAIQAAAGAEAEQABACALAHQABgDAFgGIAFgGIgDgJIABgDIABAAIACAAQADAAAHAEIAHAFQAJAAADgKQACgEAAgIIAEgMQAEgIAAgDIgDgIIgDgGIAAgBIABgBIABAAIgBgFIACgKIgBgCQAAgBAAAAQAAAAAAgBQAAAAgBAAQAAAAgBgBIgIAGIgBABIgKAHIgOAIQgDAAgKgKIgMgNQgTAAgEgCIgUAAIgRAPIgdAAIgDgCQgDgCgGAAIgHACQgFAAgEgJQgDgIAAgFQAAgEgGgIIgHgJIAAgDQABgBAAAAQABgBAAAAQABAAABAAQAAAAABAAIgUgSIgBgBQgEAAgBABIgBABIgEAAQgQAAgXgGQgWgGgFgEIgggRQgQgGgSgNIhBgtQgWgPgRgFIgagIQgNgFgLgCIgWgKQgTgIgNAAQgSAAgSAFQgPAEgIAIIgMAKQgKAJAAAEIACAIQAAAJghAhQgIAJgQAPIgfAeQAHgJAMgXIASgmQANgYAMgOQAQgVATgNQAwgjBPgEQBBgEBsBSQAqAgAoAkIA8A3IApgCQgGgMgCgTQgCgMAAgRIAAgZQABgTAGgMQASgmBDAAQA0AAAGAxQABARgCARIgEARIAcBOQAbBPAAAHQAAAXgJAPQgSAcgvAAQgvAAgWgVgAGRh7IgHALQgCAGAAAEQAAAKAFAMIALAWQAGANABALIAAATQAAAMAFAEQADADAMAEQAMAEAHAFQAKAIAIARIAEgFQABgBAAAAQAAgBABAAQAAgBAAAAQAAgBAAgBQAAgDgEgLQgFgOgGgCQgSgEgGgHQgEgEgCgJQgCgGAAgKIgBgPQgBgOgGgEIgEgEQgBgCAAgGIABgPQADgMACAAIAWAQIAgAXIAAgOIgCgEIgRgJQgFgDgFgGIgGgLQgCgEgJgBIgJgDQgEgCgHAAQgHABgEAEg");
	this.shape_21.setTransform(240.4,-13.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FFFFFF").s().p("AGrCIIgBgIIAIgFQAFgCADgDIABgBIAAAAIAJACIAAABIACAAIAAABIACABIABABQADADABAAIABAAIABADIgBABIgBAAIgFgCIgBAAIgBgCIgDgCQgCgCgEAAQgLAAgDAEQAAABgBAAQAAABAAAAQAAABAAAAQgBABAAABIACAEIgDADgAG5BWIAAgBIgFgCIgBgDIABAAIAJABIABAAQAJAAAKgPIADgEIABgBIABABIgBAEIAAAAIgEADIgEAJQgFAHgIABgAE1BRIgBAAIACgBIAFgEQACgDAHgBIALgBIABABQAEACAMAAIADAAIAFAAIAEAAIAAAAIgBACQAAAAAAABQgBAAAAABQgBAAAAAAQgBABAAAAIgwADgAlKBJIAsgaQAJgGAIgKQAIgLAHgHIANgLQAegaAQgKIgHAIQgIAMgSAQIgmAhQgTAQgSALQgRALgIAAgAF7BGIgBgCIgBgBIACgDIAHgCIABAAIAAgBIAWABIACADIAFAEIgRgBIgKABIgCAAIgBAAIgFABgAnUAkIgBgBQAJgDAXgNIAWgMIAEAAQAFABADACIABABIgJADIAAAAIAAAAIAAAAQgEAAgVAMIgIAEQgRAHgFAAQAAAAgBAAQAAAAAAAAQgBAAAAgBQAAAAAAAAgAHDASQgCgEgNgFIgJgEQgGgCgCgCIgJgKIgBgDIgDglQAAgJgBgEIAAgBIgBgCIAAAAIABgDIABACQAIAPAAAcIAAAEIABABIAAACIgBADIAAAEQAAAEAFACIADABIAAABIAJAEIABAAIADABQALAEAFADQAIAHABAMIgBABgAELAVQglgSgSgDIgagIQg0gQgMgLIgBAAIAAgEQAAgDgDgDIgyghIA5AhIAFAIQAFAFAKAEQAJADALACIAsAPQA1ASAFAGIADADQAAAAgBABQAAAAAAAAQAAABAAAAQAAABAAAAgAHLhRIgIgJIAAAAIAEABIAEAAIAEAIIAAAEgAGHhlIABgLIABAAIAAgBIAEgGQAFgEAJACIARAIIAAAAIAFAGIgLgFIAAAAIgJgHIgDABIgBAAQgBAAgGAEIgBABIAAAAIgKANgAiJhqIgBgCIACgGIACgBIABgBIAAAAQAtggAtARQgFABgIAAIgHABIgFgBIgCAAIgaAEIgUALIgSALIgDgCg");
	this.shape_22.setTransform(241.5,-13.3);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#A2F2FC").s().p("AGrCJIAAgFIACgDIAEAGIgBACIgBABgAHMB8IABAAIABgBIgBgDQADgBAAgHIABgMIADgRQABgDADgCIABAAQgCAEgBAHIAAAAIgCAHIABACIAAABIgBAMIgFAOgAGpB2IADgBIANgGIgBABQgDADgFACIgHAFgAG/BQQAIgBAEgHIAFgJIADgDIgCAIIgIAIIgDAEIgGAAgAGxBOQgFgCgGgEIgKgGQgGgDgFAAIgQAAIADAAIAKgBIAQABIACABIANAJQABAAAAAAQAAABABAAQABAAAAAAQABAAABAAIABADIAEACgAEkBCQgHgHgIgNIgNgXQgGgKgFgDQgLgGgSgFIgNgEQARADAmARIABABIAAABQAAADAHALIAIAMQAFAGAJAIQALALAFAAIAGgCIAEAAQgGABgDADIgFAFQgJgBgHgIgAFrBEIgFAAIgEAAQAKgBAMgIIACgBIgCADIAAABIACACQgJAAgFACIgBACgAlsAtIAGADQATAIAJAAQAJAAAUgOIAygnIgEAEQgHAHgIALQgIAKgJAGIgsAaQgIgEgZgSgAnXAfIgBgCIACAAIAAABQABAAAAAAQAAABAAAAQABAAAAAAQAAAAABAAQAEAAASgHQgPAIgEABgAmcAIIAIgDIABAAQADADADAHIACAGgAjZgeIANgOIAbgcQAdgfAHgOIAEgDIgCAGIABACIADACIARgLIAVgLIAMgCQgcAHgkAiQgUASgcAjQgQAKgdAbQARgQAIgLgAGigJQgGgCAAgEIAAgEIABgDQACAJAEAEIABABgACQgiQgKgEgFgFIgGgIIAXAPIASAHQgMgCgIgDgABXhAQgagQgcgPQhAgkghgEIAHgBQAIAAAFgBIANAGQAsARAwAaIADACIAAAAIA1AjQADADAAADIAAAEIghgXgAGNhRIgHgQIgBgDIABgHIAAABIAIgKIgCAEIABAEIgBADQgCAIABAHQAAAEADAEIAFAIIAAADQgDgHgDgDgAHJhWQgLgIgGgGIgNgNIgHgFIABAAIALAFIADAEQAHAIAHAFIAIAJIAFAEIAAABg");
	this.shape_23.setTransform(241.6,-12.7);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("rgba(107,211,210,0.498)").s().p("AGpCpIgHgTQgBgFgDgDQgOgNgDgEIgBgGIAAgIQAAgLAHgMQACgEAJgHIACgDIACgDQABgBAEgBIARgBQACADAIADIAHACQACAAACgFIADgHIAFgEIADABQADAAAEgDIABgCIABAAIAKgCQAAAAAAAAQABAAAAAAQABAAAAABQAAAAABABIABACQAAADgDADIgGAFQgFADgBACQgDADAAACIgBAEIgCAGQgFAKgFAAQgDAAgFgDIgFgEIgTAAQgGABgDADIAAAFIAAALIADAKQADAGAHAHQAJAJAGAAIAngJQgCACAAADIgBAFQgBAGgKAFIgNAJQgMAHgVAAQgDAAgCgDgAGbBlQgCABgBAEIgBACIAAALQAAAEADAGIAAABQAEAHAFAHIAJAIQAMAJAQAAIAQgMIABAAIAJgIIgIABQgDADgEABIgJADIgBAAQgDACgCAAIgHgBQgGgBgEgEIgBAAIAAAAIgGgFIAAgBIgBAAIAAAAIAAAAQgGgGgDgFQgCgDgBgEIAAAAIgCgJIgBgEQAAgHAFgDIABAAIABgEIABgCIAIgHIABgBIAGgBIAEACIASAEQALAAACgHIABgFIAAgDQACgEAGgDIAHgDIACgDIgBgCIgDABIgBAAIAAABIgKADIgFALQgIALgDAAQgIAAgGgGIgCgDIgKgCIAAAAIgEABIgBAAQgNADgCAWgAGEBLIgWgGIgBgIIgFgKIgEgKQgCgHgDgCQgXgTgdgQQgNgIgPgLQgMgKgGgIIgMgTQgIgKgUgEIgGAAIgUAPQgEgEgEgCQgGgFgFAAQgOAAgPAKIglAbQgEACgDAAIgJABQgMACgIAFIhKA6IgDABIgSAFIgPAFQgLACgKAAQgiAAgXgOQgPgKgGgNQgHgMgHgGQgJgKgTgIQgDgBgNgLIgXgVQgjgfgWgIIgUARIgSARIgOATQgBADgQAEQgOADgFAEQgDADgaANQgVALgFAFIgHAJIgIAJQgHAHgRAEIgKACIgFAAQgCAAgNgLIgBgBQAMgMAegVIAegVQARgKAIgIIAfgUIAhgVQAHgEALgJIAQgNQAUgOAYAAQAEAAAHAJIAPAWQANAQAJAJQAOANAQAIIAHADIATANIAUATQAGAFAGAEQAJAEAIACIAAAAIAZAHIANAEIAOACQAPAAAugXQAqgVAXgPQAcgTAUgLIAtgYQgBAEAJAFIANAGIAFAAIAJgEQAHgEAJAAIAEACQAGABALAAQAKAAAPgCIAGAFIADAHIAFAMQAIASAHAHIAVAVQAIAIAGACQAGABAGgCIADgBIAJAAQAHACAHAIIAHAJIAEAGIACAEIADAMQADAJAHAAIAWgLQAUgMAEAAIAPAHQAGADABADIABADIABADIANAWIgBAAIgHAFIgJgEQgNgGgHgGIgIAAIgZAXQgOAOgDAAgADqhPIAXAUIAhAdQAkAfAbARIAQAKQAAAOACAGQAEAPAMAAQAEAAAGgEIAKgJIACgDQAGgGAGgDQANgHALADQAFABADADIACADIABADIALAEIgFgGIgBgCIAAAAIgEgFQgEgEgEgCIAAAAQgHgDgKAAQgMAAgPAMIgKAJIgBABQgFAFgEAAQgDAAgCgCQgCgBgCgEQgCgFAAgFIAAgJIABgBIgGgIIgBgBIgBgBIgBgCIgagUIgDAAIgGgBIgLgGIAAgBIgWgPQgJgFgDgEQgHgIgEgJIgFgGIAAgBIgIgLQgOgNgYAAQgSAAgFAEIgDADQgDABgGAAQgBAAgBAAQAAAAgBAAQAAgBgBAAQAAAAAAgBIgCgEQgDgGgOAAQgHAAgJADQgMAEgNAHIgHAGQgHAGgJAFIgCACIgpAWIgDACQgkAYgaAOIgBABQgeAQgSABIgCAAQgdAAhFgzIgLgJIg3gtIghgcIAAgBQgOgGgcANIgSAJIgVANIiQBjIAAAEIABABIALABQAHAAAcgTIA7gqQArggATgLIABgCIACgBQAGgGADgBIALgIQAHgFAKgBQAHABAIAGIAUAPIA4AzQAiAcAfASQAlAWAVAAQAIAAAIgCIAAAAIAPgEIAMgFIABAAIAAAAIABgBIAFgCIAkgZQAkgaAUgMQAbgPAfgNIAOgJQANgHADADQAHAGADAFIADAEIAAAAIAHgCIAEgDIAAAAIACgCQAJgFAIgBgAHYA5IAFgGIAAAAIABABIgDADIgDACgAGZhgIgEgGIgBgEIgBgJIACgSQAJgDAGgJIAKgQIAGgGQAFgDAEgBQAMgDACARQACAVANAVQAHAKAGAHIAAADQgBACgEAAQgNAAgMgQQgGgGgCgFIgDgHIABgEIABgGIgBgEQgBgEgDAAQgMAAgCAOQgBAHABAIIgGARQgDAJgEAHgAG0ihIgFAHIgBABIgMAOIgCACQgEAMAAAOIAAAHIAAABQACAEADACIADgCIgCgPIABgMQACgJABgCIAAAAIAEgFIAAgBIAFgGQAFgGAHgEIACAAIABAAIAGAKIABABIABAHIAAACIAAARIAFAKQAEAGALAGIAEgBIgRgSQgDgGAAgDIAAgGIgCgQQgBgIgGgFIgBgBQgGAAgGADg");
	this.shape_24.setTransform(239.3,-8.5);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("rgba(107,211,210,0.2)").s().p("AF+CoQgHgJgCgMQgCgGAAgKIABgRQAAgIAEgGQAFgHALgIQAJgHAZgOQgGgBgGACIAYgXIAJAAQAHAFANAHIAIAEIAIgGIAAABIgMgWIgBgDIgBgDQgCgEgFgCIgPgIQgEAAgVAMIgVAMQgIAAgCgJIgEgMIgCgFIAagHQAXgFAFADQgCABgEAAQArAAAVAWQAGAIAEAIQACAFAAAEQAAALgCAHQgBAEgFAIIgGAKQgDAGAAAGQABADADAEIAHALQALAQgBAOIgBANQgBAJgEAGQgNAQgkAAQg4AAgUgYgAGuBHQgFABAAACIgDADIgCACQgJAIgBADQgHANAAALIAAAIIABAGQACAEAOAMQADADACAFIAHATQACAEADAAQAUAAANgHIANgKQAJgEACgHIABgFQAAgDACgCIgnAJQgGAAgJgIQgHgIgEgGIgCgKIgBgKIABgFQADgDAFgCIATAAIAGAFQAFADADAAQAFAAAFgKIACgHIAAgDQAAgDADgDQACgCAEgDIAHgFQADgCgBgEIgBgCQAAAAAAgBQgBAAAAAAQAAgBgBAAQAAAAAAAAIgKACIgBAAIgCACQgDAEgDAAIgEgCIgEAFIgDAGQgCAGgCAAIgHgCQgIgDgDgEgAHjA2IgEAFIAAAAIADgCIACgCIgBgCgAFFAzQgQgTgPgZQgKgOgNgJQgIgGgSgHIgZgKQgQgHgIgIIgWAAQgFABgnAXIhMAuQhrBCgUAAIgRgJIgigWQg2gjgTgIQgYgJgWgdQgSgYgKgZQgSAQgdAYIhEAyQhWA/gQAAQgRAAgIgNIgCgJIgBgFQAAgGAkggQAfgaAygnQAsgjApgdQApgcAJAAQAbAAAPAJQAMAIAFAOIAJAcQAFAQAKAKIARAPIgHgEQgPgHgPgOQgJgIgMgRIgPgVQgHgJgEAAQgYAAgUANIgRANQgLAKgGADIhAAqQgJAHgQALIgeAVQgeAVgMAMIAAAAQAOAMACAAIAPgDQARgEAGgGIAIgJIAIgJQAFgGAVgKQAagOADgDQAFgDANgDQAQgFACgDIAOgSIASgRIAUgSQAWAIAiAfIAYAVQANALADABQATAJAJAKQAHAFAGANQAHAMAPAKQAXAPAiAAQAKAAAKgDIAQgFIASgFIADAAIBKg6QAIgGAMgBIAJgBQADAAAEgCIAlgcQAPgJAOAAQAEAAAHAEQAEACAEAEIAUgOIAGAAQAUADAIALIALATQAHAHALAKQAPAMAOAIQAcAPAYAUQADACACAGIAEAKIAFAKIABAIIAVAGIgHAEQgIAEgKAAQgQAAgcgigAg5AKIAVgPQAfgUAngaQBshDAtAAQAIAAASAFQAWAFAUAIQA1ASASATQADAEAHAOIAMAZIADAFIgCAAQgGACgGgBQgGgBgIgJIgVgVQgIgGgIgSIgEgMIgEgHIgFgFQgPACgKAAQgLAAgGgCIgEgCQgJAAgHAEIgJAFIgGAAIgMgHQgJgEABgFIgtAYQgUAMgcASQgYAQgpAVQguAWgQAAIgNgBgAhwgIQgGgDgHgFIgNgNIArAbQgJgBgIgFgAGMhXIgDgcIAAgNQAAgrATgOQASgMAZAMQAYAKATAYQASAYABAXQgBAMgEAJQgIANgQAAQgIAAgIgFQgJgEgCgGIAAAHQAAAGgDAIQgHATgVAAQgZAAgJgqgAHEioQgFAAgEAEIgGAGIgKAPQgGAKgKACIgBATIAAAIIABAFIAFAFIAGANQAEgGAEgJIAGgRQgCgIACgHQACgPALAAQAEAAABAEIABAFIgBAFIgBAEIACAHQADAFAGAHQAMAQANAAQADAAABgDIABgDQgHgGgGgKQgOgVgCgWQgBgOgJAAIgDABg");
	this.shape_25.setTransform(238.7,-8.8);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FFFFFF").s().p("AGkCZQgJgKgFgIIgEgEQgCgHAAgEIAAgMIAGAHIACAHIAAABQABAEACACQADAFAFAGIABAAIAAABIAAAAIAAAAIAHAFIAAAAIABAAQAEAEAGACIABAAIADACIAKgCQAHgCAFAAIABAAIAAABIgRALQgPAAgNgJgAGZBdIAAgCIABgDQABgEAEgDIADgEIACAAIAEAAIAAAAIAKACIACACQAFAGAJAAQADAAAIgLIAFgLIAKgDIAAAAIABAAIgFAHQgGACgDAEIAAADIAAAFQgCAHgMAAIgRgEIgBgCIgCgCQgDAAgFAEIgBAAIgHAHIgBADQgBAAAAgBQgBAAAAAAQgBAAAAgBQAAAAAAgBgAFsAyQgCgHAAgOIgQgKIAAAAQgFgGgLgFIgLgIQgHgIgBgCIAAgEIACACIAAAAIALAGIAJAGQAEADAJABIAMAMIABABIACABIABABIAEASIAAAAQABAGACAEQACAEACABQACADACAAIACgBQADgBADgDIAKgGQATgMAGgCIAWAAIAAAAQADACAEAEIAFAFIAAABIABACIgGgBIgBAAIgCgEQgDgCgFgCQgMgDgNAHQgFADgHAGIgBADIgKAJQgGAEgEAAQgNAAgDgOgAgxAjQgRAAgKgGIgOgKIgUgIIgUgIIgfgRQgTgMgGgIQgHgIgTgOQgTgPgFgFIgTgVIgIgMIABAAIAAAAIALAJQAIAJANALQATASAfAXIASAMQBFAzAcAAIADAAIAKABQASAAANgLIAHgHIABAAQAagPAkgYIADgCIApgWQAAACgaATQgZARgQAKQgKAGgNAKIgRAPIAAAAIgGADIAAAAIgBAAIAAABIgMAFIgPADgAnbASIgBgBQAAgFAogaIAtgcIAVgQIAcgXIAVgMIASgKIAAAAIACACQgqAggoAeQguAhgtAagAD1hFIgPgIQgGgDgEgBQgFABgFABIgBAAQgIABgJAGIgCABIAAAAIgEABQgEAAgIgFQgGgGgCgDQgMABgPAHIgXANIgCgCIgBgBQABgEASgKIALgGQAJgDAGAAQAPAAADAHIABADQABABAAAAQAAABABAAQAAAAABAAQABAAABAAQAGAAADgBIADgDQAFgEASAAQAYAAAOANIAIALIAAABQgIgCgKgHgAHEhvIgGgKIAAgQIABgDIgCgGIAAgBIAAgFQAAAAAAgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIgCgGQAFAFACAIIACAQIAAAHQAAACADAGIARATIgEAAQgLgFgEgHgAGVhmIgBgIQABgNAEgMIACgDIALgOIACgBIgDAIIgDAEIgDAFIAAABQgBABgCAJIgBAFIgGASg");
	this.shape_26.setTransform(240.1,-8.6);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#A2F2FC").s().p("AG7CcIAFABQACAAADgCIABAAIAJgDQAEgBAEgDIAIgBIgKAIIgBAAQgGAAgHACIgKACgAGUBxIAAgBQABgEADgBQABgWANgDIgEAEQgDADgBADIgCAEIAAACQAAABAAAAQABABAAAAQABAAAAAAQABAAABAAIgBAEIgCAAQgEADAAAHIAAAEIAAACgAGTBxIABAAIgBABgAGUBxgAGwBZIgHABQAEgDAEAAIACACIAAACgAHgBCIADgBIABACIgCADIgHADgAHFAyIgBgDIABAAIAGABIAEAGgAGHA1IAKgJQAPgMAMAAQAKAAAHADIgVAAQgHACgSALIgJAGgAFtAYIAGAIIAAABIgBAJgAh3AUQgfgTgigbIgfgbIgYgYIgVgPQgIgGgHgBQgKABgHAFIgLAIQgDABgGAGIgBABIgCACQgTALgqAgIg8AqQgbATgIAAIgLgBIAAgBIgBgEICRhjIgcAXIgWAQIgtAcQgoAaAAAFIABABIABACQAugbAtghQApgdApghIgCgBIAAAAQAcgNAOAGIgBAAIAIANIATAVQAEAFATAPQAUAOAGAIQAHAIASAMIAfARIAVAIIAUAIIANAKQALAGARAAQgIACgHAAQgWAAglgWgAg7AdQASgBAegQIgHAHQgNAKgSAAgAgLAbIARgOQAOgLAKgFQAQgKAYgRQAagTAAgCIACgCQAJgFAHgGIAHgGQANgHANgEIgLAGQgTAKAAADIABACIACABIAWgMQAPgHANgBQACADAFAFQAJAGAEAAIADgBIgEADIgGACIgBAAIgCgEQgEgFgHgGQgDgDgNAHIgOAJQgfANgaAPQgVAMgkAZIgkAagAEegYIghgdIgXgUIgRgBQAGgCAEAAQAFAAAGAEIAOAIQALAGAHADIAFAGQAEAJAHAIQADAEAJAFIAVAOIAAADQAAADAHAHIAMAJQAKAFAFAGIAAAAQgagRglgfgAFQAFIgIgGIAFABIADAAIANAJQgIgBgFgDgAiwgiQgggXgTgSQgMgLgJgKIAXAUIA4AtIALAJgAGZhhIAGgTIAAAIIACAPIgDACQgEgCgBgEgAGpiNIACgHIAFgHQAGgDAGAAIABABIACAGQABAAAAABQAAABABAAQAAABAAAAQAAABAAAAIgBAEIgGgKIAAAAIgDAAQgHAEgFAGIgEAGg");
	this.shape_27.setTransform(239.7,-9.1);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("rgba(107,211,210,0.498)").s().p("AGMDMQgQgJgLgEQgQgGgEgCQgIgDgEgFQgEgGAAgLQADgRAGgSQAOgiATAAQADAAAEADIAHAHQAKAJAFAAQAGAAAEgJIADgHIABgEQAEgHAIgIQAMgKAJAEQAFgJACgNIACgLQAAgEADgGQAJAKACAGQACAFAAALIgBATQgEANgLAAQgIgCgEABQgEACgFAFIgGAKQgFAHgDAEIAAAbIgTgQQgTgPgLAAQgEAAgHAVIgGAWQAAAHAQAQIAZAbgAF+DBIgCgCIgEgGQgEgDgEgCQgEgCgDgEIgFgFQgEgCgCgDIgBgCIAAgDIAAgFIAIgZQADgJADgFQAFgKAEAAIACAAIABABQAGAAAHAGIABAAIABABIABAAIAXARIAHgPQAFgMADgFQAIgMANgDIABgBIABAAIALgBIAEABIAAgEIABgBQgBgDAAgKIAAgPIAAgHQAAgDgCgDIgCgEIAAABIgDAYIAAACIgBAMIgQACQgNAGgIANIgBAAIgFALIAAACIgBABIgDANQgHgBgCgBIgJgKQgFgFgDgCQgFgDgJAAQgLAAgLAaIgCAFIgFATIgCALIADAHIAAABIAHALIAEADIAAAAIAJAGIASAHgAmjAjIgcgJQgFgEgHgCIgOgHQgCgDAAgDIAMAAQAAAAgBABQAAAAgBAAQAAAAAAABQAAAAAAABIAAADQAPAGAUAGQATAGATADIAOABIACAAIALgBIABAAQAKgBANgGIAggPIAhgIQASgEAKgGIAJgOIANgRQADgEAKgIIAigTIACgBIADgCIALAAQAIAAAFAEIATADIAhAKIAAAAIAEABIABAAIAbAIQASAFANAAQAMAAAIgCIAVgJIAAAAIABgBIAFgEIAUgZIALgIQADgEAIgHIABgBQANgLAFgCIAPgFIANgDQAKAAABABIABABIAIgCQAFAAAEAEIAGAJQAEAIADADQAGAGAHADQAWAIAMAGIAcAQQANAHAPAMIAbAWQAQAMAPAGQAQAEANABIARgFIABAAIAggHIAbgFQAJgDAGAIIAIAGQAJAHADAAIAEAAIABAAIABgBQgJgIgGgHIgHgMIgBAAIAAgBIgIgBIgjAJIgDAAIgBAAIghAIIgWgCIgCAAIgIgCIgHgCQgNgFgOgLIgZgVIgBAAQgHgGgGgCIAAgBIgWgJIgGgCQgIgEgJgIQgEgEgZgJIgQgGQgGgCgDgCQgNgTgTgFIgRgBIAAAAQgSACgQAJIgFADIgBAAIAAABIgDAEIAAAAIgaAiIgIAKIgYANQgKAEgEAAIgJAAIgGAAQgOAAgRgEIgegJIgCAAIghgKQgTgEgQAAIgNACIgEABIgiAVIgcAeQgCACgHAEIgCADIAAAAQgFAEgFABIg0AQIgBAAIgPAHQgWAIgZABIgMABQgEAAgegIIgGgBIAAAAIgdgIIgBAAIAMgBIACAAIAHgBQAFAAAKAFIAMAGIAyAAQAEgBAKgGIARgKQAXgPASAAIAPABQAHAAACgBQADgBAEgEQADgEAGgJQACgDAHgHIAmggQAUgPAKAAIAKADQAJAEAHAAQAZAAAJABQAGABACADQADADAFABQAJADAZACIAnAJIAaAAIAjgnIAkgqIAIAAIAWAFIAZABQALABACAFIABAJQADAGAQAEQAMADAEAAIAEgBIANAJIAVAOQANAIALAEIAQAEQAOAEACAEIALAQQAIAJALAIQAOALAQAAQAHAAAPgFIASgFIABAEQACADAHAAIA3gOIAaApIgBADQgBADgGAAQgIAAgNgJIgLgIIgLAAIgHAFQgFACgGAAIgCAAIAAgBIgMgBQgHAAgvAOIgCgCQgagQgBAAQgOAAgFgCQgFgBgFgFIgPgNQgPgOgTgLQgIgHgNgFIgYgLQgcgNgIgIQgGgGgKgHIgTgJQgLAAgGADIgQANIgIAHQgFAFgFAIIgMASQgQAWgIAAIgBgBIgFgBQgFAAgMAHIgHAFIgFADQgKAAgXgJIgPgGIgNgCQgDAAgJAFQgKgHgJgEIgNgFQgNgFgFgBQgMgEgKACQgLABgIAGIgRAOQgKAKgEAGIgVAeIgOgBQgGAAgMAIIgQALIgVAAQgCAAgHAEIgPAHQgYAKgaAAQgJAAgcgIgAG6ifQgGgEAAgFIAAgLQAAgIgEAAQgCAAgHAGIgIAIIgFgFQgDgDAAgCIACgFIAFgHQAIgJAEABIATAAQAIgCADAOIACAPIgEAYgAG7i4IAAALQAAADABACIABACIADADIAAgDIAAgYIgDgJQgFgBgFABQgFACgFADQgKAIAAAHIAAACIAHgJQAFgFADgBQABAAAAAAQABAAAAAAQABABAAAAQAAABAAAAIAHgDIABgBQACAEAAAGg");
	this.shape_28.setTransform(235.1,-8.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#FFFFFF").s().p("AFOC8IgHgMIAAgBIgDgHIACgKQAGgKAAgDIgBgGIACgFQALgbAMAAQAIAAAFADQADACAFAGIAJAJIgBAAIgCADIgBgBIgIgFIgBgBIAAAAIgBgBQgIgFgGgBIgBAAIgBgBQgGAAgDAHIgBADQgDAFgDAKIgIAZIAAAEIAAAEIgCABIAHAPIABABgAGQByIAEgLIABgBQAIgNAOgGIAPgCIABgLIABgCIAEAAIACgNIAAgCIAAAGIAAAPQAAALABACIgBACIgCgDIgBgDIAAAGIAAADIgMABIgBAAIgBAAIgBAAQgGAAgYAUIgDADgAmKAtIgPgBQgRgEgSgLIgGgEIAAAAIAHACQAdAHAFAAIAIABIAEgBQAYgCAWgIIAQgHIAAAAIA0gQQAFgBAFgDIACABIABABQgEAEgWAJIgNAGIgRAFIgJAEIgtARIgBAAIgLABgAGwAQQgOgGgPgNIgJgIIAJgCIAIABIABAAIAHAMQAGAHAKAJIgCAAgAEfAJQgPgGgQgKIgtgrIgHgHIAWAJIAAAAQAGACAIAGIAAAAIAcAeQAFAGAHACIAUACIAHAAIACABIABAAIAEADIAEgCIANAAIAigGIAAAAIgGACIgZANIgBAAIgRAFQgNgBgQgGgAhPgkIgKAAIgVgGIgBAAIgEgCIAWgCIAKACQASAFANAAIAGgBIAJABQAEAAALgEIANACIgBAAIAAAAIgWAJIgBABQgSgFgcAAgAjrgpIAAgBIABgBIAigVIAEgBIANgCQARAAASAFIAhAJIADABIAJADIg5gLIgfAAIgCABIgDABIghAUQgEAAgCgDgAAWhUIANgQIAAgBIADgDIABgBQACgBACgCIABAAQAQgKASgBIAAAAIASABIAAAAIgSAHIgHACIgOAGQgGACgMAKIgCABIgBABIgKAFgAGsidQgCgCAAgEIAAgLQAAgGgCgEIgBABIgCgCIgCgDQAFgCAFABIACAJIAAAZg");
	this.shape_29.setTransform(236.8,-9.3);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#A2F2FC").s().p("AFsC+IgJgGIgCgCIgHgPIADgBIABABQACADAEACIAFAGQADAEADACQAFABADAEIAFAGIABABgAFcCEIABAGQAAADgHAKgAGPB7IADgDIAAAAQADACAGABIAEgNIAAgBIADgDQAYgUAHAAIABAAQgNADgIANQgEAFgFAMIgHAPgAHPBVIAAgDIAAgGIACADIACADIgBADgAHMA9IACgYIAAgBIADAEQABACAAAEIAAACIgCANgAk+AUIgYALQgNAFgJABgAmuAdQgUgGgPgGIgBgEQAAAAAAgBQABAAAAgBQABAAAAAAQABAAABAAIAcAHIAGAEQASALARAEQgSgCgTgGgAkXAFQAVgIAEgFIAAgBIgDgBIAAgBIACgCQAHgEACgDIAcgdIAAABQABADAEAAQgLAHgCAEIgNASIgJAOQgKAFgSAEIgRAEgAGwACIgIgFQgGgJgIAEIgcAFIggAHIAZgNIAGgCIAdgHIAJAIQAPANAOAGIgDABQgDAAgKgIgAFGgFIgBAAIAJABIgDACgAEpgJQgIgCgFgGIgcgeIAaAWQANAKANAFIAIADgAD2gkQgQgNgNgHIgcgPQgLgGgWgJQgHgCgGgGQgDgDgEgIIgGgJQgEgEgGAAIgHACIgBgBQgCgCgJAAIgGABIARgHQATAEANATQACADAHACIAQAFQAZAJAEAEQAIAIAJAEIAGADIAGAHIAfAfgAhCgpIgHgCIALAAQAaAAATAEQgIACgLAAQgMAAgSgEgAgGgyIAXgOIAIgJIAHgKIAGgIIAEAAIAKgFQgHAHgDAEIgKAHIgUAZIgGAFgAhjgzIghgJIgSgEQgFgDgHAAIASAAIBDAOIgVACgAG8ijIAAgBIADACIABACgAGeiwQAAgHALgHQAFgEAFgBIADADIABACIgGAEQAAgBgBAAQAAgBAAAAQgBAAAAgBQgBAAAAAAQgEABgFAGIgGAIg");
	this.shape_30.setTransform(235.1,-8.6);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("rgba(107,211,210,0.2)").s().p("AE5C1QgFgLgDgMIgCgOQAAgJACgIQACgMAFgLQAOgeAdAAQAGAAAMADIARAFQADgRAhgSQgFgKgFgIQgMgRgJAAQgHAAgFACIgKADQgOAFgWABIgOAJQgJAFgHAAQgbAAgSgIQgQgIgDgNQgCgHgCgBQgCgCgJgDIgagFIgygJQgRgDgLgJQgIgHgEgMIgFgVQgDgNgDgGQgoACgVANQgHAEgHAKIgKAQIgKAQQgEAHgHAGQgSAOgkAAQgHAAgSgHQgQgFgWgKQgmgRgZgRQALgBAMADQAFABANAGIANAFQAIAEAKAGQAKgFADAAIANADIAPAGQAWAIAKAAIAGgCIAHgFQAMgHAGAAIAFABIABABQAGAAARgWIALgSQAFgIAGgGIAHgHIARgMQAFgEAMABIATAJQAKAGAGAGQAHAJAdANIAXAKQAOAGAIAGQASAMAQANIAOAOQAGAFAEABQAGAAANAAQACAAAaASIACABQAvgOAHAAIALACIABAAIABABQAHAAAFgEIAGgEIALAAIAMAJQAMAIAJAAQAFAAACgCIABgEIgagoIg3ANQgHAAgCgDIgBgEIgSAGQgPAEgIAAQgPAAgPgLQgLgHgHgKIgLgQQgCgDgOgEIgRgEQgLgEgMgJIgigXIgEABQgFAAgLgDQgQgEgDgGIgCgJQgBgEgLgCIgaAAIgVgFIgIAAIgkApIgjAoIgaAAIgogJQgYgDgJgCQgGgCgCgDQgDgCgFgBQgKgCgZAAQgGAAgKgDIgJgEQgKAAgUAQIgmAfQgIAHgBAEQgGAJgDADQgEAEgDABQgCABgHAAIgQAAQgRAAgXANIgRALQgKAGgFABIgvAAIBAgcQBEghASgQIAKgOQAKgRAIgKQAeglAeAAQAKAABAAhIA+AhQAEAAAEgEIAJgKIAJgOIANgQQARgUAYgKQAggOAuAAIASAAQAJABAFACQAGADAFAFQAFAFAGALQADAFAZAHIAUAFIARAGQAOAIAQANIAXAVQARANALAEQASAHAWAAQAIAAAGgBIAKgDQAMgFARAAQArAAAgAyQAMASAIATQAGAQAAAEQAAANgGAIQgFAGgJADIgQAHQgIAEgDAIIgDALQgCAJgEAGQgJATgYAAQgKAAgIgCQgEgBgFgDIgIgFQgEgDgIgBIAeAUQAGAFACAFQADAFAAAIIgCAHIgEAMQgJAPgPAAQgpAAgSghgAGADSIgZgbQgRgRABgHIAGgVQAHgVAEAAQAKAAAUAPIASAQIAAgcQAEgDAEgIIAHgKQAFgFAEgBQAEgCAIADQALgBAEgMIABgTQAAgMgCgEQgCgHgJgKQgDAGgBAFIgBAKQgCAOgFAIQgJgDgMAKQgIAHgFAHIgBAEIgCAHQgFAKgFAAQgFAAgKgKIgIgGQgDgDgDAAQgTAAgOAiQgGARgDARQAAAMAEAFQAEAFAIADQAEADAQAFQALAEAQAKIAEAAgAnfAoQgKgIgDgKQgEgHAAgHQAAgGAEgDQADgDAEAAQADAAADAEIAKAJIAEACIgCABIgMABIgNgBQAAAEACADIAPAGQAHADAEAEIAdAJQAcAHAIAAQAaAAAZgJIAPgHQAHgEACAAIAGAAIgXALQgxAYgDAAQg7AAgbgXgAjqgVQAEgGAJgKIAMgKIgBABIgMAUQgIALgJAHIgHAEgAGzhqQgEgEgDgIQgDgJgEgDQgGgGgOAAQgTAAgHgPQgEgJAAgIQAAghASgJQAOgHAYALQAXALAQATQASAVAAAQQAAAmgeAAQgNAAgGgFgAGjiuIAAALQABAFAGAEIALAHIAFgYIgCgOQgDgOgIABIgTABQgFgCgHAKIgGAHIgCAEQAAACADADIAFAFIAJgHQAGgGADAAQAEAAgBAHg");
	this.shape_31.setTransform(236.7,-8.8);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("rgba(107,211,210,0.498)").s().p("AFHDOIgEgDIABgiQAAgSAGgIIAFgGQACgCAAgFIgEgOQAAgFAGgJIAKgOIASgDIADgBIACAJQgKAKgDARIgCAPIgDAPIgIABIgGAOIAAAXQABAFAFAIIAIAMQAEAGABAFQgIgCgYgQgAFkBdQgDABgEAFQgEAGgBAIQgBAJACADQgDAHgFAKIgDADIAAABIgEAsIABADQABAHADAFIAPAKIgLgKIgEgEQgBgBAAgEIABgXIAAgBQABgSAFgGIAGgDQAAgEAGgSIAAAAIADgLIgBgCIgCgHIABgEIABgBQADgCAIAAIACAAQgEgDgFAAgAldC1QgLgDgJAAQgDAAgFgEIgGgFIgLgLIgKgLQgGgEgDgHQgEgHgDgEIgMgKIgBgBQgGgFAAgFIAAgMQAAgHgCgEIgVgrQgKgSAAgGIACgIIACgHQAHAIAMAKIANAMQAGAGAJAFQAHAEACAHIAAAGIACAGIAKAXQADAEAAAHQACAJACADIAIAKIAOAMQAPAMAJADIAHABQACAAATghIAphLIACgDIAMgTIATgVQANgQADgGIADgFQAIgKAKgIIABgBQAQgMAVgEIASgEQAPgGAHgHQADgCAFgIIAHgLQAIgIAXgMQAWgMAVgHQADgBALABQAKAAAFgHIAGgGIAmgYIAQgCIAhAWIALAQQAHAJAJAHIARAOQALAIALADQAKAEAMAJIAIAHIAhASIAMAIIAUAVIAKAFQAIADAFAFQAFAEAEALQAFAOABACIAUAgQACAAAGgMIAJgTQAFgHAJgFIABgBIAYgOQAYAGAKAAIADgBIAEgBIALgCIAJgBQAEAAAXAGIAdAIIgrAHIghgFQgCAAgKAHQgJAIgEAAIgOgEQgGAAgIAMIgTAjIgKAQIgPAAQgSgDgHgGIgLgLIgLgMIgHgJIABgFIABgKQAAgGgEgKQgFgKgHgCQgFgCgFgEIgGgHIgGgHQgDgDgFgBIABACIgxggQgIgFgKgEIgWgHQgGgCgFgIIgEgHIgEgFIgXgXIgUgTQgDgCgFgBQgEgBgDABQgEACgHAIQgHAJgFADQgIAHgJAAIgGgBIgHgBIgXAAQgGACgKAIQgLAJgIALIgLARIg3ASQgMAFgHAFIgOAJQgOALgLAMQgHAFgIAKIgUAeIgaAyQgGgCgFAEQgFAFgEAJIgfA+QgHAOgJALIgHAAIgDABgAnHAdIAOAUQAKANACAIIAEAQIABAKIAHAMIAAAAIAKAQQAMARANANIABABIAHAGQARAOAQAAQAVAAASgmIASgvQAHgOARgZIAkgyIAAgBQAJgNAOgMIASgNIADgCIABAAIBPgnIABAAIANgRIAPgMQAKgHAGgCIASgJIABAAIAAAAIALgBIABABIAKACIAIAAIAGgFIAFgEIAbgVIAAAAQAKgGAFAAIAVAVIATAUIAQAQQADAEAMAJIABABIAHACIBCAgIANAIQARANAKAJQAMAMAFAGQAGAHADAJQACAJAAAGIAHAQQALATAQADIACABIAHAAQADAAAEgEIAhgyQAJgKAFADIAFAAIAJAAIABgBIAPgEIAPgFQAIgDADAGIAgABIAAgBIgjgGIgGgCIgBABQgRADgcgCIgFgBIgCACIgjAlIAAACQgKAZgHAAQgPAAgWg1IgFgLIAAgBIgDgIIgEgEIgKgIIhHgqIgBgBIgSgKIgCgBIgHgEQgIgGgLgKIgBgBIgEgCQgOgJgMgJIgCgCQgLgJgDgEIgJgRIgBAAIgDgHIgBAAIgDgCIgFgCQgJgEgJACQgUADgYAcIgCACIgFACQgaAGgTAGIgBAAIAAAAIgBAAIgCABQgTAHgMAJIgKAHIgIAPIgCADIgBACIAAABQgEAFgFADIgBABIgFACIAAAAIgSAGIgFADIgZAKQgaALgFAGIgBACIgBAAIgGAIIAAABIgUAaIgdAqIgxBbQgKASgIAEQgDACgFAAQgGAAgNgKIgHgFIgBgBIgUgUQgKgKgFgKQgGgJgBgJIAAgCIAAAAIABgBIgBgBIghg0QgQgYgFAAIgBAAQAJAOADAHgAHEi1QgFgGgBgIIgCgOQgBgJgDgEQANgCALANIAGAKQACAFAAADIgDAYQgLgGgGgGgAG/jVIAAAGIAFAMQAFALADAAIAEAAIgBgBIACgFIgMgUIAAgBIgBAAQgCgEgCAAg");
	this.shape_32.setTransform(237.6,-10.4);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#FFFFFF").s().p("Al9C2IgKgNQgKgOgMgKIgKgQIgBAAIgCgEIAAgBQAAAAAAgBQAAAAAAgBQAAAAAAgBQAAAAAAAAQgBgHgFgHIgEgQQgCgIgKgOIgBgCIABAAIAXAeQAEAFACAHQABAJAGAJQAGAKAJAKIAUATIABABIAHAGIABABIABABQAJALAHgBQAJAAAOgSIAVgaQAHgKAFgMIAJgXQARgmAbgbIALgJIgkAxQgRAZgGAPIgSAvQgTAlgVAAQgQABgRgOgAFGC8IAAgBIABgVIAAAAIADgDQAGgKACgHQgCgEABgIQABgIAEgGQAEgFAEgBIAAABIgBAEIgBABIgCADIACAEIgDANIABADIAAABQgGASABAEIgHADQgFAGgBASIAAAAIgCgFgAEhBUIgBgBQgRgDgLgUIgCgEIACgLIABgGIgHgNIgJgPIgMgQIgIgKIAAgBIAIAGIAOAOIADAEIABACIAEAMQAWA1APAAQAHAAAKgZIAAgCIAjgmIAIgCQAbADASgEIAAAAIAHABIgGACIgTAHQgEABgHADIgGACIgGAAIgFgCIgGgCQgGAAgHAOIgEAIIgZAnQgEAEgDAAgAjigBIABAAIAFgIIABgBIACgCQAEgFAagLIAagKIAEgDIASgGIAAAAIAFgCIABgBIAIABIg9AdIgBABIgDACIgMADIgWANgAC5giIhCggIgCgCIgGgBQgMgJgDgEIgBgBIAAgBIgBgDQgBgEgJgGIgLgLQgDgCgIgOIgIgMIgIADIgGgGQgFgBgJAHQgLABgIAKIgGAHIgBABIAAACIgDAAQgDAAgBgCIgBgDQAAgDACgEIAHgLQAOgNAOAAQAFAAABAAIACABIAJgBIAFABIADACIABABIADAGIABABIAKAQQADAFAKAIIACADQAMAJAOAJIAEACIACABQAKAKAJAGIABABIAAAAIgCgBIAAAAIAFAEIAMAGIgJgGIABAAIASALIABABIAoAXgAh7g9IACgEIAIgOIAKgHQAMgJAUgHIABgBIABAAIAAAAIABAAQATgHAagFQgDAEgIAFIgBAAIgIABIAAAAIgBAAIgSAJQgGACgKAHIgUAOIgVANgAG9i6IgEgHIABgBQABgBACAFIABAAIAAAAIAEAJg");
	this.shape_33.setTransform(238.3,-12.4);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#A2F2FC").s().p("AFRDNQgDgFgCgHIgBgDIAEgYIAAABIACAFIgBAYQgBAEACABIAEAEIALAKgAlmCaQALAIAGAAQAEAAADgCQAJgFAKgRIAxhcIAcgpIAUgbIACAAIAXgNIALgDIgRANQgOAMgJANIgLAKQgcAbgQAmIgJAXQgGAMgHAKIgUAaQgOASgKAAQgGABgJgLgAl8CbIgBgBQgMgNgMgRQAMAKALAOIAJANIgHgGgAFiB3IACgNIABAEIABABIgDALgAmnBgIgBgKQAFAHABAHQABAAAAAAQAAABAAAAQAAABAAAAQAAABgBAAIAAABgAFmBeIAAgBIADgBQAEABAFADIgDAAQgHAAgDACIABgEgAmhBMIgWgeIgCAAIgMgSQgDgHgJgNIABAAQAFAAAQAXIAhA1IABABIgBAAIAAAAIAAADQgDgHgEgFgAEGAYQgBgGgCgJQgCgJgHgHQgEgHgMgLQgKgJgSgOIgNgHIASAFIADABIATAMIAAABIAIAKIANARIAJAOIAGANIgBAGIgCALgAFUAMQAHgNAHAAIAFABIAGABIgBAAIgFABQgGgDgIAKIgIALgAGXgKIAFgCIAiAGIAAACIgWgBIgJAAQgEgGgIADIgOAEgAEAgQIgPgPIAKAHIAFAFIACAHgAh8hHQAEgDAFgFIAAgBIABgCIADABIAVgNIANgIIgHAFIgNASIgBAAIgSAJIgIgBgACUhVIgGgEIAAAAIADABIAAAAIAOAJgABZh4IgTgTIgPgPIAIgDIAHAMQAIAOAEACIALALQAJAGABAEIAAADIAAABgAgMh8IgKgCIgBgBIgCAAQAIgFADgEIAFgCIACgCQAYgcAUgDQAJgCAJAEIgKABIgCgBQAAAAgFAAQgPAAgNANIgIALQgCAEAAADIAAADQACACADAAIACAAIgFAEIgGAFgAAKiIIAFgHQAJgKAKgBIAAAAIgZATgAHGjEIgGgLIABgHIAFAHIAFAFIABACIAGAKIgBAFIAAAAIgDABQgDAAgFgMg");
	this.shape_34.setTransform(237.5,-10.3);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("rgba(107,211,210,0.2)").s().p("AFCDDQgGgMgEgRIgCgPQgBgZARgdQANgZAUgRQAWgSANADQAQACAAAaQAAAGgEAVQgDAXgBAJQABANgHARIgEAMQgCAHAAAGQAAAEADAIQAEAIAAAFQAAAMgIAJQgJALgPAAQgbgBgQgrgAF2BLIgRACIgKAPQgGAIgBAFIAFAPQAAAEgDADIgEAFQgGAIAAASIgBAjIAEACQAYAQAIACQgBgFgEgGIgIgMQgFgHgBgGIAAgXIAGgOIAIgBIADgPIABgOQADgSALgKIgCgIgAliDCQgYgKgWgiQgMgQgIgWIgFgIIAMAKQAEAEADAHQAEAHAFAEIALALIALALIAFAGQAGADACAAQAKAAAKADIAOAEIADAAIAHgBQAJgLAHgNIAXgsIAHgTQAFgJAEgEQAGgFAFACIAbgxIATgeQAJgKAGgGQAMgMAOgLIANgJQAIgFAMgFIA3gRIALgSQAHgLAMgJQAKgIAGgCIAXAAIAHACIAFAAQAKAAAIgHQAFgDAHgJQAHgIAEgBQADgCADABQAFABADACIAVATIAXAYIAEAEIAEAHQAFAJAGABIAVAIQAKADAJAFIAxAhIgBgDQAFABADADIAFAHIAHAHQAFAFAFABQAHADAFAKQAEAJAAAGIgBAKIgBAFIAHAJIALAMIALALQAGAGATADIAOAAIAKgQIAUgiQAIgMAGAAIAOADQADAAAKgHQAJgIADAAIAhAHIArgIIgdgIQgXgGgEgBIgJABIgMACIgDACIgDAAQgKAAgYgGIgYAPIgBAAQAGgHAHgGQASgPAbABQA7AAAXAVQAMANABARQgBAJgFAHQgIAMgPAAQgGAAgJgEIgGgFQgWAAgNgEIgLgEQgFgBgIAJIgQARQgLAMgJAGQgLAIgNAAQgKAAgOgGQgKACgKAAQgKAAgjglIhHhQIgQgSIgOgHIgrgUIgUgLQgPAKgfAOQgQAIgmAPIgkAQQgOAHgkAIIgdAHIgBABIgJAIQgEAEgGAAIgGAAQhTDQhJAAQgRgBgKgGgAlTCIQgJgEgPgLIgPgNIgIgKQgBgDgCgJQgBgHgCgEIgKgXIgCgGIgBgGIgBgFIAhAtQAVAeAOANIASgxQAPgmAWgkIALgTQAPgcAMgRQAOgRAVgSIAJgKIAXgNQAogbAWgRIAmgbIALgFQAWgGAagMIAjgPQARgHANADQAOAFAPARQAUALAbAXQAbAXALAMIAWAYQATAGATANQATAOASAUIA2A3QAJgFAFgBQAJAAAFAEQgKAGgEAHIgKASQgFAMgCABIgUggQgBgCgFgPQgFgKgEgFQgGgFgHgDIgKgFIgJgIIgLgMIgMgJIghgSIgIgHQgMgJgKgDQgLgDgMgJIgRgOQgIgHgHgJIgMgQIgggWIgQACIgnAZIgFAFQgFAIgLgBQgKgBgDABQgVAHgWAMQgYAMgHAJIgHALQgGAHgCACQgIAHgPAGIgRAEQgVAFgRAMIgBABQgKAHgHALIgDAEQgDAGgNAQIgTAVIgNATIgCADIgoBLQgTAigCAAgAm9A7IgrhGQgKgRAAgEIABgJIACgBQABgBAFAAQAOAAAVAUQAPAPAYAgIAIAKQgDgDgEgBQgIgGgGgGIgOgMQgLgJgHgJIgCAIIgCAIQAAAFAKATIAUAqQACAEAAAIIAAACQgEgLgJgOgAGtirIgYgiQAAgMAOgKQAOgKATgBQATAAANAOQAPARAAAgIAAAHQAAAGgCAIQgIASgTAAQgNAAgcgjgAHAjpQACAEACAJIACAPQABAHAEAGQAHAGAKAGIAEgYQAAgDgCgEIgGgKQgKgMgLAAIgDAAg");
	this.shape_35.setTransform(236.9,-9.3);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("rgba(107,211,210,0.498)").s().p("AFPDvQgmgDgFgJQgCgEACgEQACgGgBgCIgEgPQgEgNAAgEIAVggIAEAEIAAAEQAAANgCAMQgDANAAAGQAAAJAIAHIAZAQIAAAIgAErCgIgGAwIABAFQACAFAEAEQAHAIAKACIAIABQABAAABAAQAAAAABAAQAAAAAAAAQAAAAAAgBIAAgBIgBgBQgKgHgGgCIgBAAIAAgBQgEgBgDgDIgBgBQgEgFAAgDIABgPIABgNIACgPIACgFIgDgDQgBABgBADgAkSCnQgbgGgUgJQgQgIgKgJIgTgTQgMgMgOgIIgPgJQgJgFgGgFQgEgEgCgHIgBgGIAAgBIgBgEQgFgLgNgRIgHgJIACABQAVAJALAKQAPAMAGADQALAIAOAFQAcAJAJAHIAJAIIAHAKQAFAIAPAIIAhASIAFAAQAMgNALgQIASgeQANgVARgVIABgCIABAAIAFgHIAHgIIgCgBIAAAAQACgCABgDIAKgPQAGgIAEgCQAOgLAQgPIAcgYQADgDALgEIASgGQAagLAKgRQAIgLAOgTQAQgUAGAAIAWAFIAHAAQAFgBACgDIAEgEQAHgEAlgBIAXgHQAUgGAFAAQACAAAMAIIARALQAEADAPAFQAOAFACAIQAAAEAFAJIAIAMQADAGAGAFIgBAAIAAABQAdAaAOAYQAPAZABAZIgBAEIgBAEIAAACIACADQACAGAFAAQAGAAAOgQIANgPQAIgMANgDIASgFIAEgEQAFgCAKAAIAWABIAEgCIABgEQAAgEgEgHQgEgGAAgFQAAgEACgDQACgEAEgDQAJgHAIAEIABACIAAACIgCAGQgCAEAAAEQAAAEAHAKIAIAKIgDAJIABAEIAAAFQAAAUgDATQgEAZgIAGIgYgEIgHABIgIAAIACgIQADgGAIAAIALgBQAEAAADgCQACgCABgFIABgOQgFgYgBAAQgJAAgJADIgGACIgBAAQgGgEgKAAQgEAAgKAKIgVAVIgXAYQgNAMgJAEQgJgPgLgLIgMgNQgGgJgCgFQgBgFgEgHIgKgOQgGgIgDgGIgDgNQgCgNgLgPIgxg1QgJgKgEgCQgCgCgHgBIgNABIgmAEIgBgDQgDgCgMAAIgLADQgHADgKAAQgIAAgDgBIgBgBIgDAAQgJAAgDAGIgBAGQgBAEgFADIgGAGIgDAHQgBAEgGACIgJAFIgKAGQgOAKgRARIgbAcQgTAUgNAJQgUANgZANQgaAOgKAOQgHAKAAARIACARQAAAIgkAkIgkAjgAmmA3IAGAIQAXAVATAPQBEA0AnADIADAAQADAAAHgHIABgCQAGgGAPgTIARgYIAHgNIAAAAQAAgTAJgQQgFAIgCAGQgLAWgSAcIgMARIgLAMQgEACgCAAQgeAAhLg4IhMg8gAAKiRIgHAKQgDAEgHAHIgKAKIgKALQgNAPgJAEQgbAOgZAWQgWASgNARIgfAbQgSARgLANQAJgLANgKIAigXQAVgQAQgQQAKgKAagUIBGg9IALgRQAGgFAHgEIgIAAIgEgBQgCABgDAEgAGmAsQABAAAHgNIAAgBIADgOIAAgCIABgFIABgQIAAgBIgCgRIAAgBIABgKIAAgBQgDgGgDgCQgKgJAAgIQAAgFAIgFIAAgBIgCAAIgBAAQgHABgCACQgDADAAAEIAIAPQAJAOgBADIgBADIADAIIgBAcIgBABIgBAEIAAACIgCANIAAAIIgEAGIgDAAIgTgHIgBABIAAAFIACADIAAgDQAAAAAAgBQAAAAABAAQAAAAAAgBQABAAAAAAgACViaQATAFAVAYIAOASQAOASAUAfIAnBCQAPAaAJAEIABAAIAAAAQAKAAALgOIAQgVIABgBIASgOQAKgNAGgBQAFgBAHAFQAJAGAFAAIAGgBQAFgCAHgFIAAgBIABAAIAAgBIABAAIAAAAIgBgDIgCgCIgEgBIgCAAIgcACIgPADIgMAEQgPAIgLANIgNAUQgHAKgJAAQgPAAgFgYIgEgPIAAgBIgCgMQgCgJgRgTIgLgNQgGgHgCgGIgTgcQgNgRgKgJQgLgKgMgIIgMgFQgLgFgQgBIg4ABIgIACQgPAFgPADIADAAQAJACAFAAQAJAAAMgFIA3gBIAEgBIAFgBIAJACgAGzjbQgFgJgBgCIAGgIQAMgBAFAEQADAEAAALIgEAGQgFAFgDABgAG0joIAHAMIACABQABAAABAAQAAAAABAAQAAgBABAAQAAAAAAAAIAAgCIgBgDIAAgCIgBgFIgIAAg");
	this.shape_36.setTransform(233.6,-10.3);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#FFFFFF").s().p("AEYDfQgDgEgCgFIgBgGIABgOIACAFIACACIgBAHQAAACAEAFIABABQAEAEADABIABAAIAGAKIAAACQgKgCgHgIgAkfCaQgJgCgNgHIgWgNQgWgCgIgIIgFgHIgHgHIgOgMIgOgNQgQgNgJgLIgBgBIAmAeQBMA4AdAAQACAAAEgDIALgMIAJgLIAAgBIAFgFIALgPQAJgLAFgCIgHAMIgRAYQgOATgHAHIgBABQgHAHgCAAgAGMArIABgBIADAAIAEgFIAAgDIAGgIQgCgEAAgEIAAgIIABgCIABgMIgBgHIABABQADAEACAGIAAAAIgCAPIAAABIgCAPIgBABQgHAMgBAAgAEZAnIgDgBIAEgDIAJgKQAJgKAGgMIAEgEQAKgOAQgHIALgEIgEADQgQAOgEAJIAAAAIgFAEIgPAUQgMAPgJAAgADugVIgFgRIgIgVQgGgOgJgHQgGgFgEgHIgIgKIgIgFIAAAAIgLgNIgBgCIgRgVIgEgGQANAHALALQAJAJANARIATAcQACAFAGAHIAMAOQAQASACAJIACAMIAAABIACAHIgBACQgBAEgDACgAidgLIABgBQANgRAWgTQAZgVAbgOQAJgFANgOIAKgMIAKgJQAIgHADgFIAHgJQADgFACAAIAEAAIAAABQAAAGgNANIgkAiQgJAJgKAIIgKAJQgEAEgHAEIgQAIQgJAGgCADIgTATQgPAOgEAAgAFugYIgDgFIAAgBIARgBQAIABACgBIACAAIAEAAIACACIABADIAAABIAAAAIgBAAIgBABIAAAAQgHAGgFABQgOgBgFgGgAGdgbIgKgRQgIgKAAgGQAAgDACgEIAGgGIABAAIACABIAAAAQgIAGAAAFQAAAHALAKQACACADAGIAAABIgBAJIAAABgAAxieIAHgCIA5gBQAPACALAFIABAAIgJAAIgBAAIgJgBIgGAAIgFgBIgDgBIgDgBQgHAAgGADIgDACIgTAAgAGnjlIgCgDIAGAAIABAFIAAADQgDgBgCgEg");
	this.shape_37.setTransform(235.6,-10.4);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#A2F2FC").s().p("AE7DoIAAgCIgGgJIAAAAQAGACAKAHIACABIAAABQAAAAAAABQgBAAAAAAQgBAAAAAAQgBAAgBAAgAEnDGIgCgEIAEgiQABgDACgBIACADIgBAFIgDAPIgBANIAAAIgAl3BjQgUgPgWgVIgHgIIgWgcIAlAeIABABQAJAMAQANIAOAMIAOANIAHAHIAFAGQAIAIAWACIAWANQANAHAJADQgngDhDg0gAjtBwQATgcAKgWQADgGAFgIQgKAQAAATIAAAAQgFADgJAKIgLAQIgEADgAGLApIAAgFIABgBIATAHIgBABIgGgBIgJgDQAAAAAAAAQgBABAAAAQAAAAgBAAQAAABAAAAIAAADgAipAOIAegaIADABQAEAAAPgPIATgTQACgCAJgGIAQgIIAFgEIgDADQgaAUgKAKQgPAQgWAQIghAXQgNAKgJAKQALgNARgQgAESAIIgDgFQADgCABgDIABgCIACAIQAGAYAOAAQAJAAAHgKIAKgPQgGAMgJAKIgJAJIgEADQgHgFgPgYgAGmAcIACgNIAAgCIACgEIAAAIQAAAEACAEIgGAIgAFVAAQAEgJAQgOIAEgEIAQgDIAAABIADAFQAFAGAOABIgGABQgFAAgIgGQgHgFgFABQgHABgJANIgPAMgAGsgKIgBgCIAAgIIgDgIIACgDQAAgDgIgOIADAEIAKAQIAAADIACARIAAABIAAAHQgCgHgDgDgADrg6QgTgfgOgSIAAAAIAIAEIAIALQAEAGAGAFQAJAIAGANIAIAWIAFAQgAGZg/QAAgEADgDQACgCAHgBIgGAGQgCAEAAACQAAADACAEgAg8hGIAKgJQAKgHAJgJIAjgiIAIgKIgEAIIgGAIIg+A1IgGAFIAGgFgAC7h9QgVgYgSgFIABAAIAIgBIAMAFIAVAcIABACgAARiVIAAAAIAIAAQgHAEgFAFQAEgFAAgEgAAoiWIgEAAQAPgDAQgFIAUAFIgNAAQgMAFgJAAQgFAAgIgCgABqiaIADgBQAGgEAHAAIADABIADACIAFABIgDABIghAAgAG5jcIgGgMIADAAIABAAIACACQACAEADABIABADIAAACQAAAAAAAAQgBAAAAABQgBAAAAAAQgBAAgBAAg");
	this.shape_38.setTransform(233.8,-10.3);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("rgba(107,211,210,0.2)").s().p("AD0DiQgJgPgFgOIgEgOQAAgzAUgIQARgGAdAYQAWARAYAeIAPAUQAGAHAAADQAAAUgMANQgPAQgbAAQgiAAgbgqgAEHC4QAAAEADAMIAEAQQAAACgBAFQgBAFACADQAEAJAlAEIAFAAIAAgIIgPgJIgLgIQgIgHAAgJQAAgGACgMQADgNAAgNIAAgEIgFgDgAlOCtQgfgWgogmIgQgQIAHAEQANAIALALIAUATQAJAJARAJQAUAJAbAFIAGAAIAlgjQAkgjgBgJIgBgQQAAgRAHgLQAKgOAagNQAZgNAUgOQAMgIAVgVIAagbQARgRAOgLIAKgGIAKgEQAGgCABgEIACgHIAHgHQAFgDABgDIABgHQACgGAJAAIADAAIABABQACACAKAAQAJAAAIgDIAKgDQAMgBADADIACACIAlgDIAMgBQAIABABABQAFADAKAJIAwA1QALAQADAMIACANQACAGAHAJIAKAOQAEAFACAHQABAEAGAJIAMANQAKAMAKAPQAJgEANgMIAXgYIAVgWQAKgJAEAAQAJAAAIAEIAAAAIAGgCQAJgDAJAAQACAAADAYIAAAOQgBAFgCACQgDACgEAAIgKAAQgKAAgCAHIgCAIIAHgBIAIAAIAYAEQAHgGAFgaQADgUAAgTIgBgEIgBgEIAEgKIgHgKQgIgJAAgEQAAgFACgEIACgGIgBgCIgBgCQgGgDgKAHQgEADgCADQgCAEAAAEQAAAEAEAHQAEAHgBAEIAAAEIgEABIgXgBQgJAAgFACIgFAFIgRAFQgMADgJAMIgNAPQgPAPgFAAQgFAAgDgFIgBgEIAAgBIAAgFIABgEQAAgYgOgaQgOgXgdgaIAAgBIAAgBQgGgFgDgFIgIgNQgFgJAAgEQgCgIgNgFQgQgEgDgDIgRgMQgNgHgDAAQgDAAgVAGIgWAGQgmACgHAEIgEADQgDADgDABIgIAAIgVgEQgHAAgQATQgPAUgGALQgLARgaAKIgSAHQgLAEgDACIgcAYQgRAQgNAKQgEADgGAHIAwhXQAWgpASgQQAvgoBAgTQA/gSA7AIQA9AHAlAhQApAlAAA9IAAABIgCACQAAAEAIAAQALAAAMgFIAxgYQAQgFAMAAQAkAAAWA2QAKAZAEAeQAAAIgEAPQgGATgHAMQgXAngkAAQgZAAgRgSQgFgGgEgIQgDgHAAgDIgZAIQgQAFgMAAQgqAAgZgUQgSgPgNggIgTg5QgPgigVgPQhPASg5A0QgZAWgXAaQgQATgYAiIgjAyQgYAfgMALQgTATgVAKQgWALgbAAQgXAAgmgbgAklCKIgggRQgPgJgGgHIgGgKIgJgIQgKgIgbgJQgOgEgLgIQgHgEgOgMQgLgJgVgKIgBgBIAGAJQANASAEAKIACAEIgMgNQgYgbAAgFIABgJIACgFIACgBIACgBQAFgCAIAAQAXAAAVAOQANAIAYAXQAWAXAOAJQAWAPAXAAQAiAAAhgfQAVgTAQgbQAAACgCACIAAAAIABACIgGAHIgFAIIAAgBIgCACQgRAVgOAVIgSAeQgKARgMAMgAGFi3IgKgYIgCgLQAAgZARgNQAQgMAXACQAXACAPAPQASARAAAaQAAAFgCAIQgFAMgFAIQgSAagfAAQgWAAgRgkgAGcjqIgGAJIAHAKIAHALQADAAAEgGIAGgFQAAgLgFgEQgDgEgJAAIgEAAg");
	this.shape_39.setTransform(235.9,-10.8);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("rgba(107,211,210,0.498)").s().p("AEMDkIABgPIgCgIQAAgDAQABIAKAjIgFAEQgEAFgDAAgAERDdQAAAFACAEIAIAIQAAgBAAAAQABAAAAAAQABgBAAAAQAAgBABAAIgFgLQgCgEAAgDIgBgCIgCgDQgDABAAAIgAkSCNIgdgPQgUgJgdgGIgkgXQgWgNgXgJQgVgJgPgQQgMgOgGgPIARADQAOAEAVACIAMAEIAPAFIADADQAAAAABABQAAAAAAABQAAAAAAABQAAABAAABIAAAEQABADAEABQAJAEAIAAIAGAAIAJACIAJAFIAMAEQANAFAQAIQAXAKANAIQANAIAhAKQAfAJALAAQACAAANgSIAggtQAwhIAWgZIAQgVQAKgMAJgIQAZgWAogMQAKgDAMgNIALgMIAMgMIAmgeIAJgEQAQgHAHgGQAIgHALgHQATgLAMAAIAEABIACAFQAEAHAEgBIALgGIAkgYQALABgBAQIAAATIAIAlIgJAYQgJAWgBANIgBBAIALAoIAAACIgFAAQgIAAgGgHIgUgfQgKgRAAgCQAAgJALg4IALg9QgBgKgEABQgDABgMAOQgDgDgHgCQgJgCgLAAQgKAAgaAZIgVATIgSANIgMAHIgFACIgEAAQgGACgCAEIgQAPIgNAOQgRANgQAAIgFgCIgCgBIgGAAQgQAQgPARQgOAQgHAPQgHAPgLARQgKANgQAUQgEAEgLARIgqBDIgDABQgFADgHAEIgIAGQgKAHgSAFQAAgIhJgNgAnTAYIgBADQAQAQAhATIA3AcIAAAAIAWALQAwAUAmAKQAsANAgAAQAGAAASgWQAMgRAXgkIAmg+QAWggAJgNQAQgSAHgGQAOgPAJgEIAGgCIAIAAQAOgDAKgGIAWgPIAJgIQAJgNAWgRQAQgNAWgPIAwgdIALADQAKAEAGAAQADAAADgDIAGgHQAJgKAHAAQAFAAACAJIAAAOIAAABIAAAAIgNA4IAAABIgGAgIAAAEQAAAYACASIAIARQAFALAKAPIACADIgIgXQgGgOgCgKIgBgHQAAgsALgqIAHgcQADgOAAgLQABgVgGgFIgCgBIgCAAIAAgBIgBABIAAAAIgIACIAAAAIgBABIgRAOQgKAIgFAAQgGAAgDgCIgJgGIgDAAIgGgBIg1AhIAAAAIgGAEQguAggPARQgGAHgPALIg5AhQgQALgIAKIgCABQgNAQgeAqIgLAOIgBABIgDAFIgBABIgBABIgBABIAAAAIAAABIgGAIIgBABIgCAEIgBABIgCADIgBABIgBAAIgBACIgBABIAAABIg3BPIgUgBQgZgCgfgLIhpglQgjgNgHgEIgNgJIgBgBIgNgJIgBAAIgBgBQgXgQgHAAQgBAAgBAAQAAAAgBAAQAAAAgBAAQAAAAgBAAgAGdBfIgQgTIABAAIAGABIAIACQAJAAAHABIAGACQADAAAIgdQAGgdAAgIIAAgFQAAgGgDgBIgFAAQgEACgDgBIgGgEIgHgEQgEgBgFAAQgKAAgKAEIgJAGQgIAAgNgEIgNgFQgHABgGAHQgEAHAAADIABATIgBAEQAAACgCACIgKAGIgFACQgOAFgSALIgCABIgIAAIgCAAIgTgEIAKgJQAIgEAMgCQAHgCAGgGQAHgHAAgDIAEgTQADgLAEgGQABgCAKgFIAugXIAfABIASALIALAJQAHAFABAAIAQgKIAWAAQADAFAEAFQACACAAAGQAAAHgCAEIgGAQQgCAGgBAJIgCAOIgCAOQgCAGgLAIIgFAGIgFAKQgGANgGAAQgIAAgQgQgAGoBlIAMACIAEgJIAIgMIABgDIAIgFQAJgRAAgEQAAgPAGgQIADgMIACgKQAAgDgCgCIAAAAIgDgCIgZABIgHACQAAABABAAQAAABAAAAQAAABAAAAQABABAAAAIAAAAIABAAIANgCQAKABABABIABACIAAAMIgCAJIgBACIgHAXIAAAAIgHAUQgCAGgJAFIgFAPQgOgBgJgKIAAgCIgFgCIgCgBgAFigUIgFACQgOAEgKALIAAAAIgDAFQgEADgCAGIgGATQgEALgUAJIgKADIgGABIgCABIAIACIAKAAIAMgCIABAAQAIgCAFgGIAEgIIAAAAIABgDIAAAAIAEgLIACgCIgCgKIADgFIAGgFIAMgJIAIgFQAGgCAGADIADABIATgBIAeAFIAHAAIACgBQABgBAAAAQAAAAABgBQAAAAAAgBQAAAAAAgBQgFAAgPgIIgKgFIgDAAQgYAAgOADgAG+jgQgEgGAAgBIAAgCIABgBIAMgCIADAHIACAFQAAACgDACIgEAFgAHAjkQAAADABABQABABAAAAQABAAAAABQABAAAAAAQABAAAAAAIACgEIgEgGIgDABIAAAAIAAAAg");
	this.shape_40.setTransform(240.4,-11.9);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#FFFFFF").s().p("AlPCiIgngPIgNgFIAAAAIgrgWQgPgJgBgHQgBgDgGgJIAAAAIANAJIABABIAOAJQAGAEAjANIBpAmQAfAKAZACQgEADgCAAQguAAg8gTgAi+CjIAAgCIAqg9IABgBIABgBIABgBIAAgBIABgBIACgDIABgBIACgDIABgBIAGgIIAAgBIABgBIAAgBIACgBIAAgBIADgFIABAAIALgPQAegqANgPQhiCqgOAAQgGAAgBgEgAGxBqIAAgBIACgGIAAAAIAHgWIABgDIACgJIAAAAIAHgUIABAAQABACAAADIgBALIgEAMQgGAQAAAPQAAAEgJARIgHAGIAGgZgAD9BsIAAgDIAAgBIAKgDQAUgJAEgLIAHgTIABgBQAEgEAEABIgBABIgEAFIACAKIgCADIgEAKIAAABIgBACIAAAAIgBACIgBABQgHAJgHAEIgBAAIgNACgAGHAtIgegEIgFAAQgQgGgJgEQAOgEAYAAQAJAEALAHIAJAHgADPgWIgHgbIAAgCIAGgfIAAgCIALgRQAEgGACgGQABgEgBgEIgCgHQgCgEAAgGIAAgCIABgBIAAgBIADgYIgFgFIgFgFIABAAIAHgDIABAAIAAgBIABABIABAAIACABQAGAFAAAVQAAALgDAOIgIAcQgKAqAAAtIABAGQgDgFgCgLgAgNgmIgEgEIABgBIAcgQQAQgLAFgGQAPgSAvggIgYAhQgVARgKAMIgIAIIgBAAIgSAMQgMAGgIAAIgGAAgABih6IgCgCQAAgCAEgDIAAgBIA1ghIAGABIg6Arg");
	this.shape_41.setTransform(242.6,-17);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#A2F2FC").s().p("AEPDjQgBgDAAgFQAAgIADgCIACAEIABACQAAADACAEIAEALQAAAAAAABQAAAAgBAAQAAABgBAAQAAAAAAAAIgJgIgAkDCBQgmgKgwgVIgWgKIANAGIAnAOQA8ATAuAAQACAAADgCIAUABIAOgTIAAADQABADAGAAQAOAABiiqIABgBQAKgLAPgKIAagRIAFAEQAMADAPgJIgEADQgKAHgOADIgIAAIgGACQgIAEgQAPQgGAGgPASQgLAMgVAhIgmA9QgXAlgNAQQgQAXgIAAQgfAAgsgNgAGmBiIgTgWIABABIAEACIABABQAJALAOAAIAFgOQAJgFACgHIAFgNIAAAAIgHAZIgCADIgHALIgEAJgAmmA8QghgTgQgQIACgDQAAAAAAAAQABAAAAgBQABAAAAAAQABAAABAAQAHAAAXARIACAAQAGAJAAAEQACAGAPAKgAEJA1IADgBIAEgBIAAAAIABAEgAE3AoIABgBIgDAFQgFAGgHADQAGgFAIgIgAHSAAIgCgCQgBgCgLAAIgMADIAAAAIgBgBQAAAAgBgBQAAAAAAgBQAAAAAAgBQgBgBAAAAIAHgCIAZgBIADABIgHATgAE+AAIAEgFIAAgBQAKgKAOgEIAFgCQAIAFARAFIgOABIgCgBQgIgEgFADIgIAFIgMAIIgEAFQgEgBgEADIgBABQACgFACgDgAGYgPQgKgGgKgEIAEAAIALAFQAOAHAGABQgBABAAAAQAAABAAAAQgBAAAAABQgBAAAAAAIgCABgAD0gQQgJgOgFgLIgHgRQgDgSAAgYIAAgDIAGAbQADALADAFQABAKAFAOIAIAYgADvjBIAAABQAAAGACAFIACAHQABAEgBADQgCAHgEAFIgLASgABzizIAEgEQgDAEAAABIACADIACADIA7gsIACABIAKAGQAEACAEAAQAFAAAMgJIARgNIAAgBIAEAFIAGAGIgEAXIAAgMQgBgJgFAAQgJAAgIAKIgGAHQgEADgCAAQgGAAgKgEIgKgEIgxAeQgWAPgQANgAG+jiQgCgBAAgEIAAgDIABAAIAAAAIAEAAIADAGIgCAEQgBAAAAAAQAAAAgBgBQAAAAgBAAQAAAAgBgBg");
	this.shape_42.setTransform(240.7,-11.7);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("rgba(107,211,210,0.2)").s().p("AD3D9QgGgLgDgNIgDgOQAAgmAZgPQAXgNAgAHQAgAIAXAVQAYAXABAaQgBAZgUAMQgXAOgxAAQglAAgSgggAEaDgIADAIIgBAPIAMASQAEAAAEgEIAEgFIgKgiIgEAAQgLAAgBACgAkhC2Qg1gZg5gpQgtgggoglIgYgYQgJgJAAgDQAAgOALgKQAMgLATAAICAA8QCCA+AOAAQAQAAAfghQAXgYAmgyIA9hTQAhgrANgMQA2guAxggQA5gmAqgNQAxgQAaARQAdATAAA7QAAANgDAXQgDAbgGARIAABAQBngGA5AUQAaAJANAPQANANAAATQAAAtgJAjQgTBFgyAAQgtAAgUgxQgHgQgDgWIgEgaIgLADIAAgDIAAgTQAAgEADgGQAGgJAIAAIAMAFQANAFAIAAIAJgGQALgGAKAAQAEAAAFACIAHAFIAFADQADACAFgCIAFAAQACABABAGIAAAFQAAAIgHAdQgIAdgCAAIgHgCQgGgBgJAAIgIgCIgGgBIgBAAIAQATQAPAQAIAAQAGAAAHgNIAEgKIAGgGQALgIABgHIACgNIADgOQAAgJADgGIAGgQQACgEAAgIQAAgGgCgCQgFgFgCgEIgXAAIgPAJQgCAAgGgGIgLgHIgSgLIgggBIgtAVQgKAGgBABQgFAHgCAMIgEATQgBADgGAHQgHAGgHABQgLACgJAFIgJAJIASADIgLABQgzAAgXgdQgUgXgBgqQgCgaAJgzIAFghIADgZQgNAUgcAXIg2ApQgkAbgTARQgbAZgOAYQgHANgZAeQgbAggbAbQggAigYATQgdAXgMAAQgwAAhAgegAnFA8QAOAQAWAIQAWAKAXANIAkAXQAcAGAUAJIAdAOQBJANAAAJQATgFAJgHIAIgGQAHgFAGgCIADgBIAqhDQAKgSAEgEQARgTAJgNQAMgSAGgPQAIgOAOgQQANgRARgQIAHAAIACABIAFABQAPAAARgMIAOgOIAPgPQADgEAFgCIAFAAIAEgCIANgHIASgOIAUgTQAbgYAJAAQAMAAAIACQAIACACACQANgNACgBQAFgBAAAKIgLA8QgKA5gBAIQAAADAKARIAUAeQAGAGAJABIAFAAIgBgCIgLgnIABhBQACgMAIgWIAJgYIgHgmIAAgSQAAgRgLAAIgjAXIgMAHQgEAAgEgGIgCgFIgDgCQgMAAgUAMQgLAHgIAHQgHAFgPAIIgJAEIgnAeIgMAMIgKALQgMAOgLADQgoAMgZAWQgJAIgJAMIgRAVQgVAYgxBJIgfAsQgOATgCAAQgLAAgegKQgigJgNgJQgNgHgXgLQgPgHgOgFIgLgEIgJgFIgJgCIgHAAQgHAAgKgEQgDgBgBgDIAAgFQAAgBAAAAQAAgBAAAAQgBgBAAgBQAAAAAAAAIgEgDIgbgKQgUgBgPgEIgQgDQAGAPAMAOgAFMBEIAFgBIgFAFQgGAHgLADIgPADQATgLANgGgAGRihQgEgKgBgKIAAgMQAAgeAQgPQAOgNAUACQAUACAOAPQARARgBAWQAAARgGAPQgMAdggAAQgiAAgLgdgAHLjXIgBABIAAABQAAACADAGIAHAJIAFgFQAAgBABAAQAAgBABAAQAAgBAAAAQABgBAAAAIgCgGIgEgGIgLACg");
	this.shape_43.setTransform(238.8,-13.8);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("rgba(107,211,210,0.498)").s().p("AGeB6QgEgIAAgSIAAgCIAAgCIALAAIACgEIAAgDQAAgFgDgGIgCgJQAAgFAMgSQALgTAAgEQAAgDgDgEIgDgFIAAgBIABgBQAAgCgEgDQgFgDgBgCQAHgNAIgCQAHgCAIAGQAGAGAFAKQAEAJAAALIgLAVQgBAEgLAFQgJAFAAAEIAEALQAEALACAIQABAJAEAIQACAGAAAIIAAAGQgBAEgDADIgUAAIgFABQgJAAgEgMgAGkB4IAAAAQAFAFAGABIAGABIABAAIADgBIABgBIACgCIgBgDQgCgHgCgVIgDgbQAAgIADgGIAIgHQAEgEADgEIABgCQADgGAAgLQAAgDgEgFIgBgBIgIgJQgHgGgGgDIAJAKQAFAEADAFIACAGIABAGQAAAIgIAIIgDADIgHAFIAAABQgDADAAACIgBAeIADAlIgEAAIgGgGQgDgEAAgFIgBgFIgDgBgAlBBLIgXgGQgUgFgHAAIgOACQgIACgGAAQgaAAgPgHIgegUIAEgCQANgGAOAAIANABIAGACIBYAAIAPgCIAJABIAKADIAKAEQAGACAHAAQANAAAYgJQAXgJAHgJIAUgSQASgPANAAQAgAAAMgEIAwgdIAdgVQAQgLARgEIAIAIQAJAIAEAAQADAAAegPIAqgTIArgQQAlgOAGAAIAvAsQADAEATASQAOANAGAJQAIACADADQAEADAAADIgBADIAAAiIAAABIACABIAWgPQAOgKAKAAIAZABQASACAPAFQANADAGAAIAFAAIACAAIACADIAAABIgYAJIgWANIgHAAIgJgCQgHgCgNAAQgJAAgJAGIgQANIgPANQgIAGgHAAIgBgBIAAAAQgBgWgIgXQgGgPgOgbQgTgCgEgDIgGgHIgJgHIgSgUQgHgIgGgFQgGgGgOACQgNADgRAHIgiAOQgWAJgKADIgVAAIglAKIgGADIgKgEQgGgBgDABIgOAJIgLAKQgDABgDAEIgFAEQgFAFgRAEIgbAHIgWAGIgjAQQgRAJgJAKQgKALgXAOIgVANIgTgCQgEAAgDABIgIABgAnCAqIABABIACABIABAAIAGADIAAAAIAHACIABAAIAJABIABABIABAAIAtAGIA2ABQADABAOACIAuAEIA0ghQA2ggALgEIAlgLQAcgJAIgHQALgLAMgHQAUgOAJAAQAEAAABABIACACQAGAEARAAQAMAABBgWIBHgYIAPAAQAHAMAaAUIAVAQIAUARIACADIAGANIAAACIAAAAIAGAVQADAQADAFQADAKAGAAQADAAAEgEIAEgEIABgBIAAAAIAEgDQANgNALgBIACAAIAQgCIAogCIAZgIIAAgBIgmgDIgCAAIgBAAIgXgDIgDAAQgPAEgOAHQgMAFgHAGIgIAJQgFgFgDgLIgIglIgEgIIgFgGIgegaQgYgWgLgLIgHgHIgJAAIgIAAIgEAAQAAAAgBAAQgBAAAAAAQAAABgBAAQAAAAAAAAIgIACIhvAlIgZAHIgcgGQgJAAgNAHIgWARQgRANgMAGIgBABQgTAKgUADQgeAGgQAKIgHAFIgBAAIgDADIgKAIQgMAJgeAPIgfAPIgEAAIgYgCQgZgCgEgBIg2gBIgogHIAAAAIgdgBIgBAAQAAAAgBAAQAAAAAAAAQAAABgBAAQAAAAAAAAg");
	this.shape_44.setTransform(234.3,-10.7);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#FFFFFF").s().p("AGwB5QgBgIgCgUIgBgoQAAgCAJgJIACgLQAJgHAAgJIgBgGIACgHIABABQAEAFAAAEQAAAKgEAHIAAABQgDAFgFADIgHAHQgDAGgBAIIAEAbQACAVACAHIABADIgCADIgBAAIgEABgAkMA7IgUgBIANgJIAEAAIAegPQAfgPALgIIALgJIADgCIABAAIAHgFQAQgLAegFQAUgEATgKIAMgBIgnAQIgVAIIgGACQgLAEg2AgIg0AhgAlGA0Ig2gBIgtgGIgBAAIgBgBIgJgBIgBAAIgHgCIAAAAIgHgCIAAAAIAAgBIAAAAIAcAEIAmAFIAvAAIAFACIAAABQABAAASAAIAFAFQgOgBgDgCgAm3AmIgNgDIAeABIAaAFQgagBgRgCgAEdAUQgPAAgEgIQgCgCAAgDIAAgDIgHgRIAAgBIgDgKIAAgBIgBgCIgFgNIAAAAIgCgIIAAgDIgIgFQgVgLgQgRQgNgLgMgPIgLACIgIAAIg8AUQgYAJgWgBIgQAAIBuglIAQgDIAIAAIAJAAIAHAHQALALAYAWIAeAaIAFAGIAEAJIAIAlQACAKAGAGIAIgJIAvgUIAAgDIAEAAIAXADIABAAIABABIAnACIAAABIgTAHIgVgCIgIgCIgRAIIgRABIgBAAQgLACgNAMIgEADIgBAAIAAACg");
	this.shape_45.setTransform(234.7,-10.1);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#A2F2FC").s().p("AGuBzQgHgBgEgEIAAgBIgFgXIADACIABAFQAAAEAEAEIAFAHIAFgBIgDgkIABgeQAAgDACgDIABgBIAHgFIACgDIgCALQgJAJAAACIABAoQACAUABAIgAkyAyIgFgEQgSAAgBgBIAAgBIgFgCIgvAAIgmgFIgcgEIAAAAIAAABIgCgCIgBAAIACgBIANACQARADAaAAIAOADIA2AAQAEACAZABIAYACIgNAJgAENANQgDgGgEgPIgCgLIAAABIAHASIAAACQAAADACACQAEAIAPAAIABAAIgEAEQgEADgDAAQgGAAgDgJgAHAAAQgDgFgFgFIgJgKQAFACAIAHIAIAJIgCAHgAExgMQANgGAPgEIAAACIgvAUQAHgFAMgHgAFhgMIAIABIAVACIgGACIgoADgAh0gZIAngPIgMAAIABAAQALgGARgNIAXgRQAMgHAKAAIAcAFIAZgHIAQABQAUAAAWgHIgHACQhBAWgNAAQgQAAgGgDIgCgCQgBgBgEAAQgJAAgUANQgMAIgLAKQgIAHgcAJIgfAKIAVgJgAD5gvIgUgRIgVgRQgagTgHgNIgHAAIALgCQAMAPANALQAQARAVALIAIAFIAAADIACAIg");
	this.shape_46.setTransform(234.4,-9.6);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("rgba(107,211,210,0.2)").s().p("AFhCcQgSgOgBgcQgBgUAGgZQADgJAGgRQABgBAAAAQAAAAAAAAQAAgBAAAAQAAAAgBAAQgCgDgKAAQgJAAgLAGIgUANQgPALgGACQgKAGgLAAQhRAAgdg4QgKgRgEgXIgCgYQgoANgxAOIhEASIg4ARQgaAKgRAKQgLAGgRAPIgjAeQgUARgQAJQgTALgPAAQgwAAgtgLQgmgKgfgPQgZgLgTgQQgPgNgBgGQAAgPALgIQALgIARAAQARAAATAFQAQADASAGIAcAKQANADAFABIgOABIhZAAIgGgCIgNAAQgOAAgMAFIgFACIAfAUQAPAHAZAAQAGAAAJgCIANgBQAHAAAUAEIAYAGIAlABIAHgBQADgCAEAAIATACIAVgMQAXgOAKgMQAKgKAQgIIAjgQIAWgIIAcgGQAQgEAFgEIAGgFQACgDADgCIAMgJIANgJQADgCAGACIAKADIAGgCIAlgLIAVAAQAKgCAWgJIAigPQASgHAMgCQAPgCAFAFQAGAFAHAIIASAUIAJAIIAHAHQADACATADQAOAaAGAQQAIAXABAWIAAAAIACAAQAHAAAHgGIAQgNIAQgMQAIgGAJAAQAOAAAGABIAJADIAHAAIAWgNIAYgLIAAAAIgCgCIgCgBIgEABQgHAAgNgEQgPgFgSgBIgZgBQgKAAgOAKIgWAOIgBgBIgBgBIAAghIABgEQAAgCgDgDQgEgEgIgBQgGgJgOgOQgTgRgCgFIgwgrQgGAAglAOIgrAQIgqATQgeAPgCAAQgFAAgIgIIgJgJQgRAEgQAMIgdAUIgwAdQgMAFggAAQgNAAgSAOIgUATQgGAJgYAIQgXAKgOAAQgHAAgGgCIgKgFIgKgDIAngBQAigaAYgTIA2guQAkgdAZgRQAjgYApgXQAagOAUgGQASgFAUgCIAhAAQAWAAASgDQADAAAOACIAcAGQAnAKAKALQAIAMAFAMQACAGAEATIAHAYQADANAHALQAKgCAJgEIAQgIQAJgFAGgCQAIgDAKAAQA2AAAmAdQAeAWARAoQAMAcAGAmQACAPAAASQABAUgLAOQgSAXgoAAQgqAAgUgTgAGPBkIAAACQAAASAEAJQAFAPAOgFIATAAQADgCABgEIAAgHQAAgIgCgFQgEgJgBgIQgBgIgFgLIgEgMQAAgEAJgFQAMgFABgEIALgVQgBgKgEgLQgEgJgHgGQgHgGgIACQgIACgHANQABACAFADQAEADABACIgBABIgBABIADAFQADAFAAACQAAAFgLASQgMASAAAFIACAKQADAFAAAFIAAAEIgCADIgLAAg");
	this.shape_47.setTransform(235.4,-11.3);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("rgba(107,211,210,0.498)").s().p("AGbCSQgFgDgFgHQgIgMgLgeIAIAAQACAAAKAKQAJAJAFAAQAEAAAIgOIAIgJIAHgFIADAMQgBAEgFAGQgGAHAAAEIABAEIABADIgDAMQgDAMgEAAQgIAAgHgDgAGUCBIAIAHQAEACADAAQABAAABAAQAAAAABAAQAAAAABAAQAAAAAAgBIACgDQgDgKAGgJIAHgHIgBgLIgCAAQADAGgHAJIgMAOIgDgBIgTgXIgCAAgAB+A8IgfgBIg1gnIgKgKQgFgFgDgFQgDgEgGgGQgIgIgHAAIgGACIgGgJQgOgPgkgFIgFgFIgBAAQgFgEgKAAIgJAAIgFACIgDgMIgCgHIgFgFIgYgDQgTgCgJAFIgOAIQgKAFgKACQgVACgaAMIgyAbQgFADgNABIgPACQgEACgIAGIgYARIgVAIIgRAKQgMAHgFAAQgWAAgLgHIgGgDIAKgCIAagIQAEgCAMgIQALgJAFgDIBOgtIAVgLQAKgFAKgCIAegGQAdgHADgBQAagKAVgGIA+gPIAIAAQAJACADACQADACABADIAAAGQACAEABACIAHAEIAHAFQAIAFAAAFQAAAGAIAFQAEACAPAGIAfARIAXASIADABQAFACAIAIQAIAHAEACIAPAIQAHAEAFAGQADAGAMAFIALAFQAGADAIgBQAOAAAKgRQAEgGACgGQACgFAAgDIAAgFIgCgDIgDgBIAJgQQAKgSAWgXIAUgVIAVgUQAcgXAkgQIAWgBQAAAHgCAEQgCACAAAEIABAOIgLASIgGASIgKASQgFALAAAHIAAAGIABADIACADIAHAIIAFALQAGAJAFAAQAFAAANgJQAPgIACgBIAygFQAMgDgBgFIgBgHIgCgOQAAgBAAgBQAAAAAAgBQAAAAAAgBQAAAAABgBQACgGAQAAQADAAAKAJQAMAJABADQAAAFgCADIgGAKIgEgEIgDgEQgDgGgFAAQgFAAgBAGIgCAIIACACIAFADQAAADgLAEIggALQgPAFgEABIgLgCQgSAAgHAMIgEAKQgCAEgEABQgBAAAAgBQgBAAAAAAQgBAAAAAAQgBgBAAAAIgFgDQgGgDgQAAQgOgJgLgPQgKgPgBgLIAAgFQAAgNAJgSQAKgOAAgDIAAgBIAAAAIgCAAQgCAAgFAEQgIAHgRASQgbAdgPASQgGAHgGALIgJATIgJAUQgDAHgIAGQgLAFgMAAgAhnhYIAEACIAEAEIACACIACAJIAAABQACAFAGADIANADQAWAFAWALQALAGASALIAcARIA0AyQAVANAJAAQAeAAAQgPQAIgGAFgKIAZguQALgRAJgLQAcghAugbIAAABIgMAlQgIAcAAAMIACAHQADAKAFAHQAJASAPADIAHACIABAAQAGgBAGgFIAGgGIABAAIACgCIAAAAIAHgCIABgBIABAAIAdgGQACgBALgFQAMgEAIgCIALgDIAGgBQgHgBgGgBIgBAAQgGAAgtAOIgRAFIgIAGQgLAHgFAAIgBAAIgDgBIAAgBIgBAAIgFgDIgTgPQgCgCgEgJIgCgEIgCgGIAAgBQABgJAHgUIAKgaQAGgPAGgLIACgGIgBgFQgEgIgKAEIAAAAQgMAFgUARQgRANgSASIgXAYQgMAPgHALIgMAUQADABAAAGIgDAJQgDAIgFAIQgHAKgKAFQgJAFgNAAIgEAAIAAgBIgMABQgKAAgjgfIg1gsIgFgCIAAgBQgOgIgTgHIgBgBIAAAAIgEgCQgKgCgDgDQgJgDgDgDIgFgEIgMgIQgEgDgBgDIAAAAQgDgHgDgFIgGgEIgBgBQgFgCgFAAIgDAAIhiAYQgWAGgSACQgjAOghAQIgoATIg1AgQgLAIgGABQgIADgIABIgFAAIACACQAFAGAIAAQAEgBBAggIBEgkIA2gUQAWgIAJgDIBTgUgAGkg4QgEACAAAHIABAGQABADACACIAAAAIABgIQABgGABgEIALADQADACAAACIAEAKIABgBIABgHQAAgEgFgDQgDgEgGgBIgEgBIgFACg");
	this.shape_48.setTransform(230.5,-5.5);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("rgba(107,211,210,0.2)").s().p("AFsCJQgLgOgFgMQgHgLAAgDQAAgIAFgIQAHgMAOAAQANAAALAMIAGAJIAGAGQALgUAMgHQAKgGALADQAJACAGAJQAGAJAAAKQAAADgFANQgIAQgHAKQgXAjgRAAQgSAAgagkgAGDCGQAFAGAGAEQAGADAIAAQAEAAADgMIADgNIgBgDIgBgDQAAgEAGgHQAGgGAAgFIgDgLIgHAFIgIAIQgIAOgEAAQgEAAgKgIQgKgKgCAAIgIAAQALAeAIAMgAAZA4QgRgPgOgPIgPgPQgDgEgagQQgYgQgFgHIgCgJIgBgLIABAAIAFAFQAkAFAOAPIAGAJIAHgCQAHAAAHAIQAHAGACAFQADAEAFAFIALAKIA1AnIAfABIAIAEQAMAAAKgGQAJgFACgHIAJgUIAJgTQAGgLAHgHQAOgTAbgcQARgSAIgHQgaAXgUAhQgGAJgMAWIgcA5QgIAOgGAHQgRATgaAAQgcAAgxgrgAnOAnQgFgFAAgJQAAgLAWgNQASgKAggNIA0gTIg4AhQgFADgLAIQgLAJgEABIgbAIIgJADIAFADQALAHAXAAQAEAAAMgHIASgKIAUgIIAYgRQAIgGAEgCIAPgCQANgCAFgDIAygaQAagMAVgCQALgCAJgFIAOgIQAKgFASACIAYADIAGAFQgaABgaAHQgYAHgYAOIglAYQgTANgNAFQgmAPgmAOQg8AWgUAAQgPAAgHgKgABmAgQAHgDAIgOQAIgNALgbIAVgtQAMgXAJgJQBIg+AlgHQAogJAAA2QAAAdgOAbIgKATQgEAIAAAFIAAAFIABAAIASgKIAigSQAxgaASAAQAcAAAKAQQAFAIAAAKQAAALgHALQgJANgNAAQgEAAgGgCIgHgEQgEAIgRAKQgMAGgYAKQgVAJgSAFQgVAFgKAAQgmAAgJgdQgCgKAAgKIABgPQABALAKAPQALAPAOAJQAQAAAHADIAEADQABAAAAAAQAAABABAAQABAAAAAAQABAAAAAAQAEAAACgEIAEgKQAIgNARAAIALACQAEAAAQgFIAfgLQALgEABgDIgGgDIgBgDIABgHQACgGAEAAQAFAAAEAGIACAEIAEADIAGgKQACgCAAgFQAAgEgMgIQgLgJgDAAQgPAAgDAGQAAAAgBABQAAAAAAABQAAAAAAABQAAABAAAAIACAPIACAHQAAAEgMADIgxAGQgCAAgQAJQgMAJgGAAQgFAAgGgJIgFgLIgGgIIgDgDIgBgDIAAgGQAAgHAGgMIAJgRIAGgTIAMgSIgCgNQAAgEACgDQACgDAAgHIgWAAQgkARgbAWIgWAVIgUAVQgVAXgLASIgJAPIAEACIABADIAAAFQAAADgCAFQgCAGgEAGQgJARgPAAQgIAAgGgCgAgBgoIgggSQgPgFgEgDQgHgEAAgGQAAgGgJgFIgHgEIgHgFQgBgBgBgFIgBgFQgBgEgCgBQgEgDgJgBIgIAAIg+APQgUAFgbAKQgDACgcAGIgfAHIAHgFIAqgYQA+gfBEAAQAgAAARAKQANAIAHAQIAKAcQAGAOAKAGQAEACANAOIAKAKgADxgtQAAgIABgGQADgQANgOIACAAIAAAAIAAABQAAADgKAOQgJARAAANg");
	this.shape_49.setTransform(231.8,-5.3);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#FFFFFF").s().p("AGQCGIgIgHIgKgXIALAKIAIAJIABAAIAKALIgBACQAAAAAAAAQgBAAAAAAQgBABAAAAQgBAAgBAAQgDAAgEgDgABHAnIg0gxIgbgSQgTgLgLgFQgWgLgWgGIgMgCQgHgEgCgFIAAgBIgCgJIAAgCIAAgDIgDADIgDgDIAAgCIgDgDIgJADIgLAAIgyALIgBgBIgGgCQgCgBgJAAIBVgWIAEAAQAFAAAFACIABACIAAgBIAGAEQADAGACAGIAAAAQACADAEAEIAAAAQACAHAHAGQAKAGAWAEIABAAIAEACIAAAAIABAAQATAHAPAJIAAAAIAEAHQAGAHAGAEIALAKQAQAPAKAHQAoAgAXAAQAKAAAJgGIAFgDQAKgGAHgKQAFgHADgJIADgJQAAgGgEgBIANgUQAHgLANgPIAWgXQATgTAQgNQAUgQAMgFIABAAQAKgEACAHIgYASQgyAlgbAiQgFAGgGAPIgXAqQgGAKgHAHQgQAOgeAAQgJAAgVgNgAEtAMIgIgBQgOgEgIgQQgEgFgDgKIgCgHIABgKIACAAIAAACIAAABIACAGIAGANQAJARAMABIAAABIAFABIACABIAAAAIACABIABAAQAFAAALgHIAIgFIARgGQAtgNAGAAIABAAIgPAFIgkAKQgGACgKAGIgBABIgHADIAAAAIgCABIAAABIgSALgAmHgFIBFglQAhgPAjgOQARgDAXgFIAHgCIgwAVQg0AXgUAHIhUAlg");
	this.shape_50.setTransform(231.7,-5.3);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#A2F2FC").s().p("AGeB7IACAAIALgNQAIgJgDgHIABAAIABALIgGAHQgGAJACAKIAAACgAGJBnIgBgDIACAAIALANgAA8AMQgJgGgQgQIgMgKQgFgEgGgHIgFgHIAEADIA1AsQAjAeALAAIALAAIABAAIAEAAQAMAAAJgEIgEAEQgKAFgKABQgXAAgoghgAm3AXIgCgCIAEAAQAIgBAIgCQAHgCALgHIADgDIBVglQAUgHA0gXIAwgVIAEgBQAKAAACABIAFADIABABIggAIQgKACgVAIIg3AUIhDAkQhAAhgFAAQgHAAgFgGgAFKABIgFAFQgHAFgFAAgAEYgMQgFgHgCgJIgCgHQAAgNAIgcIALglIAAgBQguAcgbAhQgJALgLARIgDADQAGgPAFgFQAcgjAxglIAZgSIABAGIgBAFQgHAMgFAOIgKAaQgIAUgBAJIAAgCIgCAAIgBALIACAHQADAKAEAEQAIAQAPAEQgQgEgJgSgAEcgUIgFgMIACADQAEAKACACIASAPQgMgBgJgRgAFWgFQAJgHAGgCIAlgKIAOgFQAHAAAHABIgGACIgLADQgJACgLAEQgLAEgDACIgcAGgAGjgnQgCgBgBgDIAAgHQAAgGAEgDQADgCAGACQAFABAEADQAEADABAEIgBAHIgBABIgEgKQAAgBgDgCIgLgDQgCADgBAHIAAAHgAggg4QgWgEgLgGQgGgGgCgGIgBgBIASALQADAEAJADIAMAFgAhghVIACgCIAAACIAAACgAhohaIgIAAIAJgDIADAEIABABg");
	this.shape_51.setTransform(230.5,-5.2);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("rgba(107,211,210,0.498)").s().p("AFCCEQgWgBgCgCIgBgCIgBgFIgEgGIgCgGQADgEAJgDIAOgDQAHgBAGACQAFABAAAFIgCAKIgFAPgAErByIAFAFQAEAEAGAAQAKAAADgDIACgBIgWgJIgGgDgAAvAQIgNgMQgJgGgLgCIgWgBQgLgEgIgGQgIgKgGgEIgPgNIhjgwQgLAAgWAPIgYASIgBgBQgBgEgCgDIgEgFQgIgIgIAAQgMAAgQAMIgRAOIgPAEQgMACgDABIgTANIgFAAIgTgCIgCgBIArglQALgIAHgDQALgGATgFIAUgJQANgHASgDIAgAAIAHABIAWAAIAFABIAEACIAKACIAAABIACACIAXACQATABAFACQABABAAAAQABABAAAAQAAAAABABQAAAAAAAAIAAAEIADAFQAEAHAHADQAIADALAJIAVAOIAWAOQANAJAHACIAWAEQANACAEACIAVAEIAZAGIAIAAIASgcQALgSAJgKIAMgPQAJgKAHgEQAWgQApgHQgEAHAGAJIANAQIAOAUQAKANABAAIAFgDIAPgJQAGgDADAAQAFAAANAKIASAOQAAAEgGAGQgGAGgBAAQgFAAgKgHIgHgFIgFgCQgDAAgDADIgGAIIgFAGQgFAEgCAAIgHAAQgLgCgIgLIgKgQIgGgHIgHgLQgLgOgGAAQgIAAgFAEQgFADgCAHIgGARIgHAXIgIgBIgDABQgBAAgBAAQgBAAAAAAQgBAAAAABQAAAAgBAAIgCAEIgFAIIgLAPQgFAHgCAHIgEAPIhWgPgAhnhJIADACIABAAIAEADIABAAIA4AfQAYAQAxASIAjALIAAAAIAUAGQAXAFAJAAQAGAAAGgNIAQgeIADgFQAKgTAMgOQATgVAYgMQADAKAFAKIAGAJIAJAMIAAAAQAUAZAQAAQADAAADgDIAFgHIAFgHQADgEADAAIAWAKQABAAABAAQAAAAABAAQAAgBABAAQAAAAAAgBIABgEIAAgCIgcgMQgSAWgGAAQgIAAgLgPQgKgNgEgJIgBgCQgOgTgEgHQgcAJgWATQgPANgNAXQgFAHgEAKIgIAOQgHANgGAAIgtgIIgBAAIg2gLQgQgEgOgLQgPgNgIgFIgQgOQgPgLgNgHQglgThAgEIgJAAIgRAAQgFAAgXAHIg2ATQgTALgcASIgJAHIAAAAIABABIAJABQAGAAANgJQAVgOAJgFQAdgQApgHIAagDQARgCAXAAQAIAAAqAVgAFghyIgCgBQAAgBgBAAQAAAAgBgBQAAAAgBAAQgBAAAAAAQAAgGgCgCQgEgEgKADIAAAKQAHgGAFACIAEADIgDgBQgHAAgEACIgIADIgDgIIAAgHQAQgGALAEQAEABACACQABABAAABQABAAAAABQAAAAABABQAAAAAAAAIgBAFIgCAFIgCgBg");
	this.shape_52.setTransform(223,-4.3);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("rgba(107,211,210,0.2)").s().p("AD+B/QgIgIgEgJQgEgGAAgEQAAgNAEgFQAEgGAHAAIARAAIAXABQALAAAPgEIAUgHQAKgBAEAFQAEAIAAATQAAAHgFAIQgFAJgIAJQgJAJgIAGQgKAGgHAAQgdAAgWgYgAEsBeIgOADQgJAEgDADIACAHIADAFIACAFIABADQACABAVACIAGAAIAEgPIADgLQAAgEgFgCIgKgBIgDAAgAAaAiQgTgHgMgJIgYgQQgMgHgLAAQgLAAgSgGQgRgGgUgKIglgVQgPgLgNgLIgjgBIANgJQAXgPAKAAIBjAwIAQAMQAFAFAJAJQAHAHAMAEIAXAAQAKADAIAHIAOAKIBVAQIgCADQgDAFgEACQgJAFgWAAQgcAAgWgHgAB5ALQACgHAFgHIALgPIAEgIIADgEQAAgBABAAQAAAAABAAQAAgBABAAQABAAAAAAIAEAAIgOASQgJAMgKAVIgFAHgAl0gSQgCgFAAgEIgBgFQAAgHALgRQANgSAUgPQAbgUAfgKQAmgNAsAAQASAAAwAYIgXgBIgCgDIAAAAIgLgCIgDgCIgFgBIgWgBIgHgBIggAAQgSAEgNAGIgUAJQgTAGgLAFQgHADgLAJIgrAlIACAAIASACIAGAAIATgMQADgCALgBIAPgEIASgOQAQgMALAAQAJAAAIAIIADAEQgXADgSAHQgUAJgPAOIgYAXQgLAKgGAAQgRAAgFgNgAEdgUIgIgGQgDgDgCAAIgFABIAGgHIAGgHQADgEADAAIAFADIAGAEQALAIAFAAQABAAAGgHQAGgGAAgDIgTgOQgMgLgFAAQgDAAgHADIgOAKIgGACQAAAAgKgNIgPgUIgMgQQgHgJAFgGQgqAGgVARQgHAEgJAKIgMAPQgJAJgLASIgTAcIgIAAIgYgFIgVgEQgEgCgOgCIgVgFQgGgCgOgIIgXgPIgUgOQgMgJgHgDQgHgCgEgHIAoAWQACACAHABIAPAAQATAAAFAEIAWATQAHAIAPAGQAQAJAJAAQARAAAaglIASgdQAJgPAEgFQANgNARgIQAUgJAQgBQATAAANAJQAOALACAXIAAACIALgDIAMgCIABAAQgDgFAAgIQAAgQAQgLQAPgKAWgCQAWgBAOAKQAQALAAAWQAAALgGAJQgJAOgQAAQgGAAgJgHIgKgHQgEAAgHAEIgBAAIAOANIAOATQAFAIAAACQAAAMgIAIQgJAKgRAAQgKAAgMgIgAFKh7QAAAAABAAQAAABABAAQAAAAABAAQABABAAAAIACACIACABIABgGIABgEQAAgBAAAAQAAAAAAgBQAAAAgBgBQAAgBgBAAQgCgCgFgCQgKgDgQAFIAAAHIACAIIAIgCQAFgCAHAAgADBgoQgDgGgBgKQAAgJgBgBIgVAUIACgIIAGgRQACgIAEgDQAGgEAIAAQAGAAALAOIAHALIAFAHIAKAQQAJALALACQgNAEgEAAQgkAAgIgTg");
	this.shape_53.setTransform(224.6,-3.8);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#FFFFFF").s().p("ABnA4IgHgCIgBgBIgFgCIgHgBIAAAAIgjgMIACgCQACgCAEAAIAGAAIATAEIABAAIASADIAUAIIAKADIAkgoIgDAFIgQAfQgGANgGAAQgJAAgXgFgAD+gMIAAAAIgJgMQAEAAAGAEIALALIAKALQAEAFADAAIAPgJQAQgKAGAAQAFAAADAEIABAEIgCADIgPgHQgDAAgDAEIgFAGIgFAHQgDADgDAAQgQAAgUgYgAlIgDIACgCQAcgSATgLIA2gTQAXgHAFAAIARAAIAJAFQgCADgHACIgaADIgIABIgPAAIgVAIQgLAEgfAQQgeAPgEAAgAgtgHIgkgTIgBAAIgEgDIgBAAIgDgCIgBAAIgGgFQgHgHgEgBIgsgLIgTgFQBAAEAlATQANAHAPALIALAKIgBABQgCABgEAAg");
	this.shape_54.setTransform(221.7,-8.5);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#A2F2FC").s().p("AExB6IgEgFIACgHIAcAMIgCABQgDADgKAAQgHAAgEgEgABsAKIgUgIIAcAGQAGAAAHgNIAIgOQADgKAGgHQANgXAPgNQAWgTAbgJQAFAHAOATIABACQADAJALANQALAPAHAAQAGAAATgWIAcAMIAAACIgBAEQAAAAAAABQgBAAAAAAQgBAAgBAAQgBABgBAAIgGgDIACgDIgBgEQgDgEgFAAQgGAAgQAKIgPAKQgDAAgEgFIgKgMIgMgLQgFgEgFAAIgFgJQgFgKgDgKQgYAMgTAVQgMAOgKATIgkAnIgLgDgAglgiIgTgMIAHAAQAEAAABgBIACgBIAFAEQAIAFAPANQANALARAEIAiAHIgFAAQgEAAgCACIgCACQgygSgYgQgAlZgkIgBgBIAAAAIAHgFIACAAQAEAAAegPQAegQAMgEIAVgIIAOAAIAIgBQgpAHgdAQQgIAFgWAOQgMAJgGAAgAiYhbQgWAAgRACQAGgCACgDIgJgFIAKAAIATAFIAsALQAEABAHAHIAGAFQgqgVgIAAgAFMh7QAKgDAEAEQABACAAAGIgDgDQgGgCgGAGg");
	this.shape_55.setTransform(222.8,-4.6);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("rgba(107,211,210,0.498)").s().p("ADYCaIgEgDIAAgEQAAgGAIgEQAFgDALgCQAJAAAIACQAIACAAAHQAAADgEADIgLAFgADtCKQgJACgHAGIADACIAFABQAJAAAGgFIAFgGIgEAAgAA0BgIgpgKQgYgJgJgIIgEgFIgDgGQgGgJgNgCIgBgGIAAgHQABgHgGgEQgGgEgFgGIgGgNIgGgKQgFgGgFgDQgHgEgOgEIgvgMIgFgCIgvgCIgSgBIgVgDIgJgCQgGgCgGAAIgDAAIgFAAQgBgBAAgFIABgFQAAgBAHgEIBIACIADAAIADABIAcAAQATAAAAgBIABgBIAJAAQAPAAAUAIQAVAJAJAJIASASIAbAfQAKAMAKAKIALALIAMAIQARAKARAAIAPAAQAFgBAEgEQADgEADgIIAIgYIABgGIACgFQABgDALgCIALgDQADAAACgEIAGgFQAIgGAWgDIAHAAQAFAFAMADQAGACAFAAQAFAAACgLIACgRQABgIAGgJQAIgLAFAAIAIAEQAIAEAGAAIAHgBIAGAAQAHABAAAMIAAADIgBABQgDABgDACQgRgCgEAOQgCAGAAAFIAAAJIACAPIgBAFIgCAGIAAADIACAEIgHAFQgFAEgHAAQgEAAgEgEIgIgKQgMgPgVAAQgTAAgXAaIgPAVIgCACIgRAeIgHAOQgGAAgbgFgAkJg6QAFACA4AGIA9AHIAWAEIAVAHQAHABAIADQAHADALAIIAIANIAAABIACABIAKAOIAGAOIADAMQAIAKAFAFQANAMAmAMIAdAIIABAAQANADAFAAQAFAAAIgNIAGgKIABgBIAAgBIABgBIAJgOQALgQAMgJIACgBQANgUAQACIAAgBIAWAAQAQACAGAEQAEACADAEIAIAFIAAAAQAEgCADgFQACgIABgLIAAgDQgCgRAAgLIAAgDIABgCIAOgDIAOABQAAgCgDgDQgEgEgEgBIgEgBQgWAAgFAcIgBADQgBAHAAAKIAAAMQgDAAgRgGIgQgFIgGgBIgBAAQggAAgZAYIAAABIABADIgBACQgCAFgOAWIgNAVIgFAGQgMAAgKgHIgJgCIgBgBQgNgCgUgHIgEgCQgHgCgHgFQgIgFgHgGIAAgBIgBAAQgFgGgIgQQgIgPgIgIQgCgFgDgDQgJgOgUgJQgOgHgYgEIhSgIQglgBgWgEgAD2iAQAAAAgBgBQAAAAgBAAQAAgBgBAAQAAgBAAAAIAAgEQAAgGACgCQAAgCAFgBIAIgEQAFgFAHAEIAEAEIACADIgEAIQgEAHgEABgAEBiQIgDACIgBAEIAAAEIABgBQADABAEgDIAEgEQgCgEgDAAIgDABg");
	this.shape_56.setTransform(243.4,-8.8);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#FFFFFF").s().p("AARBGIgdgIQgmgMgNgMQgGgFgHgJIgEgMIgGgNIgKgPIgBgCIAAAAQAAgHACgFQACADACAFQAJAJAIAOQAHAQAGAFIAAABIAAAAQAHAHAJAFIAGAFIANAEQATAGAMADIABAAIAPAOIgEADgAArA5IAMgVQAOgWACgFIABgCIAAgEIAAAAQAZgZAgAAIAAAAIAHACQAEAEADAEIgCACIgOAAIgLgCQgMAAgNAPIgDAGQgLAJgLAPIgKAPIAAAAIgBACIgKAKgACyAFIAAAAIgBgFIABgQQAAgHgEgKIgBgGIAAgDQAGgbAWAAIADAAIgIAKIgJADIgBACIAAADQAAAKADASIAAACQgBANgDAHQgCAFgEACgAigg2IgVgDIgBAAIgMgHIgJgFIApAEIAUAJQgCADgCACIgCABg");
	this.shape_57.setTransform(247.2,-7.4);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#A2F2FC").s().p("ADhCTIgDgCQAGgHAKgBIAHgBIAFABIgFAFQgHAFgIAAgAA4BTIAEgDIgPgOIAKACQAJAHAMAAIAGgFIACADIAKgKIgGALQgJAMgEAAQgGAAgNgDgAAAA1IgGgFQAGAEAHADIAFACgACCAQQANgQAMAAIALACIgHAAIAAAAQgRgBgNATIgCACgADSAOQgEgFgEgCQgFgDgRgCIACgCQgDgDgEgEIAjALIAAgMQABgKABgIIABAGQAEAKAAAHIgBAQIABAFgAhDgSQgLgJgGgCQgJgEgHgBIgJgDIACgBQACgCACgDIgUgJQAXAFAPAGQATAJAKAPQgCAFAAAHgAjMg0Qg4gGgEgBIgBgFQAXADAlACIApADIAJAFIALAHIg8gIgADwgvIgFABIAIgKQAEABAEAEQADAEABABgAD9iLIABgEIADgDQAGgCACAFIgDAEQgFADgCAAIgBAAIgBgDg");
	this.shape_58.setTransform(243.3,-8.7);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("rgba(107,211,210,0.2)").s().p("AC+CoQgQgJAAgOIASgUQAUgXASgMQAYgSAOAFQARAGAAAoQAAAEgDALQgDAIgGAJQgNAVgQAAQgkAAgSgIgADfCEQgMACgFACQgIAFAAAFIABAEIADAEIAeAAIALgGQAEgDAAgDQAAgGgIgCQgGgCgHAAIgDAAgAhBBKQgIgLgIgUIgEgMQgCgGgBgBIgFgKQgDgGgLgEQgegLhjgFQgjgBgPgRQgKgKAAgPQAAgRANgHQAPgHAbAKQAfAIASAAQAKgBALgEIAHgDIALgBQAOABAcAKIAWAIQAPAHAGAFQAQAKAMANQAIAKAIAOIATAoIgLgKQgLgKgKgNIgbgeIgRgTQgJgJgWgIQgUgIgPAAIgJAAIgBABQAAABgTAAIgcAAIgDgBIgDgBIhIgBQgGADgBACIAAAEQAAAFABACIAEgBIAEAAQAGAAAGACIAIACIAVAEIASAAIAvACIAGACIAuANQAOAEAHADQAGADAEAGIAGALIAGAMQAFAHAGAEQAGAEAAAHIAAAGIABAHQANACAFAIIADAGIAEAGQAJAHAZAKIAoAJQAcAGAFAAIAIgPIAQgdIAAAQQAAAJgCAFQgHAOglAJIgaAGIgPABQguAAgbgrgAAGAxQAMgFAMgNIARgYIAKgHIAUgPQAegUAPAAQANAAASAKIANAIQAHAEAEAAIgCgOQgCgMACgIQAFgaAsAAQAeAAALAPQAFAIgBAIQAAAEgKAQQgHAMgQAVQgOAUgNAMQgOAPgHAAQgPAAgYgNIgQgJIgKgEIgLABQAXgaAUAAQAUAAANAPIAIAKQAEAFADAAQAHAAAGgEIAGgFIgCgEIAAgDIACgHIABgEIgCgQIAAgIQAAgFACgGQAFgPARADQACgDAEgBIABgBIAAgCQAAgNgIgBIgGABIgHAAQgGAAgHgDIgJgEQgFAAgHAKQgHAKgBAIIgCAQQgCAMgEAAQgFAAgHgCQgLgDgGgGIgHAAQgWADgIAHIgFAFQgDADgDABIgLACQgKADgBADIgCAFIgBAFIgJAYQgDAJgDAEQgDAEgGAAIgPABQgRAAgRgLgADPh1QgLgIgFgHQgFgGAAgEQAAgJARgKQASgLAVgDQAYgDAOAKQARALAAAbQAAANgJAJQgJAKgOAAQgiAAgYgTgAD1iXIgJAEQgFACAAABQgCADAAAFIAAAEQAAABABABQAAAAAAAAQABABAAAAQABABABAAIASAAQADgCAFgHIAEgIIgCgCIgFgEQgDgCgDAAQgDAAgCACg");
	this.shape_59.setTransform(244.7,-8.8);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("rgba(107,211,210,0.498)").s().p("AgFBRQgSgDgbgLIgRgIIgNgFQgLgCgegKQgegJgFAAIgEABIgDABIgDAAQgIgBgIgFIgdgRIAkgQQAHAAAKAEIAKAEIADACIAEADIAIACIBCAYIAaAIIAeAKIANADQAFAAAOgKIASgOIAIgMIAKgPIAYgbIAFACIAQAMIATAJIAOALIADgCIAEgFQAHgFAGAAQADAAAOgFQANgGgBgBQAAgEgGgFQgHgEgJgDQgCgBgGgHQgGgIAAgCIABgJIAFgHQAHgGASgMIAFAAIAKAFQAEADAFAFIAAAAIgKAJIgLgCIgDAAIgGAIQgEAGAAABIAAACQAAAAABABQAAAAAAAAQAAAAAAAAQAAABAAAAQARADAHAEQAGADACAGIAGAJQADAEAAAFIgCAUIgJgCIgVAAIgJAHQgEAFgGADIgVASIgdgPQgJgHgHgDIgLgGQgCAAgMAPIgwA0IgQAAIgBABgAjGALQAMACA4ATIBOAaIABAAIAzATIABAAQAMgBANgKQAKgHAOgRIASgaIAMgMIAEgCQAJAMAZAMIAQAHIACABIAOgMQALgJAIgEIAEgCIALgEQALgBAHADIABAAIgDgOQgHgSgOgIIgNgFQgEgCgBgEIALgOQAGgIAFgBIABAEQAAABABAAQAAABAAAAQABAAAAAAQABAAAAAAIAEAAIACgDQgFgKgGAAQgGAAgHAHIAAAAQgGAHgDAGQgEAHAAACQAAAGALAIIASAMIAFAFIACAEIAAAJQgDgBgEAAQgJAAgKAGIgJAGIgIAJQgFAFgDAAQgFgBgLgHIgRgLIgDgCIgBgBIAAAAQgNgGgKgBIgFAHIAAAAQgJALgOAOIgCACQgRARgMAJQgPAMgJAAIgLAAIAAAAIgCAAIAAgBIgBAAIgWgHIgBAAIAAgBIg0gTIgCgCIhBgWQgVgFgMgBIgFABIgCAAg");
	this.shape_60.setTransform(247.4,-9.6);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("rgba(107,211,210,0.2)").s().p("Ag5B6QgqgQgogUQgsgWgbgRQgdgUAAgHQAAgUAPgKQAQgLAaAAQAPAABKAVIAyAPQAXAHAEAAIA1gmQA7gnAZAAIACgVQAAgPAEgNQALgiArADQAtADAKAbQAEALAAAPIgBAYQAAAagCAQQgEAXgMARQggAqhfAAQgDAAgHAKIgRAYQgcAigfAAQgVAAgsgPgAh2AsQAeAKALACIANAFIARAHQAbAMASADIAJAAIABgBIAQAAIAxg0QAMgPABAAIALAFQAIAEAIAGIAeAQIAUgSQAGgDAEgFIAKgIIAUAAIAJACIADgUQAAgEgEgFIgFgJQgDgFgGgDQgHgFgQgDQAAAAgBAAQAAAAAAAAQAAAAAAgBQAAAAAAAAIAAgCQAAgCADgFIAGgJIADAAIALADIAKgJIAAgBQgFgFgEgCIgKgFIgFAAQgSAMgHAGIgFAHIgBAJQAAACAGAIQAGAHACABQAJACAHAFQAHAFAAAEQAAABgNAFQgOAFgDAAQgGAAgHAGIgEAEIgDACIgOgLIgTgIIgQgMIgFgDIgYAbIgKAQIgIAMIgSAOQgOAKgFAAIgrgNQgHgBgTgHIhKgaIgEgDIgDgDIgKgEQgKgEgHAAIgjAQIAcARQAIAFAIACIADAAIADgBIAFgBQAEAAAeAJg");
	this.shape_61.setTransform(247,-9.8);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#FFFFFF").s().p("Ag0A/IAAAAIgJgJIABAAIAWAHIAAAAIABAAIABAAIAAABIAMgBQAKABAOgMQAMgJARgRIACgCQgHAMgIAKQgVAcgQACgAhKA4IhPgbIAAAAIgBAAIgagSIBBAVIApAYgABpAcIgKgFQgYgMgJgMIgEACIgEgEIAFgHQAKABAMAGIAAABIACABIADABIAEADIAbAUQAAAFgEAAgACUAEQgDAAgBgCIgBgDQALgGAJAAQAEAAADACIAAgHIAHAAIAEAOIgBABQgHgDgLAAIgLAEgACtgSQgBAAAAgBQAAAAgBAAQAAAAgBAAQAAgBgBAAIgCABIgEgEIgSgOQgLgIAAgFQAAgCAEgHQADgHAGgGIAAgBIACAJIgKAPQAAAEAFACIANAFQAOAIAGASIgEgGg");
	this.shape_62.setTransform(249.6,-9.3);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#A2F2FC").s().p("AAABNQAQgCAWgcQAIgKAHgMQAOgOAIgLIABAAIADAEIgLAMIgTAaQgNARgKAHQgNALgNAAgAg0A7IgpgYIACABIA0AUIAIAKgACFAhIgHgCIAJAAQAEAAAAgFIgbgUIAMAIQAMAIAEAAQADAAAFgFIAJgJIAIgHIABAEQABACADAAIADAAIgFACQgHAEgLAJIgPAMgAjGALIAAgDIABAAIAFgBQAMAAAWAHIAaASIAAAAQg3gTgLgCgAC/gMIgCgEIACgBQAAAAABABQAAAAABAAQAAAAABAAQAAABABAAIAEAGIgHAAIAAABgACphGQAHgFAFAAQAGgBAFALIgBACIgEAAQgBAAAAAAQgBAAAAAAQgBAAAAgBQAAAAAAgBIgBgFQgGACgGAHg");
	this.shape_63.setTransform(247.4,-9.6);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("rgba(107,211,210,0.498)").s().p("AiMBpIgDgBIAAgBQAAgBAAAAQAAgBgBAAQAAAAAAgBQgBAAgBgBIgDgCIgGgEQgEgCgBgFIAMgHQAMgGACAAQAGAAADAGIADAFIACAEIAEAAQAKgGAGgJIAKgRIAKgQIASghQAGgIACgIIAIgUQAFgNACAAIAUAAQgBADADAEIAFAIIADAJQAEAGABAAIA9g2IAXgVIAEAAIABACIAGABQAFAAAGgHIAGgIIAFgDIADgEQAFgDAMAFQgBAJABAKQADAMAEAGIgCAAIgCgBIgBgBIgBgBIgBAAIgDgGIgBgEIgBgFIABgJQgEgEgCgBQgHgDgLAMIgIALIgBACQgNgCgOAIIgGAEIg3AzIgRAUIgDgHIgGgLIAAAAQgDgHgDgDQgGgEgHAAQgLAEgFAOIgYA+IAAABIgGAJQgQAggRAAQgGAAgCgCIgEgDQgGgEgMAAQgBAAgBAAQAAABgBAAQAAAAgBAAQAAABAAAAIAAADQACACANAFQANAEADAAQAYAAAdg1IAfg9IADgEQACgGAEAGIAWAjIAqgwQAhgjAQAAIADAAIgBABIAAABQgGAPAAAGQgBAIAJAGIALAFIAAAWIATAtIAJACIAQgNIACgFIAAAAIACgIIAAgBIABgCIgCgBIgBACIgOAOIgFAFQgCAAgDgFIAAgBIgFgJIgDgIIAAgJQgBgFgBgJIAAgIIACAAQAMAHAEADQALAJAEAOIACgCIgIgPQgFgIgIgGIgLgHIgDgBQABgSgBgGIgCgNIgGgNIgHgDIABgCQAKgRADAAIAHAAIACABQAAgBABAAQABAAAAAAQABAAAAABQAAAAAAABIgCANQADAFAGAFIgIABIgDgJIgEgJIgDAAQAAAAAAAAQgBAAAAABQgBAAAAABQgBAAAAABIgBAGIABADIACAFIADAEIAEADQABAEAAAEIACAaQAAABAPAFQAOAFAAADIgCAEIgBAFQAAAEACADIADAFIgCADIgBADQABACAEAEQAFAFAAAFIgCAIIgCAHIgCgCIgGgBQgDAAgKAGQgJAFgHABQgHgDgCgIIgRgpIAAgHIABgIQgJgGgEgBQgJgPABgCIABgGIACgGIAAgBIgCgBQgDAAgHAIIgVAWIgGADQgGADgCADIgXAZIgDADIgLANIgKgDQABgHgFgLQgEgJgEAAQgFAAgEAKIgEARIgSAuIgDADIgFABQgHACgBABQgEAHgHAIQgGAHgJAHIgNAAIgKACQgLAAgEgDgACAgCIgEACIAAABIACANQADANACAAIALgLQAAgCgCgEIgHgKIgEgCIgBAAgABigcIgBgBQgEgBgBgCQgGgFAAgNIAEgKIADgEQAGADACAOQABAEAAANIAAADg");
	this.shape_64.setTransform(253.1,-11.9);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#FFFFFF").s().p("AhvA+IAAAAIAIgSIARgsQAFgOALgEQAHAAAFAEQAEADADAGIAAAAIgCADIgCABIgEgGQgEgGgCAGIgDAEIgCgCIgCAKIgWArQgGAKgJAGIgHAHgABbAyQgEgCAAgDIAEgDQADAFACAAIAFgFIAJgKIAHgDIAAAAIgDAIIAAABIgBAFIgNAJQgFAAgEgCgABFAIIAAgVIgGgDIABgEIABABIAEABIAAgCQAAgOgBgEQgCgNgHgDIgCADIgBgDIAAAAIABgBIgCAAIgBgBQgOAAgXATIgXAUIgEgEIAlgiIAJgHQAOgIANADIABgDIABAAIACABIgBACIAFACQADAEAFAKIACAOQABAGgBASIADABIgBAFIgCgBIAAAIIgGAXg");
	this.shape_65.setTransform(256.4,-12.9);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#A2F2FC").s().p("AiHBhQgNgFgCgCIAAgDQAAAAAAgBQABAAAAAAQABgBAAAAQABAAABAAQAMAAAGAEIAEADQADACAFAAQARAAAQggIAHgHQAJgHAHgKIgGAKQgdA1gYAAQgDAAgNgEgAB4AsIgMgfIAGgWQAAAJACAFIAAAJIADAIIAFAJIAAABIgEAEQAAADAEABQAEADAFAAIgEADgACTASIACgCIACABIgBACIgHADgAgWgLIACgBIADgCIAEALIAFAHIARgUIANgPIAFAEIAXgUQAXgTAOAAIABABIgBAAQgQAAghAjIgrAwgACEgHQgEgDgMgHIABgFIALAHQAHAGAGAIIAIAPIgCACQgDgOgMgJgAglgOIADABIgFAJIACgKgABbgcQgIgGAAgIQgBgGAIgPIABADIgFAKQAAANAGAFQACACADABIgBAEgACEhGQgHgFgCgFIADgNQAAgBgBAAQAAgBAAAAQgBAAgBAAQgBAAgBABIgBgBIgHAAQgEAAgJARIgCgCIgBABIAIgLQALgMAGADQADABAEAEIgBAJIABAFIABAEIADAGIABAAg");
	this.shape_66.setTransform(253.1,-11.9);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("rgba(107,211,210,0.2)").s().p("AiwCEQgVgNAAgXQAAgJAZgWQASgSAqgfIBQg9QApghApgjQAugqAiAKQAcAJARApQANAfAFAvQAFAZAAAbQAAAZgRARQgTATggAAQgpAAgRgcQgFgIgDgMIgBgKIgSgDQgOgEgKAAIgEABIADgCIAXgaQACgDAGgCIAGgDIAVgWQAHgJADAAIACABIAAABIgCAHIgBAFQgBADAJAOQAEABAKAFIgCAIIAAAJIARAoQACAIAHAEQAHgBAJgGQAKgFADAAIAGABIACABIACgHIACgIQAAgEgFgFQgEgFgBgBIABgEIACgCIgDgGQgBgEAAgEIAAgFIACgEQAAgCgOgEQgPgFgBgCIgBgZQAAgFgBgDIgEgEIgDgEIgCgFIgBgDIABgFQAAgBABgBQAAAAABgBQAAAAABAAQAAgBAAAAIADAAIAEAJIADAJIAIAAIACAAIABAAIABACIACABIACAAQgEgHgDgMQgBgJABgJQgMgFgFADIgDADIgFAEIgGAIQgGAGgFAAIgGAAIgBgCIgEAAIgXAVIg+A1QgBAAgEgGIgDgJIgEgHQgDgEABgEIgUABQgCAAgFANIgIATQgCAHgGAJIgSAhIgKARIgKAQQgGAKgKAFIgEAAIgCgDIgDgFQgDgGgGAAQgCAAgMAGIgMAGQABAFAEADIAGADIADADQABAAABABQAAAAAAABQABAAAAABQAAAAAAAAIAAABIADACQAEACALAAIAKgCIANAAQAJgGAGgIQAHgHAEgHQABgCAHgBIAFgBIADgEIAWg+QAEgLAFAAQAEAAAEAKQAFALgBAGIAFACIACABIgDAFIgLASIgOAVQgQAagPAOQgTASgUAAQg4AAgZgPgACLAgIgCgNIAAgCIAEgBQACgBADACIAHAMQACAEAAACIgLALQgCAAgDgOg");
	this.shape_67.setTransform(251.8,-13.8);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("rgba(107,211,210,0.498)").s().p("AiPBzIgMgNIAHgDIAGgDQAMABAFACIAEADIAEAAQAHAAACgBQABgCAFAAIAEAAIAIAAQgEAHgNAKQgNAJgGAAQgHAAgKgKgAiRBlQAEAGAGACQAGADAHACQAFgEAMgGIACAAIgBAAIgHACQgGACgEAAQgEAAgHgEIgDgCIgJgBIgBAAgAgMA1IgHgGIAHgFIAMgBQAHgBAGgFIAGgEIAEgGQABgDAHgHIAMgKQAGgFACgEQACgEABgGQAAgFAHgGIAFgFQACgCAAgDIgTgaIAEgNIAJgNIACgGQACgFADgCIAMgFQAJgEAAgDIAAgBIgBAAIgJgBIgBAAIAEgGQAEgEAFAAQADAAAFADIAKAIIgBAFIgLAAIAAABIACAEIAAAAIgCAAIABABQADAFAHAEQAHACAGAHIAHAKIgFAAQgHAAgGgDIgDgHIgJgDQgHgBgDgEIgDAAQgDACgKALQgIALAAAGIADAJQAFAJAEgBQACABAQgHQAQgHADAAIAMAAIAAAKIgCAKIAAAaQABAGgBAKIgBATIACACQADADAOADQAAABAHABIAHACIgCAGQAAADgFADIgTAFQgJAAgDABIgBABIgCABQgEAAgIgKIgKgNQgCgDgBgKIAAgLIABgKIABgFIAAgBQAAAAAAgBQAAAAAAAAQgBAAAAAAQAAgBAAAAIgXARIgKAJIgQAUIgKAJQgDADgMAHQgNAIgCgBQgEAAgKgJgAgKAtQAAACADADQADAEAGAAQAIAAASgSIATgVQAEgFAKgGIACgBIAGgGIAAgBIAFgGIAXgQQADgFAAAKIAAANQAAAUgBAFIAAABQgBAMANANIABABIAKgDIADgBIABAAQAAAAAAAAQABAAAAABQABAAAAAAQAAABAAAAIABABIABACIAOgFIgBgCIgEgBIgLAAIgJgFIgBgBIgCgFQgCgFgBgHIAAgFIACgKIAAgDIABgLIAAAAIAAgCIABgVIgCgHIAAgBIgBgBIgBAAQgCgDgDAAIgGAAIAAAAIgCAAIAAABIAAAAQgJACgLAJIgCAAIgBgBQgPgLgDgHIgBgDQAAgGAOgRQANgQAHgDIAAAAIAAADIAFAGIAPAIQAIAFACADIABgBIgHgHIgNgHQgGgCgCgGIgBgCIgBgDIgBgDIgEABQgIADgMARIgJAPQgEAHAAAFIAAABIABABIAAABQAEAHAPAMIACABIABABIgTATIAAAAQAAAIgGAJIgDACQgEAIgJAGIgQARQgPAPgLAAIgFgEgABfh0IAIAGIABABIABgBIABgDQgHgGgFgBIAAAAQgFAAgEAEIABAAIABAAIAEAAg");
	this.shape_68.setTransform(253.9,-14.6);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#FFFFFF").s().p("AAmBMIgBgBQAAgBAAAAQgBgBAAAAQAAAAgBAAQAAAAgBAAIgBAAIgCAAIgDgJIAIAGIAEAAIABACIgBADIgCABgAAOAlQgEgNAAgQIABgIQgNAEgKAKIgOAOQgIAHgEAAIgCAAIACgDQAHgJAAgIIAAgBIATgSIgBAAIgCgBIAAgBIACgBIABABIABABQALgJAJgDIAAAAIAAAAIACAAIAAgBIAFAAQAEAAACADIABABIABABIAAAAIACAIIgBAUIgBABIAAABIgBALIAAADIgBAKIAAAFQAAAIACAEIADAFQgJgHgEgTgAgigZIAAAAIgBgCIAAAAQAAgGAEgGIAJgQQAMgQAIgEIACgBIACADIABAEIgCACIAAgDIAAAAQgHADgNARQgNARAAAGIABACIAAABg");
	this.shape_69.setTransform(263,-17.9);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#A2F2FC").s().p("AiGBxQgFgDgFgFIAKABIAEACQAGAEAEAAQAFAAAFgCIAIgDIAAAAIgBABQgNAGgEADQgIgBgGgDgAgGA2QgDgDAAgCIAAgBIAGAEQALAAAPgPIAPgRQAJgGAFgIIACAAQAEAAAHgGIAOgOQALgJAOgGIgBAJQAAAQADAMQAEAUAKAGIAAABIAEAJIgLAEIAAgBQgNgNAAgMIAAgBQACgGAAgTIAAgNQgBgKgDAFIgXAQIgFAGIAAAAIgGAGIgCACQgKAGgDAFIgUAVQgRASgJAAQgFAAgEgEgACDAwIABgBIABgEIAAgCIAIAAIADABIABABIgNAGgAA5g1IADAAIABAAQACAHAPAKIgCABIABABQgQgMgEgHgAByhRIgQgIIgEgGIACgDIAAACQACAGAHACIAMAHIAHAGIAAACQgDgEgHgEgABphqIgIgGIgFAAIgEAAIAAAAIgCAAQAFgFAEABIABAAQAEABAHAFIgBAEIAAABg");
	this.shape_70.setTransform(253.8,-15);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("rgba(107,211,210,0.2)").s().p("AiVB8QgTgIAAgPQAAgXASgKQAPgJAXADQAWADARALQARAMAAAQQAAAJgGAIQgIAMgPAAQgqAAgWgJgAidBaIgIADIAMAOQAKAJAHAAQAGAAANgJQAOgKADgGIgIAAIgEgBQgFAAgBACQgCABgHAAIgEAAIgEgCQgFgDgMgBgAg7BFQgFgIgDgKIgBgKQAAgMAKgVQAKgSARgWQARgWAUgVQAVgUAWgQIAVgMIAJABIABAAIAAABQAAADgJAEIgMAGQgDABgBAFIgDAGIgJANIgEANIATAaQAAADgCADIgFAEQgHAGAAAFQgBAHgCADQgCAFgGAFIgLAJQgIAIAAADIgEAFIgGAEQgGAFgHACIgNABIgHAEIAHAHQAKAJAFAAQADAAALgIQAMgHADgDIAKgJIARgTIAJgIIAXgSQAAAAAAAAQABAAAAAAQAAAAAAAAQABABAAAAIAAABIgCAGIgBAKIAAAKQABAKACADIALAOQAIAJADAAIACAAIABgBQADgCAJAAIAUgFQAEgDABgDIABgGIgHgBQgGgCgBgBQgOgCgDgDIgCgDIABgSQABgKgBgGIAAgbIACgKIAAgKIgMAAQgDAAgPAHQgQAHgDAAQgEAAgEgJIgDgJQAAgFAIgMQAJgLAEgCIACAAQAEAEAGABIAJAEIAEAGQAFAEAHAAIAGgBIgIgKQgFgGgHgDQgHgDgEgGIgBgBIACAAIAAAAIgCgDIAAgBIAMAAIAAgGIgKgIIADAAQAWgFAQAJQAlAVAABeIABAUQAAARgEANQgLAngtAAQgUAAgOgJQgJgGgGgIIgHAJIgMANQgSARgYAAQgoAAgSgZg");
	this.shape_71.setTransform(254.9,-13.8);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("rgba(107,211,210,0.498)").s().p("AhyB6IgMAAQAAAAAAAAQgBAAAAAAQAAABAAAAQgBAAAAAAIgHAAIAAgJIABgFIAFgCIAGgBIAdgBIAEgBQAFgBAEACIgDAGQAAACgDADIgKAHIgHAEgAhuB1IAFAEQABAAAAAAQABABAAAAQABAAAAAAQABgBAAAAIALgIIgBgDIgFgCIgcAAIgCABQgBAAAAAAQgBAAAAAAQAAABAAABQAAAAAAABQAAAEABABIADABIAKgBIAEAAgABkBRIgDgDIgCgGIgFgdQAAgEACgGQACgEAAgDIAAgBIgBgBIgVAAIgBgCQgBAAAAgBQAAAAgBAAQAAAAgBAAQAAAAgBAAQgGAAgKADIgKADIgFAAIgBAAQAAgEADgGQADgIAJACIAFAAIABABIAAACIABAAIAHgDQAGgEADAAQAFAAADADIAGACIAIgCIAAABIABABIAIgFIACgBIAHgEIABACQABACAHAAIAGAHQgDAEgCAGIgBALQAAAEgEAHQgDAHAAADIAAADQAAAAAAAAQAAABAAAAQABAAAAAAQABABAAAAIADgBIAEgBIAIAAIABAAQAAAAAAAAQABAAAAAAQAAABAAAAQABAAAAABIABAMIgNAHQgGACgLAAgABqATIAAACQAAADgDAHIgBACIgEAWIAAAIQABAEACACQAFAGAMAAQAGAAACgBQAEgBAAgFQAAgCgDgDIgBgBIgHACIgHAAIgDgFIAAgDQAAgJAIgWIADgGIAAgBQgCgGgGgDIgEABIgTAFIgGgCQgEgCgEAAIgUAEIgEAAIAAgBQgMAFAAABQAAABAAABQAAAAAAABQAAAAAAAAQABABAAAAIABAAIABAAQAEgCAJgCIANgEQAGgBAEACQADACAGAAIANgBQAEAAACABgABRhbQgJgKgBAAQgDAAgEAEIgHAHIgLAGIgLAGIgCgGIgBgGQAAgCAHgIIAIgJQAHABAHgEQAHgDAAgCIgBgEIAAgBIABAAIALgDQAEgBAKACIACAGIAAAFIgDACQgDADAAABIAAADIACAAIACgBIABgBIAGAAIAAASQAAAGgIAGgABSheQADAHAFADIAEgBIABgBIgDgQIgBAAIgCAIIgHgPQgMgDgRAIQgIAEgDADQgEAFAAADIAAADIALgKQAIgHAHAAIAIABIAGgEIAEAMgABWhxIACACIABgDIABgDQgDgDgEgBIgHAAIABAEQACADACAAIADAAIACABg");
	this.shape_72.setTransform(257.1,-14.6);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#FFFFFF").s().p("AgFAVIgDgCIAAgBIAAgEQAAgHAFgLQAFgPAHgBIAAAAIgCAFQgHAWAAAJIAAADIAAABIgCABg");
	this.shape_73.setTransform(268.2,-10.5);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#A2F2FC").s().p("AhpB5IgFgDQgHgBgIACIgDgBQgBgBAAgEQAAgBAAgBQAAgBABAAQAAgBAAAAQABAAAAAAIACAAIAcAAIAFABIABAEIgKAIIgCAAIgCgBgABlBGQgCgCgBgFIgBgIIAEgVIABgCQADgIAAgDIAAgBQgBgCgEAAIgOACQgGAAgDgDQgDgBgHAAIgbAJIgBgBQAAAAAAAAQAAAAAAgBQgBAAAAgBQAAgBAAAAQAAgCAMgEIABAAIAEAAIATgDQAFAAAEACIAFACIAUgFIAEgCQAFADACAHIAAAAIAAAAQgHACgGAPQgFAMAAAHIAAAEIAAABIADACIADAAIADgBIACADIAGAAIAHgCIACABQADADAAACQAAAFgFACQgBABgHAAQgMAAgEgGgABSheIgEgLIgHADIgHAAQgHAAgJAHIgKAKIgBgEQAAgDAFgEQADgDAIgFQARgIAMADIAGAPIACgHIACAAIACAQIgBABIgDABQgFgEgDgHgABWhxQgBgBgEABQgDgBgBgCIgCgFIAHABQAEAAAEAEIgBADIgCACg");
	this.shape_74.setTransform(257.2,-14.6);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("rgba(107,211,210,0.2)").s().p("AibCAQgFgIgDgGIgCgGQABgJAHgGQAHgGAMAAQAEAAAIAEIAOADQAKAAARgIIAOgGIAOgGQAOgFAHAEQAJAGAAAWQAAAGgEAHQgFAJgJAGQgWASgjAAQgjAAgSgTgAhjByIAKAFIAIgEIAJgHQAEgDAAgCIACgGQgDgCgFABIgEABIgdABIgGABIgFACIgBAFIAAAJIAHAAIACgBgABPBQQgDgHAAgIIABgJIgBgEIgTAFQgOAEgFAAQgUAAgJgNQgEgGAAgJQAAgNAPgKIABAAIAEgKQAFgKALgLQAJgKAMgHQANgHAMgDQAdgGASARQAVAUABAyIAEAHQAGAIAAAEQgBAFgFAIQgEAFgKAMQgJAJgIAFQgKAGgGAAQgaAAgIgWgABWAOIABACIAWAAIABABIAAABQAAADgDAEQgCAGAAAEIAGAdIACAGIACADIAHAAQAKAAAHgCIAMgHIgBgMQAAgBAAAAQAAAAAAAAQgBgBAAAAQAAAAAAAAIgBAAIgIAAIgFABIgCABQgBAAAAAAQgBgBAAAAQAAAAAAAAQAAgBAAAAIAAgDQAAgDACgHQAFgHAAgEIABgLQABgGAEgEIgGgGQgHAAgBgCIgBgCIgHAEIgCABIgIAEIgBgBIAAgBIgIACIgGgCQgEgCgEAAQgDAAgGADIgHADIgBAAIgBgCIgBgBIgEAAQgJgCgEAIQgCAGAAAEIAAAAIAGAAIAKgDQAKgDAGAAQAAAAABAAQAAAAABAAQAAAAABABQAAAAAAAAgABXg5QgYgJgOgHQgOgHgGgNQgEgJgBgMQAAgZAXgGQATgEAdAKQAaAIAWARQAXARAAAOQAAAlgjAAQgMAAgggLgABhhjIALAPQAIgGAAgGIgBgSIgFAAIgCABIgCABIgBAAIAAgDQAAAAAAgBQAAAAABgBQAAAAABgBQAAAAABgBIADgCIAAgFIgDgGQgJgCgEABIgLADIgBAAIAAABIABAEQAAACgHADQgHAEgIgBIgIAJQgGAIAAACIABAGIACAGIALgGIAKgGIAHgHQAFgEACAAQACAAAJAKg");
	this.shape_75.setTransform(255.6,-13.8);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("rgba(107,211,210,0.498)").s().p("AhnCAIgDgBIACAAIAHABQAIAAAEgCIAIgFIgCgCIgdAGIABACIgEgCIABAAIAIgDIAIgFQAMgGAPADQgCAFgJAGQgKAGgEAAIgLgDgABQBjQAAgCAEgFQAEgEAAgCQAAgBgEgDIgIgDIgCgFIgBgEIgCgFIgBgEIgDgFIgDgEIgBgGIgDgIIADgCIABAAIALABIAFAHQAJAJAAAGQgBAEAEADQAEAEAKACQAGABAAACIgBADIAAAOQgCADgEACIgGAGQgFAFgDAAgABCAnQACAGAEADIACACIABABQAAAGADAIIAGAOIAFABIADAEQABAAAAABQABAAAAABQAAABAAAAQAAABAAAAIAAADIgEAHIADACQAJgFACgEIABgDIAAgEQgBgGgCgCIgDgDIgGgBIgCgBIgBgBIAAAAIgDgDIgBgDIgBgBIgDgGIgCgGIgKgIIgEgEgABFhVIgDgNIgCgGIgBgHQgCgCgHgEQgFgDAAgDIABgDIAEgEQAJgBAHAFQAGAEABAEIAHARQgCACAAAFIAAAIQABAKgKAFgAAzh6QAIABADACQAEADAAADIAFAVIACAJIADAEIADgBQAAAAAAgBQAAAAABgBQAAgBAAAAQAAgBAAgBIgBgLIAAgBIgFgNQAAgEgCgDQgCgCgHgFIgDgCIgIACIgBAAg");
	this.shape_76.setTransform(258.2,-16);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#FFFFFF").s().p("AgBAKIABgDQAAAAAAgBQAAgBgBAAQAAgBAAAAQgBgBAAAAIgEgDIAAgDIABgHIABABIADABIAEABIAEADIgBAFQgBAHgFADg");
	this.shape_77.setTransform(267.8,-7.9);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#A2F2FC").s().p("AhmB/IgBAAIgCgBIgBgBIAegGIACABIgJAFQgEACgIAAgABcBiIAEgHIABABQAGgEABgGIABgHQACACAAAGIAAAEIgBAEQgCAEgIAFgABXBOIgHgNQgDgJAAgGIgBgBIgCgBQgEgDgBgGIAAgBIADAEIAKAJIACAFIAEAHIAAAAIABADIADADIAAAAIgBAIIAAADgABLhUIgCgIIgFgWQAAgCgEgDQgDgDgIgBIAAgCIABAAIAIgBIADACQAIAFABACQACACAAAFIAFANIAAABIABALQAAABAAAAQAAABAAAAQAAABgBAAQAAABAAAAIgDACg");
	this.shape_78.setTransform(258,-15.9);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("rgba(107,211,210,0.2)").s().p("AiACMQgEgIAAgKQAAgUAPgMQAMgLAUgCQATAAANAIQAPAIAAARQAAAIgEAGQgFAJgHAGQgSAQgYAAQgXAAgJgPgAhcBzIgIAFIgJADIAAAAIAIADIALADQAEAAAKgGQAJgGACgFIgKgBQgKAAgHAEgAAuBXQgIgLgGgPQgEgLAAgEQAAgaAQgEQAPgEAVAMQAWANAOASQARAVAAARQAAAKgGAJQgIALgPAAQgiAAgYgkgAA9AkIAEAIIABAGIADAEIADAFIABAEIACAFIABAEIACAFIAIADQAEADAAABQAAACgEAEQgEAFAAACIAKAJQAEAAAFgFIAFgGQAFgCACgDIAAgOIABgDQAAgCgHgBQgJgCgEgEQgEgDAAgEQAAgGgIgJIgFgHIgLgBIgBAAgAAshWQgFgJgHgRIgEgNQAAgUAMgHQALgGAQAJQARAIAKASQAMAVAAAYQAAAHgDAKQgGAOgMAAQgUAAgVgngAA3iEIgDAEIgBADQAAADAFADQAHAEABACIACAHIACAGIADANIAEAOQAJgFAAgKIAAgIQAAgFACgCIgHgRQgBgEgGgEQgGgEgHAAIgEAAg");
	this.shape_79.setTransform(258,-15.8);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("rgba(107,211,210,0.498)").s().p("AhRB7IgBgCQAAgBAEgEIAHgGQAGgDACABQADAAAAAFQAAABgIAFIgIAEIgDABIgCgBgAhIByQgDABgDAEIAAAAIABACIACABIALgJIgBAAIgHABgAA4BmQgBgBAAAAQAAAAgBgBQAAAAAAgBQAAgBAAAAQAAgDAFgEQAHgEACAAIAPALQAAAAAAABQAAABgBAAQAAABAAAAQgBAAAAABQgDADgFAAQgNAAgEgDgABCBbQgFAAAAAHIABAFIAAAAIACABIAFAAQAEAAADgCIADgDIgBgDQgGgFgFAAIgBAAgAA4hmIgCgJQAAgDADgEQADgFAEAAQAEgBADAEQADAFABACIgCAFIgDAFIAAADQAAAAAAABQAAAAAAABQAAAAAAAAQAAABAAAAQAAADgIAAQgEAAgCgIgAA6hvQgBAEABAGQAAABABAAQAAABAAABQAAAAAAAAQAAABAAAAIADABQAGgFABgEIAAgGIACgCIgCgBIAAgDIgCgEQgHADgCAHg");
	this.shape_80.setTransform(259.3,-17.3);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#A2F2FC").s().p("AhNB5IgBgBIAAgBQADgEADgBQAEgBAEAAIgKAJgAA/BoIgBgBIAAAAIgBgFQAAgGAFAAQAFgBAHAFIABAEIgDADQgCABgEAAgAA8hhQgBAAAAAAQAAgBAAAAQAAgBAAAAQgBgBAAgBQgBgGABgEQACgHAHgDIADAEIAAANQgCAEgGAEg");
	this.shape_81.setTransform(259.3,-17.3);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("rgba(107,211,210,0.2)").s().p("AhXCAIAHgEQAIgFAAgBQAAgFgDAAQgCgBgGADIgHAGIgBgEIgBgFQAAgOAIgGQAIgFAKADQALADAHAHQAIAHAAAJQAAAHgEAIQgHAKgMAAQgRAAgHgNgAAYByQgEgFgBgHIgCgHQAAgMAMgJQAKgIAQgBQAQgBAKAHQAMAJAAARIgCAJQgBAFgEAFQgJAOgQAAQgZAAgMgQgAAwBgQgGAEAAADQAAAAAAABQAAABABAAQAAABAAAAQAAAAABABQAEADANAAQAFAAADgDQABgBAAAAQAAAAABgBQAAAAAAgBQAAgBAAAAIgPgLIAAAAQgDAAgFAEgAAahKQgEgHAAgLQAAgXAJgNQAIgMANAAQAMABAIAMQAKANAAAWQAAANgHAIQgIAMgPAAQgSAAgIgPgAA0h2QgDAAgDAFQgEAEAAADIACAJQACAIAEAAQAIAAAAgDQABAAAAgBQAAAAAAAAQAAgBAAAAQAAgBgBAAIAAgDIADgFIACgFQAAgCgEgFQgDgDgDAAIgBAAg");
	this.shape_82.setTransform(260.5,-17.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4}]},1).to({state:[{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8}]},1).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12}]},1).to({state:[{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16}]},1).to({state:[{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20}]},1).to({state:[{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24}]},1).to({state:[{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28}]},1).to({state:[{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32}]},1).to({state:[{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36}]},1).to({state:[{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40}]},1).to({state:[{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44}]},1).to({state:[{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48}]},1).to({state:[{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52}]},1).to({state:[{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56}]},1).to({state:[{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60}]},1).to({state:[{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64}]},1).to({state:[{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68}]},1).to({state:[{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72}]},1).to({state:[{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76}]},1).to({state:[{t:this.shape_82},{t:this.shape_81},{t:this.shape_80}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(189.1,-12.1,16.9,10.7);


(lib.explosion2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Isolation Mode
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#E94E1B").s().p("AglHYQgGgYAYgGQAhANgXAYQgJAJgGAAQgIAAgFgQgAmhB5QgJgYAbgFQAmALgaAZQgJAJgHAAQgJAAgFgQgAG1jaQgTgjAngJQAtAPggAiQgIAJgIAAQgJAAgIgOgAnMmcQgygxA9gZIAEgBQA8AUgmA0QgJAMgKAAQgJAAgJgJgAE7mZIgHgEIgBgCIgBgFQAAgDABgDIADgFIADgCIAIgCIAAgBIAGACIADACIADAFIACAEQAAAEgBADQgCAFgEACIgDABIgCAAIgIgBg");
	this.shape.setTransform(257.4,349.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F39200").s().p("AEbK4Qg0gSAegvQAHgKALAAQBFALggA0QgHAOgOAAQgFAAgHgCgAndIEQgEAAgDgCIgFgEIgCgCIgBgEIgBgHQAAgGAFgDIADgCIADgCIAFgBIAFACQAEACACADIAFAGIAAACIgBAFIgDAHQgDAEgFACIgCAAIgCAAgAJHHDQgBgQAQgBQAhAGgWAUQgJAJgHAAQgIAAgCgSgAKQEHQgHgXAZgEQAiALgZAXQgIAHgGAAQgIAAgFgOgAPHhBQhFgYAqg0QAIgKAMgBQBEANgiBAQgFAMgMAAQgEAAgGgCgAhqjOIgHgDIgBgCIgBgFQAAgDABgDIADgFIADgCIAIgCIAAgBIAGACIADACIACACIADAHQAAAEgBADQgBAFgFACIgDABIgCAAQgEAAgEgCgAvnlxQgSgpAmgOQBJAHglAzQgRAXgNAAQgPAAgLgagAGOpsQgpgPAVgtQAIgRAUAAQAxAYghAtQgGAKgJAAQgEAAgFgCg");
	this.shape_1.setTransform(252.5,324.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#E94E1B").s().p("ADaHqIAAgCIACgEIAGgEIAAgBQAHACAAAHQAAAIgHAAQgGAAgCgGgAivCGQgHgYAagFQAkAMgZAYQgJAKgHAAQgJAAgFgRgAjWmzQgngkAsgWIAFgCQAsARgaAoQgHAKgHAAQgHAAgHgHg");
	this.shape_2.setTransform(233.3,348.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F39200").s().p("AEYKyQgggZAjgYQAGgDAEgBQA9AGghArQgKAMgLAAQgKAAgKgIgAKTEUQgJgYAagFQAlAJgaAaQgIAJgHAAQgIAAgFgPgAO1hyQgggnAwgPQA1ARgiAmQgJAKgIAAQgJAAgJgLgAvPl0QgpgoAngoQAFgFAHgBQAkAigWAxQgEAKgHAAQgGAAgHgHgAGKqKQgagjArgMQAvAPgfAiQgJAJgIAAQgIAAgIgLg");
	this.shape_3.setTransform(252.5,325);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E94E1B").s().p("AAWFLIgFgEIgBgFQgBgDADgGQADgEAHAAIAFACIAFAEQACADAAAEIgDAGQgDAFgFAAQgDAAgEgCgAgikfQgRgkAogJQAuAOghAlQgKALgIAAQgLAAgHgRg");
	this.shape_4.setTransform(214.2,333.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F39200").s().p("AESKgQgJgbAcgEQApAMgdAbQgKAKgHAAQgJAAgFgSgAKZEtQgEAAgDgDQAAAAAAAAQgBgBAAAAQAAAAAAgBQAAAAAAgBIgBgEQgBgDACgEIADgEIADgDIAHgCIAGACIAEACIACACIABADIABAEIAAAHQgCAFgEACIgDABQgGAAgEgCgAO8hzQgVghAngJQAsAOgfAgQgIAIgHAAQgJAAgHgMgAvkmlQgLggAigGQA0AOgjAhQgMAMgJAAQgMAAgHgVgAF9qLQgPgeAigIQAnAOgcAdQgIAJgHAAQgJAAgGgOg");
	this.shape_5.setTransform(252.5,326.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#E94E1B").s().p("AAUFMIgDgEIAAgDIABgEQABgEAEgCIAFgCIAFACQADACACADQACACAAAEQgCAEgDACQgDAEgEAAQgEAAgEgEgAglk0QgHgXAYgEQAhALgXAXQgIAIgGAAQgIAAgFgPg");
	this.shape_6.setTransform(212.9,332.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#F39200").s().p("AEKKaQgIgZAcgEQAiAMgZAYQgIAJgHAAQgJAAgFgQgAPAiHIgEgFQgBgEAAgFIADgHIACgCIADgCIAHgBIAAgBIAGACQADACADADQAEADAAADIAAACQAAABAAABQAAABAAAAQAAABAAAAQgBABAAAAQgDAGgGACQgGABgHAAgAvWnTQgHgKAJgJQAHgFAEAAQAKAAAGAGQAHAHgCAIQgBAJgGADQgFACgEAAQgLAAgHgLgAF2qaQABgOAOgBQAcAJgWAQQgJAHgFAAQgIAAABgRg");
	this.shape_7.setTransform(252.5,326.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#E94E1B").s().p("AgOAIQgFgIAFgJQAGgIAIAAQAIABAFAFQAFAGAAAGQgBAIgDAEQgIAFgGAAQgIAAgGgKg");
	this.shape_8.setTransform(212.9,300);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F39200").s().p("AhHKXQgDgRASgCQAeAFgUAVQgIAKgGAAQgIAAgDgRgAA4qcIAAgCIACgEIAGgEIAAgBQAIACAAAHQAAAHgIAAIgBAAQgFAAgCgFg");
	this.shape_9.setTransform(286.7,326.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F39200").s().p("AgIAJIgDgCIgBgCIAAgDIAAgDIABgFIACgCIAEgCIAFgCIAFACIAFAEIADAGIgDAHQgFAGgFAAQgEAAgEgEg");
	this.shape_10.setTransform(286.6,371.9);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#E94E1B").s().p("AgNAIQgFgLAIgJQAFgFAFAAIAGACIAEACIADACIACAFIABAIQgCAHgDAEIgEAEIgHABQgIAAgFgKg");
	this.shape_11.setTransform(218.7,281.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#E94E1B").s().p("AgHADIABgDQACgDADgCIAEgCQAHACgCAGQgCAHgGAAIgCAAQgEAAgBgFg");
	this.shape_12.setTransform(252.5,326.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_1},{t:this.shape}]},8).to({state:[{t:this.shape_3},{t:this.shape_2}]},1).to({state:[{t:this.shape_5},{t:this.shape_4}]},1).to({state:[{t:this.shape_7},{t:this.shape_6}]},1).to({state:[{t:this.shape_9},{t:this.shape_8}]},1).to({state:[{t:this.shape_11},{t:this.shape_10}]},1).to({state:[{t:this.shape_12}]},1).to({state:[]},1).wait(140));

	// Isolation Mode
	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#00FFFF").s().p("AgDAnIgXgTQgSgPgGAAQhGAHgkAAQBAgoAkgQQAPgGANAEQAEABAVANIAUALQAOAIACAHQABADAlgDIAqgFQgJAAAOAAIADAAIAkAAQhHAsgIADQgaANgWAAQgTAAgOgKg");
	this.shape_13.setTransform(235.4,393.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#00FFFF").s().p("AhSAyQgMgIgPgPIgagbIAoAMQAhAHABgLQAEgIANgLIAUgRIAZgUQAUgPAHADQAjAPArAdIAeAUIg3gFQgsgEgDAFQgDALgVAOQgKAIgWALQgYAPgFACIgEAAQgLAAgQgLg");
	this.shape_14.setTransform(267,392.1);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#00FFFF").s().p("AAyAUQgagQgPgEQgRgHgbgCQhLgIhdgOIBkAAQASABAwgCQApABATANQAjAUA1AMQAeAIA+ALg");
	this.shape_15.setTransform(260.2,356.2);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#00FFFF").s().p("AAQARQAQgHAXgCIAmgCQgGgBgVgPQgbgVgHgCQhWADhrACIChgVQAmgEAvAaQAaAPAzAkQhFgBgjgCQgYgBggALIg2AUg");
	this.shape_16.setTransform(246.9,337.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#00FFFF").s().p("AgRArQARgVAcgOQAHgEADgpIADg2QAGArADAsQABAWgOAIQgJAFgaAKQgJAEgRAUIgZAbQAVgkALgNg");
	this.shape_17.setTransform(299.4,368.7);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#00FFFF").s().p("AAsBCIAkgmQAYgYAIgQIARgXQAKgSgCgGQgBADgVAEQgWAEgFAGQgLAPgqADIg8ACQgVACgPgPQgRgUgMgLQgRgSgjgWIg4gkIBQAmQAsAWAfAZQALAEAQgCIAdgHQAXgEASgJQAagNALgEQAXgIAeABQAUABAiAGQgEARgSAZQgJAPgUAaQgOASgaAWQgOANgdAXQgLAJgGAaIgIApIAFhNg");
	this.shape_18.setTransform(300.4,343);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#00FFFF").s().p("AhdHXIgEgYQgMg6AAhSQAAgJgCgKIAFATQABAKANA1QAMAzABAYQACAWATAEQAMACAdABQgtAGgNAAIgEAAQgLAAgDgJgAh/D4QgIgSgWglQgVgjgSgSQgMgNAAgFQgBgEAKgQQBOiIhtinQgng6hFhKQhOhPgggiICUgdQAggGANACQAOADAaAQIA7AlIB2BMQA/AsAuApQAiAdBJgmIA3gcQAfgNAUAFIClArIiigfQgagFgjAXQgtAcgPAEIhAAQQgUAGgLgGIgagUQgvgmhIgsIh+hKIg9glIhrAWQA7BAAlAuQAxA9AkA6QAwBMgMBvQgJBNgdApQgEAGABACIAEAIQAdAiAWAyQAKAYAKAgIgKgWg");
	this.shape_19.setTransform(216.2,347.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#00FFFF").s().p("AAeA7QgfgGgOgTQgPgTAFgeQgKgBgcAcIgiAmQAmgxAzg9QAAANgCAgQABAbAMAKQAQAOASACIAlAGQAHgJAHgUIAKghIgJA+QgCAMgWADIgSACIgRgCg");
	this.shape_20.setTransform(279.3,386.5);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#00FFFF").s().p("AgTgVQAPgQAHADQAEABATARIAoAnIghgVQgYgPgJAAQgHABgZAUIghAbQAXgfAXgZg");
	this.shape_21.setTransform(222.8,391.1);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#00FFFF").s().p("AmmA2QAIiTBuhpQB3hyCugEQCogFB8BmIANALQByBjAOCUQAOCZhkB4QA8hZAGhgIgtAIQgjAFgJgIIgpgkQALgFAegJQAZgLABgQIAIhUIAJBSQgDAvguADIAMANQAIAIAfABIAsACQALikiAhzQh5htimgBQilABh3BtQh8BzAIChIAYgbQAQgPAOACIAcAGQASAEALAAQAGABAZgEIAXgDIAAAAIAAAAQgPgRgHgkQgIgmAOgOQAqgrBNhFQgvBJgOASQgDAFgOAPQgNAPgBAGQgCASAUAtIAbA+Ig9ABQgngBgVgIQgZgMgLgEQgTgHgQAKIgVAMQgIAHABANQAEAlALAiQASA2AkA1QhihyAIiVg");
	this.shape_22.setTransform(250.4,356);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#00FFFF").s().p("AjXBpQgsg8gogPQgWgJgkgHIg8gKIgugEQgjgEgGgGQgHgIABgSIAFgiIACgaQABgSAEgHIB/g8QApgTA1gBQAQAABTAGQBaAIA3AJQBOAMA/AWQAUAHBPAmQA9AdAoAHIDLAiIjEgRQgdgDgcgJIg4gVQh9gxiIgQIh8gKQhBAQg2AgIgGADQgdASgMAMQgVAVAIAYQAHAWAbAJQArAPAEACQAlAeAkA2QARAZAoBJQgnhAgZghg");
	this.shape_23.setTransform(199.3,313.1);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#00FFFF").s().p("AhBAtQAHgOARgBIAcgCQAQgBALgEQAHgDAUgEQASgGAAgJIAIhMQAEAYAEAxQAIAVgfAOQgTAJgeAEQgIABgOgCIgWgCQgNgCgIAMQgFAGgJARQAGgXAFgIg");
	this.shape_24.setTransform(302.1,374);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#00FFFF").s().p("AhIAsQgEgYALgNQALgTAkghQALgKASgKIAhgRQAPAoAJAnIABADIgBgDIAGAbQgSgdgJgMQgQgSgSARQgkATgQAWQgOAUgKAoQgHgagCgNg");
	this.shape_25.setTransform(273.5,385.3);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#00FFFF").s().p("AADBLQgug7AcgkQgfABgjgGQAqgdAggJQAggIAFgFQAIgIgNgZQgLgXgUgIIgvgKIAwgFQAbAAANAQIAgAnQAKANgGAQQgEAJgMAUQgIANgXAVQgRASAJASIBCCAQg2gxgZggg");
	this.shape_26.setTransform(275.4,362.1);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#00FFFF").s().p("AjZBqQBegrAUgPIBBgqQArgbAOgUQANg2gCgJQgCgNgjglIBlgcQA4gKAuANIBFAUQhdgMgPAAQhAAAglAhIAOAKQAIAHgCAGQAkgLAkAdQAMAKAsAzQgOgFglgSQgggQgTgEQgEgBgNADQgLACgGgCIgNA9QgkAYgcASQgcAThJAsQgKAHgiAJQgrALgPAGQhEAYAhApQgsgmBKgrg");
	this.shape_27.setTransform(243.5,362.9);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#00FFFF").s().p("AB/CBQAxhBgNgxQgHgYgmgFQgsgBgQgCQg6gFhPgTQgfgHg3geQg5gegfgIQgtgKg8gYIhmgsIBnAhQA8ATAsAIQAlAGBFAdQBEAbAmAGIBkAQQA/AGAmgQQAygUA5giQAkgUBDgrIBbg7QhvCPgtA3Qg0A+hfBZQgoAkgQAUQgeAjgJAhQAFggA7hMg");
	this.shape_28.setTransform(306.7,333.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#00FFFF").s().p("AgmCvIgQhIQgKgngRgXQgTgbgigPQgZgKgMgGQgUgMgBgPIgChBIgCglQAAgVAIgOQARgfAFgNQgEASgJAcQgGAYAEAXIAPBVQAEAAAKAEIAOAGQAnAOAhAaQAaAWAMAaQAHAPALAsIAHAqQAEAgAHAGQALAFAXgBIAkgBQAEgBAGABQAFABADgCQAOgrAEgHQAKgVAYgTIAxgmQgJAKggAcQgbAcgDAQIgLBLIgiABQgxADgmABIAAAAQgSAAgOgzg");
	this.shape_29.setTransform(207,374.1);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#00FFFF").s().p("AAQAuQACgLgIgOQgYgrgSgxQAYAZAMAUQARAYAJAaQAHAMgKAOQgGAIgOAOIAJgag");
	this.shape_30.setTransform(231.5,387.6);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#00FFFF").s().p("AFmEtQAbgaAOghQAvh2ghh3Qgih6hrhQQhmhNiCgLQhIgHhGAQQhHAPg+AlQAKAfBGgKQAlgFA8gQIAzgKQAigFAPAIQAcAPAnAYQAUAQAZAdIAoAxQgygmgcgTQgygigmgGQgOgCgvAGQhCAKgXACQhzAJgBg1QiSBYghChQgiCiBhCLQhHhSgShmQgShgAghfQAfheBHhIQBKhKBlgiQBdgeBnALQBlAKBZAwQBbAyA4BOQA5BQAKBhIABAQQAKB7hABrQgcAvgHAHQgSAUgnADQAtgiAKgKg");
	this.shape_31.setTransform(250.6,356.8);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#00FFFF").s().p("AiDAkQgFgaABgIQABgNAVgBIAYgBQARAAAHgEQAOgEAXgMIAkgSQAYgDApALIA/ARQg3gEgaAAQgtAAggAPQgdAMgUADQgVACgggDQgDARgCAlg");
	this.shape_32.setTransform(248.5,343.7);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#00FFFF").s().p("ACtCGQgLgDgMgQQgNgRgLgEQg3gXg/gwIhqhWQgOgKgeABQgeADgKAOQgMAVATAWQAFAGAfAXIBRA9QArAlAPApQgVgqg7gmQhHgogggUIhKgvQgGgEAAgPIABgXQgBgcAEgIQAEgJAZgLIA4gYQAbgLBAA2QAhAeAxAyIBOBLIAyAZQAcARAJAUQAIATAkANQATAGAlALg");
	this.shape_33.setTransform(228.3,282.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#00FFFF").s().p("ABzEpQgHgbgkgtIg2hGQghgPgOgDQgVgEgfAIIhGANQAlg8AaghIALgNQAGgHgBgFQgDgWgpgDIgzAAQAOgmgCgKQgDgLgfgeIAlAdQgHgYgYgPIgwgZIAlAPQAcAMAKAKQAJAKALAdQgBAFBfBEQgBACBaByIBpCCQARgiAxgeQA7ggAZgPQAtgXAbgQQAygfAAgWQABgjgHgWQgGgPgVgmQAbAeAJANQAMAUAFAdQAGgIAHgOQAIARALgFIAVgPQAYgUAMgHQAUgMAVgBQg0hehkg/Qhcg5hygVQiEgXhiANQiPAUgkBhQgdgug4AgQgiATgqAvQhFBOgWBgQgUBYAOBUQAPBaA0BCQg1g1gZhNQgXhGAEhRQABhfAlhNQAWgtAhgpIAcgdQAQgTADgPQAGgegEgIQgDgHgZgSIkXjUICuBWQAaAMAxAcQAsAYAiAHQApAJA1gBIBfgEQAXAAAogJQAugLAQgCQBCgHBAADQCIAJBrAzQB0A3BLBgQBSBnAGB5QABBfgRBCQgVBTg4A5QAzhCANhbQALhRgUhbQgKgsgXgrQgSABgOAJIgaAXIgcAYQgHALAPARQALAMgHAJQgEAGgOAMQAMgUgCgHQgCgEgUgRQgdAagUAhQABgRgNAKIgYAWIhFAwQgUAPg0AeQgtAegMAbIhMCcQgBhrADg0gAAOCXIgfg0QgUgfgRgRQgaAgglAxQARgBAZgEIAogFIABgBIAAAAIACACIAuAcIAAAAgAh/gEIAOgBIgZgYIgGAPQgDALAGgBIAOAAgAk6jhIgRAtIABgCQAJgSBBghQA1gcAugSIhhAXIhpgMg");
	this.shape_34.setTransform(241.2,347.4);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#00FFFF").s().p("AhUBMQgdgYgJgGQgNgIgeAHIhZAWIBehUQAygwAfgvQgNA1gIAWQgLAQAEAGQACAFARAKQAmAaAaAMQAjASAjAEIAKABQBxAKBWANQiSAagcACIgaABQhVAAg2glg");
	this.shape_35.setTransform(220,381.5);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#00FFFF").s().p("AABAKQACgLgHgWIgMgiQAeAkADAUQAEAVgWAlQAAgTACgcg");
	this.shape_36.setTransform(281.6,351.7);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#00FFFF").s().p("Ag2gLQAdgeAfADIAeADQAPABANgDIAigIQgUAUgJAHQgPALgUAFQggAFghAOQgoATgbAKQAjgvAJgKg");
	this.shape_37.setTransform(249.6,345.9);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#00FFFF").s().p("ADTGjQBSgkA2gQIAMABQgDABgiheQArgPAbgIQghAWgMAKIAbAhQAXg5ANgdQAXgxAcgbIAvgrQAPgOgBgHIgNgZQgdgzgkgkQgTAlgEAVQgFAVAEAsIhiBkIA8heQAIgPgEgVIgLgmQgDgPAKgYIARgnQAHgOgOgNIgfgUQgbgRgYgMQiAhCimgMQicgMiTAnQATAhgBAhQAAAOgMA4QgIAnAAATQAAAaAMAfQAOAkAcA9Ig2hQQgcgygBgoQgBgWADgjIAFg6QAAgIgKgQQgLgSgCgHQhoAkhKBCQAaAZAOA2QAIAfAKA7QAPA5AOA9IhAiaQgXhAgOgdQgNgQgQARQgIAKgOAVQgjAygaBDQgTA0gSBMQgUBSgCAOQgJA7AMAlQgOAEAJiqQAMhoAYhMQAehgA1hCIiMhoIgtgmQgegZgTgFQgVgGgnAIQgsAKgSACQgTADgNBCQgQBWgCADQgZA3gnAjQguApg3ADQBBgOAnhAQAjg2AFhJQAEg6ACgPQAJg4AUgFQAagFBGgUQBBgNAfAUQA3AgBBA4IBvBkQBmhsCmgvQCfgtCqAVQCuAVCEBVQCOBcA5CPQAggaA6gdIBhgsQAggQBKggQBCgfAeghQAjgfAzg3IBThZQAYgZAEg0QABg9ACgbIAKCJIAAAAQABAYgYAfQgeAhgLAPIhtCMQghArhMAmIh+A2IhQAdQg1ATgXATQgJAIgJAFQgDAEAGAVQAKAlAJA1QAGBFADAwQgDgagHgeQgOg5gkhkQguAggRAPQgeAagUAhQgIANgdApQgUAlAZAQQAGAEAQABIAYACIA8AVQA0ASADgEQgFAGgpADIhrATQg7ALgdAIQhmAfiIAKQAsgSBZgqgAJTHGQAGgRACgWQAAAngHAAIgBAAgAItGHIAAAAIAAAAg");
	this.shape_38.setTransform(252.9,342.2);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#00FFFF").s().p("AhoCKQgMgfgBgJQgBgQAPgWIAshBIATgbQALgMANgKQBtg5A9gbQAMgJAIgCQAFgEAIgUQAPgnAJgsQAEgVAJg+QgZgFgsAJIhGALQggADgcgCQgZgBghgFIj2gqICXAKQBeAGA4AAQA0gDBNgRIB/gcIACB0QABAqgQA1QgSA3gZAeQgIAJgOAHIgaAKIiLA8QgaALgSATQgHAHgdAkIgQAXQgMAQgIAFIAXBTQAcBmAQB7Qgchsg+ieg");
	this.shape_39.setTransform(368.5,251.2);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#00FFFF").s().p("AoPFCQBAgsAfgYQA0gpAbgqIERmnIBIh0QA1hLAvgEQAgAEAoAXQANAIAzAlQAfAWAVAgQA1BSAZArQAoBGAbA9IAMgsQBpA6CgBcIj4hxIgUBjQhMiVhvicQgPgVgKgKQgMgMgTgMIgwghQgqgZgIAGQgdAXggAvQghA4gQAXIhABgQgmA4gbAmIiDCwIgzBEQgdAlgfAVIgeAUIgFADIgCABQhdA8i3Bsg");
	this.shape_40.setTransform(263.5,207.6);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#00FFFF").s().p("AiDG9Qg4gDgjgVQgigTgZg4QgKgWgWhGQgXhHgHgmQgMhDAOgtQAJgmAhgxQAOgVAug5QA8hKBjhkQAVgTAggLQATgHAogLQDOg8BwgeQhTAkhvAuIgmAQIiRA7QgYAJghAtIgxBCQgYAehDBLQg3BFgJAyQgPA8ATBbQAOBEAeBOQAWA1BAAUQAoAMBQABQgtAFgiAAIgSAAg");
	this.shape_41.setTransform(139,306.4);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#00FFFF").s().p("AiRAxIAJAhQAEASAHAMQA5hOBehYQALgGASgGIAfgJQANgDATggIAcgsIgdBKQgJAVgiAXQgqAdgLAKQggAkgtArIhUBJQgFg4AAgyg");
	this.shape_42.setTransform(267.3,367.4);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#00FFFF").s().p("AC/AZQgggsgggOQgQgHghACQgkAEgQAAIhtgEQgJgEgNgMIgSgTQgIgCg2AWQgpASgJAFIAlgaIAsgfQAWgRAPAEIAkAXQAPAFAWgBIAmgCIBSgEQA4ABAQAUQAhAnAKAPQAVAdAKAeIAOAuQgjg8gKgQg");
	this.shape_43.setTransform(227.8,356.5);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#00FFFF").s().p("AAnBjQhNgjgKgoQgHAUgggPQghgPgFARQgHAVACAVIAIAsIgZgsQgKgSACgfIAGgzIAhAGQAVADAMgDQABgKAFgHQAKgWAshTIAMBQQAIA1AKAXQAEAHAMAKIATAPIA6AxIA4AyQhLgZgqgUg");
	this.shape_44.setTransform(218.6,271.4);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#00FFFF").s().p("AgDATIgUgTQg0g0g5hPQBUA4A+A+QBCBAA1BRQhCgxhGhAg");
	this.shape_45.setTransform(311,152.3);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#00FFFF").s().p("AiXC+QgBAIAnAmQAJgmAghhIA7AcQgKgSAIgoQALgvADgRIALhNQAJguAQgcQBPiPBiiDIhICNQgLAageA+QgZA3gEAjQgNA5gLBjQgOB1gGApIgkgXQgfgRgDAJQgcBBgdBKIgYgfQgPgVgBgLQgIAQgOAgIgwBvQAmiZAWhMg");
	this.shape_46.setTransform(236.2,178.1);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#00FFFF").s().p("AmELcIgxgOQgcgIgVgBQg3gEg+gVQgZgJhXgkQANgOgBgTIAAgFQABAKAEAJQAHgJA2g2QAngnAOgbQANgYAJgzIANhPIABCWQgCAOgdA5QgdA2gJACQAOAAAWAMQAOAGAXAMQAOAGAZAFQAgAFAJACQATAFAUAKIAmAUQAbAOArAFIBIAGQgvAJgYADQgTACgQAAQgVAAgQgEgAGDJdQBNgTABgCIAAAAQgPgJgEgXIgBgnQgBgPAHgWQANgoAAgIQAAgPgWgeIhMB+QAZgsAOgdQAeg+gQgVIgUghQgOgXgKgHQgJgGgYgBIgkgBIBIgFIAPARQAOANAAABIAAABIAAgBQABgGgHgQIgKgWQATgiARgeQASgYACgIQADgLgUgTQgbgbgjgZQiOhgjdgOQhlgGhdAMIhaAMQg7AMgQAZQgOAWAAAFQAAAGALAYQAJASgCAYIgGAtQgFgngDgJQgGgVgSgSIgSgUQgGgJAFgOQhVAqhCBMQAEAeAFBZIgdhdQg7BSgjCOIgaBnQgJApACAcIgBgSQgBgzAGg3QAVi4A/hrIidgeQgdgFgxABQhAAAgPgBQgXgBgQAKQgLAGgaAUQg8AnhWArQAPgNBChDQAygyAigZQAegVBAgBQAjgBBCADQAqACA6AVQAhAMA/AaQBMhrCAg8QBxg0CQgOQCSgNCKAgQCTAiBnBNQBxBXAqCCQAZgVAtgWIBLgkIBug5QBAgiArgcQAcgTAdgyQAQgdAbg1QAJgQAZgkQAWgiAGgWQAEgMgEgbIgFgmIgIhvIgDgzQgEgWgSgUQgVgYgLggIgQhAQgEgTALgVQAGgNAQgYIAcgvIBqgFIhNAMQgXAEgPAeQgPAngIAQQgMAXAUAqQARAkAXAWQAZAYAJAbQAEAOAHAxIAVCkQAEAegFARQgDAMgSAhQglBHgUAjQgiA8geApQgaAhgzAcIhaApQgOAHhuAqQhOAegoAcQgQAMAJArQAGAYAMAqQALBBADA+QABBrgKgDQAJgdgFgsIgNhJQgThmgdhLQg6ApgbAXQgCACAVAwIAHgSIAABGQACAmAJAeQADAPAnAXIAzAdQinA4jgAtQBzhFBRgggAG8FdQAigbARgQQAggegKgTQgZgxgkgrIgdA0QgVAoAFALIAhBQQgEgMALgDIACAAQAHAAgQAQg");
	this.shape_47.setTransform(254.3,325.4);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#00FFFF").s().p("AASFZQARgFAvgJQApgKAQgNQARgPAVgjIAhg3ICFhsIAKAaQAIgpgBgNQgCgTgUgcQgRgXgHgFQgKgHgagFQiDgajQguQgygLg0gmIhahLQhXhKhVhMIDRCSQAUAOAsAiQAoAdAfAEQC6AbCUAZQAOADAnADQAiAFANALQAJAGALATIAQAbIADAFIAYAfQANAWgEATIg7D4IgZhGQgOgrgGgdQgwAaguAuQgWAXg4BDIjNAjg");
	this.shape_48.setTransform(378.4,212.2);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#00FFFF").s().p("Aj4H5QhHgvgmgnQg7g8gCg8QgDg7AWhRQAHgcAkhsIAlhyQAXhGAYgoQAGgOAXgUQAZgUAIgIQA2gzBPhHQAfgfAQgOQAdgaAXgHQAZgIApgFIBDgIQBxgRCXgVQiPApj3BDQgZAQgiArIg2BCQgSATgsApQgnAmgRAbQgSAfgRA4IgcBaIgnBpQgVA9gLAuQgMA3AAASQABAiAZAiQBFBhAnAJIFVAwIiwgCQhBAEglABIgJAAQg8AAgcgSg");
	this.shape_49.setTransform(123.9,298.9);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#00FFFF").s().p("Ah4BGIBOgMIgzgIQAOg2gHgUQgIgWgzgdIArAMQAVAHAOASIALAOQAIAJgBAGIgCALQgCATAVACQALABAbgBIADAAIAFAAQAaADAlAHIBFALQhKAVg6AHQgdAEgeAAQgmAAglgGg");
	this.shape_50.setTransform(272.2,380.2);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#00FFFF").s().p("AgmBNIiYgEIBrgZIAzgIQAmgGACgFQAJgXALgHQAHgGAbgJQAJgDAJgLIAPgTQAKgLALgEIAbgFIAwgIIhIAgQgIAHgJATIgOAcQgNAMgQAHQgKAHgHAZIBHAQQgpACgxAAIg9gBg");
	this.shape_51.setTransform(237.4,380.4);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#00FFFF").s().p("AgIBFQgNgcAAgoQAAgZgDglIgGhAIAdAuQAOAbAFAXIABBDQAAAnAIAcIAEAVQgegjgJgWg");
	this.shape_52.setTransform(428.5,239.3);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#00FFFF").s().p("AhlC0Ig0gzIAxAjQARAMATgIQALgFAZgRIArgnQAkgeAFAGIAUAXQgJgRAIgjQAMgmADgPIAfAiQAEgFABgVQABgSgCgKQgchDgyhlQBEBcAmBFQAEBGABBZQgtgwgGANQgFAMgKBNQgegwgJgGQgLgGgnAbQgzAigcAAQgNAAgIgIg");
	this.shape_53.setTransform(403.9,222.5);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#00FFFF").s().p("AidARQAqggAkgUQAlgVAKgEQAbgNAVgDQAOgCAVACIAjAEQBRAGBAAKIiJAMQhQAIgyAXQgmAPicBMIBJg9g");
	this.shape_54.setTransform(359.4,241.1);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#00FFFF").s().p("ADdBTQgkgTgbACQhTAGg3ACQgpABgigMQgYgJgtgZQgpgXgqgsIhHhPIB2BYQBHAwA+AOQBGAACOAJQAVAIAdAaIAsArQgmgYgUgMg");
	this.shape_55.setTransform(378,191.9);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#00FFFF").s().p("AAIAIIgPgPQgKgHgKADQghAFgqADQApgPAfgKQASgFAQALIAdAZQATAOALABIApgFQgnARgLAAIgBAAQgQAAgdgWg");
	this.shape_56.setTransform(264.9,341.1);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#00FFFF").s().p("AiAAEIgQgiIAYAXQALAHASgEQA8gJAqACQA4ADBOgCIgsAUQgZAMgVACQg3AHgmAAQhMAAgOgbg");
	this.shape_57.setTransform(234.3,339.8);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#00FFFF").s().p("AIvD+QgBgNgNhBQgXhygfhCQgigIgWgQQgXgQgTgdQgSAAg+AEQAmgPAOgDQAcgFAUAOQAYAbAKAKQASARAWAMQguhihihCQhag8h3gWQhygWhyASQh2AThYA4QiCBSAVA0IALAcQAHAQADALQAFAWgOAYIggAnQgKAMgLAAIgXgBQgTgCgHAZQgEAOgEAfIgRBTIgBAIQgCAuADATQgGgbAFgmIADg6QAHhtgCAAQgLAFgSAUIgaAeQAKgkALghQAIgTAGgEQAFgEAWgCQAMgNANgpIAUg/QAOgUAEgKQAIgPgIgQIggg/QgIgQgLAAIggADQhdAGg6AIQgYADgGgNQgKgYgHgFQgYgXg3gYIhWgmQBeAbBIAXQAJAEAOAPQAOAOAGACQAhgLAsgBQAUAAA6ADIAvAEQAPAGAJAeIAXBRQBVh6CZg2QCPgyCeAXQCgAYBzBaQB9BjAiCVQAAggABgIQADgSANgSIATgSQAMgMADgIQADgHgEgYQgDgRASgIQA4gcA8gZQBNgeBigeQh+BNhmAyQgjASAAAFQAAAXgGAMQgEAKgWAQIgeATQgMAKgFAfIgGAwQATBkADAdQAIBRgTAvQAIgfgGgvgAnaApIAFAAQAJgEAKgPQAJgOABgKIAAgjQgTAkgPAqg");
	this.shape_58.setTransform(251.1,351.9);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#00FFFF").s().p("ABnBFQgVgOgSgCIgsAFQgUgBgMgTIgYgnQgOgbgLgLQgLgMgagQIgngZIAuALQAcAHAPAJQAQAKAVAgQATAgAOAJQABACALABQAgACALAEQAQAHAQAUIAeAoIgkgZg");
	this.shape_59.setTransform(66.8,320.1);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#00FFFF").s().p("AiBErQAGghgBgWQgBgWgLglIgQg6QgKgVAPgeQAVggAIgOQAohHA6haQAggzA0g/IBdhsIh5DLQhJB9gwBLQgbAqgEAOQgFATAFAuIAGA2QABAdgIAYIgXBMIALg3g");
	this.shape_60.setTransform(102.7,283.3);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#00FFFF").s().p("AhLBdIgrgvQgcgjAGgSQANgvAjhSIgPB1QgCARAGAGQAEAFARAPIAhAhQAVAVAGAPQAOABAVAIIAiAOIAKgBIgCAAIBXgFQhNAagmAAIgEABQg6AAgogsg");
	this.shape_61.setTransform(97.6,339.1);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#00FFFF").s().p("AgfAlQAOgZgDgHQgJghATgaQASgcAdAeQAJAHAFAKQgZgKgGAFQgHAEAFAZQACATgCAGQgCAFgLAPQgbAUgcAPIATggg");
	this.shape_62.setTransform(118.4,340);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#00FFFF").s().p("Ai0EHQiEgEhpgJQBLgOA8gIQghgJgPgFQgbgJgPgQQgJgLgRgbQgPgZgNgLQgegdgPgeQgMgXgPguIAJAOIAEh+QgagSgigcIg4gvICugIQAWgBAfgKIA0gSQA2gRBUALQAwAGBbATQA3AKBBAXQApAOBMAgQj1gvjWACQgbABgzAPQgyAPgbAAQgRAAgVgCIgmgFQALARAPATQALAQgGAbQgDAPgMArQgJAmAKAQQASAcAQAQQAPAOAeATQATAMAMANIAbAfQAOAMAUAEQBTAOBwAjIBJAYQAVAGAWgFQANgDAfgLQBBgTBRgWQAbgGACgCQAGgFgLgUQgMgXgTgTQguguhLgOQhCgMhHAPQhFAOgqAuQgjA9ABAFQgBgFAOg4QASgkAhgcQA/gyBdABQBLAABJAtQBXA2gLBJIBTgTQA0gOAXgUQARgKASg2QAKghABgKQAAgNgLgcQgHgQgQgLIgjgTQgMgGgMgTIgTgdQgPgOgYgJIgvgQQA+gFAUAAQAOABARANIAdAYQAVARAuAVQAzAYASAMIBeA8IhRgKQgugHgigIIgCAZIgBASQgDBAgSAxQgGATgXAQQgOAJgcAPQgVAMgIAEQgEACgfAGQgaAFgEAFQgGAJBTARQhAAGhUACIiUABIAWAHQiegBhOgCg");
	this.shape_63.setTransform(260.3,349);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#00FFFF").s().p("Al3CUICmg8QAsgPATgIQA0gVgHgMQgJgPgYgWQgfgdgGgIQAaAQAUAGQAkALgHgeQgBgKglgKIgggHQAQgBA8gHQBQgJALgDQAngLA1gYIA5gaQASgIAJAJQAFAHALAWQAXAkANAKQAMAJAoAOIBfAhIihAcQgfAFgIAGQgHAFgRAcQgVAdA7AYQAUAJA9AQQgZgBhngMQhOgJg0AJIBAANQhpANh5ADIg+ABQhKAAhagEg");
	this.shape_64.setTransform(260.5,360.5);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#00FFFF").s().p("ACkAcQg5gMAGgNQgDAIhKANIhXAOQgJgCgMgPQgOgQgEgDQgMgGgPgCIgdgDIhagKQAQgCBAgNQA7gKARANIATAQQANAKAJABQApgMApgBQAXAAA8AFQAVAIAiAQIA4AbQgygGgXgFg");
	this.shape_65.setTransform(259.7,306.4);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#00FFFF").s().p("AibIgIARg3QAKgcAPgWQAKgQAZgbQAWgZATgLQARgLAhgJQAtgLBAg1QAjgdA/g4QAogeAFgEQARgTADgfQADgZgLgaQgMghgZACIgFA6QgFAigVAMIhRAtQglAUg9AVIhkAhQhBAYhcgiQgagJh7g9QAaAKA2AYQAwAUAiADIBIAHQAnABAfgOIB4g3QAtgVBIguQAPgKACgSIAAglQgGgMgXgUQgVgQgQgIQhrgKgwhqQgYg0gbiUIguj9ICnD7QAJAMASAkQATAgAOALQAHAFAXAEIAgAGQBbAeAzBDQBMBhAGCuQgBAdhNAxQhWAxgTAMIhkBBQg4Agg0AKQgrAIgmA5QgWAhgaA/QgHASgsAQQgxAPgQAGg");
	this.shape_66.setTransform(325.4,296.8);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#00FFFF").s().p("AFrEcQgygsgTgNQgJgGgNABIgWADQgeABgRgMIgignQgUgXhDAHQhLAMgWABQgwADhIgiQhQgrgjgRQhAgehxARQh/Acg0AKIBdkPIAYhEQAIgXA4gSQAegKA0gMQA7gTBLgEQAfgBBrACQAvABAaAFQAhAHAkASIBLAmIgCgIQBSAkApAUIB2AEQhFANgRACQgtAFgogJIAkBWIhHgvQgrgcgfgMQgzgQgYgGQgngJgjAFIirAXQghAFgoAOQgxARgRASQgGADgBAGIgEANQgDATAGABQAEABAcgCQBJAEBNAlQAXAMBwBDQAoAYBEAFQAoADBNABQAaABAUApQAUArAQADIAyAEIAwA0IA0A4QAcAaAkAEQBJAHA6AIIinARIgDAAQgdAAgtgkg");
	this.shape_67.setTransform(180.1,323.4);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#00FFFF").s().p("AkrINQAsAjAfgEQAagDAvglQA8gvA6hCQBLhWBzhYQAPgMAHgQIANgmIAviFQgJgXghgwQgdgsgngcQgdgUg8gaQhFgfgjghQgQgXgKgJQgQgQgUAMQgWAMADArIABAJQADAZAJAbQgthkATh0QAQhfA8hvQALCZALBCQAKA9AiAeQAXAWBHAbQA9AXAkAcQApAeAhAzIAhAyQASAgAAAXQhECygIASQgUAkg8AlQhKAugSARIhUBSQgwAtgrAdQg/AqgbAEIgIABQglAAgpgpg");
	this.shape_68.setTransform(333.1,295.2);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#00FFFF").s().p("AghCTIgLgDIgEgBQhvgfiBhEQCkAnAYAFQBuASBPgVQCogqgCgnQAFgcgcg0IgthMQBDBDAUAkQAlBEgzAvQg7A1hQAWQguAMguAAQgfAAgfgGg");
	this.shape_69.setTransform(303.8,301.1);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#00FFFF").s().p("AFQAhQgqghgwgUQgogQgfgGQghgGgrABQggAEgPgDQgUgChjgRQhKgNgvAHIjeAZIB4ghQBGgSA0gFQAygEA/AFQAkAEBMAKIA/AAQAmAAAYAGQAwAMAxAhQA0AgAcAlIA0BIQgyg0gZgUg");
	this.shape_70.setTransform(260.5,337.2);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#00FFFF").s().p("Ai5DQQg4gChCgqQhAgqgbgxQgbgxgNhGQgGgfgJhfQAxBJASAfQAagbAkgqIA8hGIhDBjIg6BSQAZBEAzApQAsAjBNAYQATACAggGIAzgJQBKgGCDAUQCRAVA+gBICEgCQi6AeiggEIhdgEQg1gCgmAGQgNABgpALQghAJgUAAIgCAAg");
	this.shape_71.setTransform(163.7,318.1);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#00FFFF").s().p("ADAAdQgigNhagcIgpgRQgbgLgMACIirAZQhrAPhAAIQDDg9CQgbQAZgFAyAVQAaALAsAWQAdANAwAZQA3AdAWALQgBgBgBAAQAAAAAAAAQABAAABAAQABABACABQAHADgIgDQAgAPAmAPQhEgOhgglg");
	this.shape_72.setTransform(175.8,291.7);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#00FFFF").s().p("AgwAGQAagWAWgCQAaAAAXAWQgcAOgUABIgCAAQgVAAgagNg");
	this.shape_73.setTransform(255.6,372.5);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#00FFFF").s().p("AhYAfQglgHg7gYQAogEA+gMIBkgSQApgGAoALQAqAMAfAaIAMANQgpgMguADQglADgyAOQgWAHgaAAQgYAAgagGg");
	this.shape_74.setTransform(263.2,360.6);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#00FFFF").s().p("AAWA9Qg2gnhDgIQAMgEAuABQApAAALgHQABgCgPgaIgUgfQgggrhAgzQBoAaA6BPQAyBAAXBuIAEAUQhEhEgegVg");
	this.shape_75.setTransform(289.4,347.5);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#00FFFF").s().p("AiKgDQAqguAugUQAugTBRAHQBuAJAUgBQgnAPgyAIQgiAGg5AFQgKABgpAUQgsAUAHAGQAHAHAkgCIAugBQBGAGBPAvQhogbhhASIhbAPIhbANQAog7Acgcg");
	this.shape_76.setTransform(250,339.9);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#00FFFF").s().p("AAAATQgxgCg3gTQBFgSAkACQApABA/AWQgzAOguAAIgIAAg");
	this.shape_77.setTransform(263,361);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#00FFFF").s().p("AgfBSQgthPBcg+QAjgYB/gzQgXAVhDAwQg8AvgMAiQgKAZAWAbQATAYAZAFQA8AMAuANQhOAGhkAEQgqABiHABg");
	this.shape_78.setTransform(222.3,336.9);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#00FFFF").s().p("AgZAtQgJgHgPgRQAXAFAVggQAYgmAXgEIAIAAQACAWg0BFQgEAHgHAAQgGAAgIgFg");
	this.shape_79.setTransform(313.2,349.7);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#00FFFF").s().p("AgCBTQgxgoAAgBQAAgCAhAOQAgAMACgDQgGgUgIhKQgGg7gRgiQBFA9ADB0QACAhgDAoIg0grg");
	this.shape_80.setTransform(296.9,348.1);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#00FFFF").s().p("AiyGIQArgSAPgaQAWgkgbhZIgyh+QgdhNAIgzIAKhIQAHgrANgaQAKgSATgXIAhgoIBqiHQATgTABgEIgBBuQAABBgFAsIARBLQAJAtAFAeQAKAPAmAPIA5AXQgUgKAhAEQAeAEghABIBZgDIhFAMQglADgegJIhPgZQgMgEgFgPIgIgdQgTg9gNgUQgegrgtAcQgXAPgLAwQgGAbgGAxQgEAtAWBKQAfBlADASQAVBzgxAmQgpAghbAGQAwgLAYgJg");
	this.shape_81.setTransform(328.5,269.9);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#00FFFF").s().p("AgLgRQgngMg3gKIhggRQA4gHAhgBQAxgDAmAFQAqAKAuAZQAiASAvAgQAhAXAZAVQihg+g0gWg");
	this.shape_82.setTransform(271.5,325.7);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#00FFFF").s().p("Ag6AXQAZgdAbgLQAcgLAlAJQggAegVAIIAAAAQgOAFgXAAIgbgBg");
	this.shape_83.setTransform(231.2,323.3);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#00FFFF").s().p("AhqAPQAoABBCgYQBGgbAlgBQhQA3gVAJQgWAJgWAAQgiAAgigWg");
	this.shape_84.setTransform(199.7,333);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#00FFFF").s().p("AjbDTQgpgegMgpQgJgfABg7QACgwAIhAIAQhxIAhBfQAegwA3gnQAngdBCggIBFghQApgTAggEQAYgDAjACIA8AGQAlADAOAHQhagUhrAwQhJAghhBLQg6AsghBBQgUAngcBcIgKgjQgFArAEAVQAFAbAaAbQAqAsBTA1QhVgjg2gog");
	this.shape_85.setTransform(145.9,310.6);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#00FFFF").s().p("AABgqQAZgPASAOQARANACAdIgBAIQgOgTgKgCQgIgBgRAOQgXAVgzAeQAYhFAmgXg");
	this.shape_86.setTransform(323.4,238.9);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#00FFFF").s().p("Aghg2QAkAoAWAxIAJAUQgwgkgThJg");
	this.shape_87.setTransform(313.8,289.4);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#00FFFF").s().p("AgcAtQATgJAFgYQADgdADgOIAJgWQAXAigGAqQgFAfgXAAQgLAAgRgJg");
	this.shape_88.setTransform(302.4,352.9);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#00FFFF").s().p("AgbgBQAHgqAhgYQAGgFAKgDQgLAZgMAyQgLA0gKAYQgRgpAFgkg");
	this.shape_89.setTransform(120.2,308.5);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#00FFFF").s().p("AgfBeQARgVgCgEQgJgDgMgPIgQgYQgbglANglQAEgJAmg9QgBAJgOAlQgLAiAFAJQAHAXAdAcIAuAtIAAABIgWAUQAlAGAVAEQgyAKhKAIIAVgXg");
	this.shape_90.setTransform(213.4,340.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_14},{t:this.shape_13}]}).to({state:[{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15}]},1).to({state:[{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23}]},1).to({state:[{t:this.shape_34},{t:this.shape_33},{t:this.shape_32}]},1).to({state:[{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35}]},1).to({state:[{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42}]},1).to({state:[{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50}]},1).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64}]},1).to({state:[{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68}]},1).to({state:[{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77}]},1).to({state:[{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86}]},1).to({state:[]},1).to({state:[]},33).wait(110));

	// Layer 3
	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],0,0,0,0,0,5.5).s().p("AglAmQgQgQAAgWQAAgVAQgQQAQgQAVAAQAXAAAPAQQAQAQAAAVQAAAWgQAQQgPAQgXAAQgVAAgQgQg");
	this.shape_91.setTransform(250.6,391.9);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],0,0,0,0,0,21.3).s().p("AiUCVQg+g+AAhXQAAhWA+g+QA+g+BWAAQBYAAA+A+QA9A+AABWQAABXg9A+Qg+A+hYAAQhWAAg+g+g");
	this.shape_92.setTransform(250.6,382.7);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],0,0,0,0,0,34.3).s().p("AjvDwQhjhjAAiNQAAiMBjhjQBkhjCLAAQCNAABjBjQBjBjAACMQAACNhjBjQhjBjiNAAQiLAAhkhjg");
	this.shape_93.setTransform(250.6,375.3);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],0,0,0,0,0,44.3).s().p("Ak1E2QiBiAAAi2QAAi1CBiBQCAiAC1AAQC2AACBCAQCACBAAC1QAAC2iACAQiBCBi2AAQi1AAiAiBg");
	this.shape_94.setTransform(250.6,369.4);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,51.6).s().p("AlnFpQiWiWAAjTQAAjSCWiWQCUiVDTAAQDTAACWCVQCVCWAADSQAADTiVCWQiWCVjTAAQjTAAiUiVg");
	this.shape_95.setTransform(250.6,365.3);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,55.9).s().p("AmGGHQihihAAjmQAAjkChiiQChiiDlAAQDlAACiCiQChCiAADkQAADmihChQiiCijlAAQjlAAihiig");
	this.shape_96.setTransform(250.6,362.7);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.rf(["rgba(0,255,153,0.698)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,57.3).s().p("AmQGRQimilAAjsQAAjpCminQClimDrAAQDrAACnCmQClCnAADpQAADsilClQinCmjrAAQjrAAilimg");
	this.shape_97.setTransform(250.6,361.9);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.rf(["rgba(0,255,153,0.62)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,55.4).s().p("AmCGEQihihAAjjQAAjiChigQCgihDiAAQDjAAChChQCgCgAADiQAADjigChQihCgjjAAQjiAAigigg");
	this.shape_98.setTransform(250.6,361.9);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.rf(["rgba(0,255,153,0.541)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,53.5).s().p("Al1F2QibibAAjbQAAjaCbicQCaiaDbAAQDcAACbCaQCaCcAADaQAADbiaCbQibCbjcAAQjbAAiaibg");
	this.shape_99.setTransform(250.6,361.9);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.rf(["rgba(0,255,153,0.467)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,51.6).s().p("AloFqQiViWAAjUQAAjSCViWQCViVDTAAQDTAACWCVQCVCWAADSQAADUiVCWQiWCUjTAAQjTAAiViUg");
	this.shape_100.setTransform(250.6,361.9);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.rf(["rgba(0,255,153,0.388)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,49.7).s().p("AlbFcQiPiQAAjMQAAjKCPiQQCQiQDLAAQDLAACRCQQCPCQAADKQAADMiPCQQiRCPjLAAQjLAAiQiPg");
	this.shape_101.setTransform(250.6,361.9);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.rf(["rgba(0,255,153,0.31)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,47.8).s().p("AlNFPQiLiLAAjEQAAjCCLiMQCKiKDDAAQDEAACKCKQCKCMAADCQAADEiKCLQiKCJjEAAQjDAAiKiJg");
	this.shape_102.setTransform(250.6,361.9);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.rf(["rgba(0,255,153,0.231)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,45.9).s().p("AlAFBQiFiFABi8QgBi7CFiFQCFiEC7gBQC8ABCFCEQCECFAAC7QAAC8iECFQiFCFi8AAQi7AAiFiFg");
	this.shape_103.setTransform(250.6,361.9);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.rf(["rgba(0,255,153,0.157)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,44).s().p("AkzE0Qh/h/AAi1QAAizB/h/QB/iAC0AAQC0AACACAQB/B/AACzQAAC1h/B/QiAB/i0AAQi0AAh/h/g");
	this.shape_104.setTransform(250.6,361.9);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.rf(["rgba(0,255,153,0.078)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,42.1).s().p("AklEnQh6h6AAitQAAirB6h6QB5h6CsAAQCsAAB6B6QB6B6AACrQAACth6B6Qh6B5isAAQisAAh5h5g");
	this.shape_105.setTransform(250.6,361.9);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.rf(["rgba(0,255,153,0)","rgba(0,0,0,0)"],[0,1],-0.1,0,0,-0.1,0,40.1).s().p("AkYEZQh0h0AAilQAAijB0h1QB0h0CkAAQCkAAB1B0QB0B1AACjQAAClh0B0Qh1B0ikAAQikAAh0h0g");
	this.shape_106.setTransform(250.6,361.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_91}]}).to({state:[{t:this.shape_92}]},1).to({state:[{t:this.shape_93}]},1).to({state:[{t:this.shape_94}]},1).to({state:[{t:this.shape_95}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_97}]},1).to({state:[{t:this.shape_98}]},1).to({state:[{t:this.shape_99}]},1).to({state:[{t:this.shape_100}]},1).to({state:[{t:this.shape_101}]},1).to({state:[{t:this.shape_102}]},1).to({state:[{t:this.shape_103}]},1).to({state:[{t:this.shape_104}]},1).to({state:[{t:this.shape_105}]},1).to({state:[{t:this.shape_106}]},1).to({state:[]},1).wait(139));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(219.7,386,60.9,12.6);


(lib.explode = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Ñëîé 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAREpIgtgDIgwgBQgdgBgTgFIgBgBIABgCIAQgDIAAgDIAFgGIgRAKIAfgZQATgRAMgIQgzgogagTIgEgDQgYgNgPgPQhCgsgjgfIAAgCIACAAQAZANAUAOQAdAHAqAUIBDAiIBNAkIgOgSQgYgdgFgLIgKgNIgCgBIAAgBIgIgLQAAAAAAAAQAAgBAAAAQAAAAAAgBQABAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQABAAAAABIAPANQAHAFASARQALAGAlAdIARANQgGgugChIIgEh0IgJh7QgFhKgBgxIABgBIABAAQAIAjAEAfIAAgOIABAAQAKA0AJBJIAOB8QADAZALBBQAJA5AEAiQAFAQAFAKIAAAAIACAHQADgQAIgWIAOgkIARgzQAKgdAJgUIADgBIACgHQABAAAAAAQAAAAAAAAQABAAAAAAQAAAAAAAAQABAagFAkIgLA9IgMBSIA2hCQA8hLAegeQAAAAABAAQAAgBABAAQAAAAAAABQABAAAAAAQAAABAAAAQAAAAAAABQAAAAAAABQAAAAAAAAIgHALIAHgHIACAAQABAAAAAAQAAAAAAAAQAAABAAAAQAAAAgBAAQgNAXgYAeIgoA0QgXAegqA+QAAACgEAEIgGAIIgBABIgBgBIAAAAQgCADgDgBQAAAAgBAAQAAAAAAAAQgBgBAAAAQAAgBgBAAIgDACIgJADQgDAEgDgDQgUADgRgFQgRADgWAAIgGAAg");
	this.shape.setTransform(1.5,167.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFE655").s().p("AgNGBQgFgCACgFIhDgDQg9gCgmgFIAEgDIAwgeQAcgTAPgRIABgEIACgBIiNhtQiHhkhBg1IAdANIAFADQAmAQA2AZIBcAqIBDAeQAqASAaAPIgLgXIgcgzQgQgegIgXIB+B7IAXARQgDgegBgtIgChKIgEiYIgEhhQgBgOAAgNQgGhyACg5IANAjQAaBeAlC0IAfCcIASBWQAhhcAPgtQACgGAGACIABAUIgBACQAFAqADBSIACA2QASgdAggnIA2hAIBBhRIACgBIBDhSIACAAIghAuQg8CHhhCoIAZgPIABgBQAOgLAMgFQAVgNASgGQABAAAAAAQAAAAAAAAQABAAAAAAQAAAAAAAAIgBACIgOANIAQgMQABAAAAAAQAAAAAAABQAAAAAAAAQAAAAAAAAQgaAigsAqIhMBFQgBAIgIAAQg/AHggACIgkABQgiAAgYgFgAlRBWQAAgBABAAQAAgBAAAAQAAAAAAgBQABAAAAgBIgdgQg");
	this.shape_1.setTransform(0.5,161);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFE655").s().p("AA1AuQgcgWg0gsIgBAAIgagXIABgBIABgBIAHAGQACAAALAKIAcAYIA7AxIgBACIgBAAg");
	this.shape_2.setTransform(-81.2,120.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFE655").s().p("AA3AwQhHg0grgnQgBAAAAgBQAAAAAAAAQAAgBAAAAQAAgBABAAQAAgBABAAQAAAAAAgBQABAAAAAAQAAAAABABQAxAhBDA5QAAAAABABQAAAAAAABQAAAAAAABQgBABAAAAIgDACIgCgBg");
	this.shape_3.setTransform(-134.5,80.3);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFE655").s().p("AgBAAQAAAAAAAAQAAgBABAAQAAAAAAAAQAAAAAAAAQABAAAAAAQABAAAAAAQAAAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAQgBAAAAAAQgBAAAAAAQAAAAAAAAQgBAAAAAAQAAAAAAgBQAAAAAAgBg");
	this.shape_4.setTransform(-52.6,149.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFE655").s().p("AgdA4QAAgBgBAAQAAAAAAgBQAAAAAAgBQAAAAAAgBIAag1QAOggAPgUQABgBAAAAQABgBAAAAQABAAAAAAQABAAAAAAQABAAAAABQABAAAAABQAAAAAAABQAAAAAAABQgIAYgSAeIgeA0QAAAAgBAAQAAABAAAAQAAAAAAAAQgBAAAAAAIgCAAg");
	this.shape_5.setTransform(58.5,138.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFE655").s().p("AgsBWQAAAAAAgBQgBAAAAAAQAAAAAAgBQAAAAAAAAQAohYAthPQABAAAAgBQAAAAABgBQAAAAABAAQABAAAAAAQABAAAAABQABAAAAABQAAAAAAABQAAAAAAABQgkBQgzBWIgCABIgBAAg");
	this.shape_6.setTransform(38.6,178.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFE655").s().p("AgPBFIALhFQAHgpAIgbQAAgBAAgBQABAAAAAAQABgBAAAAQABAAAAAAQABAAAAAAQABAAAAABQAAAAAAAAQAAABAAABQgCAdgJAnIgPBGQAAABgBAAQAAAAAAABQgBAAAAAAQgBAAAAAAQgBAAAAAAQgBAAAAgBQAAAAAAAAQAAgBAAgBg");
	this.shape_7.setTransform(49.3,75.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFE655").s().p("AgsDFQA1i7AcjNQABgDAEAAQAEgBgBAEQgJDJhNDAQAAAAgBAAQAAABAAAAQAAAAgBAAQAAAAAAAAQgBAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAgBg");
	this.shape_8.setTransform(41,127.9);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFE655").s().p("ACEBLQhqgwihhiQAAAAgBgBQAAAAAAAAQAAAAAAgBQABAAAAAAQAAgBAAAAQABAAAAAAQAAAAAAAAQABAAAAAAQCoBQBkBAQABAAAAAAQABABAAAAQAAABAAAAQgBABAAABQAAAAgBAAQAAABAAAAQgBAAAAAAQAAAAgBAAIgBAAg");
	this.shape_9.setTransform(-87,143.8);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFE655").s().p("ABuBEQgygWg/gnIhuhFQgBgBAAAAQAAgBAAAAQAAgBAAAAQAAgBAAAAQABgBAAAAQABAAAAAAQAAgBABAAQAAABABAAIByA+QBCAjAsAhQABABAAAAQAAAAAAABQAAAAAAABQAAABgBAAIgCACIgCgBg");
	this.shape_10.setTransform(-44.9,152.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFE655").s().p("ACUB2QghgVgsgjIhKg8IiVh2IABgCICYBzIBNA4QAtAiAdAaQAAABAAAAQABABAAAAQgBABAAAAQAAABgBAAIgCACIgBgBg");
	this.shape_11.setTransform(-91.6,122.7);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFE655").s().p("AgCBDIgBhDQgBgmADgcQAAAAAAgBQAAAAABAAQAAAAAAgBQAAAAAAAAQABAAAAAAQAAAAABAAQAAAAAAAAQAAABAAAAQACAcAAAnIgBBDQgBAAAAABQAAAAAAAAQgBABAAAAQAAAAgBAAIAAAAQAAAAgBAAQAAAAAAAAQAAgBAAAAQgBAAAAgBg");
	this.shape_12.setTransform(20.3,58.3);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFE655").s().p("AgVDSIAQjSQAJh6AMhWQAAgBAAgBQAAAAABgBQAAAAABAAQABgBAAAAQABAAABAAQAAAAABAAQAAABAAAAQAAABAAABQgEBYgMB5IgWDSQAAAAAAABQAAAAAAABQgBAAAAAAQgBABAAAAIgBAAQgBAAAAAAQAAAAgBgBQAAAAAAgBQAAAAAAgBg");
	this.shape_13.setTransform(26.4,113.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFE655").s().p("AA3BsQg+higxhwQgBgDACgCQABAAABgBQAAAAABAAQAAABABAAQAAAAABABQA8BiAvBzIgBACIgBgBg");
	this.shape_14.setTransform(-14.3,111.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FFE655").s().p("ABBBkQgug9hWiKIABAAQBhCIAlA9QAAAAAAAAQAAABAAAAQAAAAAAAAQgBAAAAABIgBAAIgBAAg");
	this.shape_15.setTransform(-52.6,71.2);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FFE655").s().p("ABbCOQghgtg8heIgvhFQgcgqgQgeQAAAAgBgBQAAAAAAgBQAAAAABAAQAAgBAAAAQABgBAAAAQABAAAAAAQABAAAAAAQAAAAABAAQAVAcAbAqIAsBGQBDBkAYAqQABAAAAAAQAAABAAAAQgBAAAAABQAAAAgBAAIgBABIgBgBg");
	this.shape_16.setTransform(-97.4,11.7);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#FFFFFF").s().p("ACgIxQgDAEgGgDQgbgLgwgWIhMgjIhMgeQgtgTgegQQgBAAAAAAQgBAAAAgBQAAAAAAAAQABgBAAAAQAAgBABAAQAAgBAAAAQAAAAABAAQAAAAABAAQASACAZAGQAVgGAgACIA0AEQBDAGALACQhpg2hlhEQg3glgtgjIgygnQgcgYgQgVQgBAAAAgBQAAAAAAgBQAAAAAAgBQAAgBABAAQADgCACABIATAMIABgBQANAAAOAFIAZAMIBKAlIBrA4ICXBNIhsicQhZiDg7hcQiwkZhci7QgbgogHgcQgBAAAAgBQAAgBAAAAQABgBAAAAQAAgBABAAQABgBAAAAQABgBAAAAQABAAAAAAQABABABAAQAUAPAWAhIAiA3IBeCFQBWB5BaB2QBUBuBmCAIBaBuIAmAsIAmAtIgrh5IgbhHQgPgrgEgeIABgCQAAAAAAAAQAAAAAAAAQABAAAAAAQAAAAAAABQAKAOALAaQANASAwBRIAyBUQAFAIAJARIACAEIAOAaIAAABIAHAMQAHhXADgrIAFhjQADg7AGgoQAAgcACgVQAAgBAAAAQAAgBAAAAQAAAAABAAQAAgBABAAQAAAAAAAAQABAAAAAAQAAABABAAQAAAAAAABQAJAqADBBIAEBuIAGBcQAEA5ABAkIATgtIAYg9QAPglANgXIAKgeQAAAAAAgBQAAAAABAAQAAgBABAAQAAAAABAAQAAAAAAAAQABAAAAABQAAAAAAAAQAAABAAAAIgBAMIAAABQgDAagHAkIgOA9IgCALIgSBVQAEgEAEABIACgDQAfgnAVgSIABAAIAAABIgMAeQgBAPgHATIgPAgQgZA1gKARQgEAHgGgBIAAABQABACgBADQAAADgDABQgeAKgvABQgIABgRgBIghAAIgwACQgcAAgUgFg");
	this.shape_17.setTransform(-18.3,139.7);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FFFFFF").s().p("AAAAFIAAgCIAAgBIAAAAIgBgEIABgBIAAgBIABAAIAAABIAAACIgBAEIAAACIAAAAIAAAAg");
	this.shape_18.setTransform(-5,147.7);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#FFE655").s().p("ACzNGQgeAAgUgKIAAAAQgFgBAAgFIgEgCIhuhIIgDgCIg+giQglgWgUgXQgegNghgQIgbgLQAAAAgBAAQAAAAAAgBQAAAAAAAAQAAgBAAAAIACgBIAYgBQAEgDADABIAEACQAaAAAlAGIA/ALIAuAGIg6gwIiAhKQgBAAAAAAQAAgBAAAAQAAAAAAgBQAAAAABAAQAAgBAAAAQABgBAAAAQAAAAABAAQAAAAAAABIBkA4Ih3hhIhohUQg9gxgpglQgagQgSgRQAAgBAAAAQAAAAAAgBQAAAAAAAAQAAgBAAAAQABAAAAgBQAAAAAAAAQABAAAAAAQAAAAABAAIACABQAAgBAAAAQAAgBAAAAQAAgBAAAAQAAgBABAAQAAAAABgBQAAAAAAAAQABAAAAAAQAAAAABABIAJAGQAfAIAtAXIBIAnICuBWICfBRIAgAPQhZiFh2jDIjJlMQhHhogeg+IjymNQgSgbgYgoIACgBIACACIgQgfQgFAGgGAAQgHAAgDgHQgDgHAEgGQAAAAABAAQAAAAAAAAQAAAAAAAAQAAAAAAABQgCAEADAFQACAFAFAAQAGAAACgFIgQglQAAgBAAAAQAAgBAAAAQAAAAAAgBQAAAAABAAQAAgBABAAQAAAAAAAAQAAAAABAAQAAAAAAABQAaAcAbAqIAvBLIBFBQQBDBPA5BFID0EqQEeFhCZDLIADACIgOghQg4iBgPgpQgCgFAFgEQAFgDADAFIAJASQAOAQALAPQARATAUAkIBvCaQAQATAXAfIANARQgEgsgBg9IgChqIgOqgIgHhdQAAgBAAAAQAAgBABAAQAAAAAAgBQABAAAAAAQABAAAAAAQABAAAAAAQAAAAAAABQABAAAAABIAAADQgChJAGgpQAAgDAEgCQAFgBAAAEQAKA6ACBXIAACRIAAATQATCZAQCWIAyFEIASCDIAZhQIAbhRQAQgtAUggQABAAAAgBQAAAAABAAQAAAAABgBQAAAAABABQAAAAABAAQAAAAABAAQAAABAAAAQAAABAAAAQgBAVgFAdIAAADIAAADIACAAQABAAAAAAQAAAAAAAAQAAABAAAAQAAAAAAABIgDAIQgCAhgJAvIgPBPIgUByIAzg6QBMhXApgnQAEgDADAEIALgPQAEgDADACQAEADgDAEQgPAegeAyIgvBQQgNAZgeA/QgbA4gRAeIgCADIgJAbIgHAXQgFANgFAIIAAABQAFAEgCAIQgBAIgGACQgQAHgYAAIgpAAIjcAEIgsABIgIAAgAlGFgIgDgEIgHgEIAKAIIAAAAg");
	this.shape_19.setTransform(-27.3,116.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FFFFFF").s().p("AkfMzQhzgIhYgjQhDgYgigPQg9gagegeQgBgBAAAAQAAAAAAgBQAAAAAAAAQAAgBABAAQAAgBAAAAQABAAAAgBQABAAAAAAQAAAAABAAQASAEAcAMQAjACA5AJIBcANQBQAJBHAEQBCAFBugBIgMgLIhPhGIhRhCQgwgogdgfIAAgBQAAAAAAgBQAAAAAAAAQABAAAAAAQAAAAAAAAQAkAUAqAgQCCBAAcAPIBYAvIgTgcIgSgcQgUgagJgOQgQgYgFgTQgwhNgihHQgwhmgZgzQgwhOgRgqQgCgFAFgFIgGgVIAAgBIABAAIANATIACACQAUAbAdAxQAiA7AMATQAqBABGBXQBZBwAhAmIALAOIAAgDIgZhxQgYhogfhzQgXhXgkh8Ignh7QgWhKgJg0IAAgCIgFgQQgKgigRhCQgRhFgJggIg4jLIgcheQgQg4gHgpIABgCQABAAAAAAQAAAAAAAAQABAAAAABQAAAAAAAAQASAlAVA8IAiBiQAZBCAuCFQBODWA5CyIB6GBIA/DJIACAHIAAgZQgNjGABiEQgMhHAAgkQAAAAAAgBQABAAAAAAQAAgBABAAQAAAAABgBQAAAAABAAQAAAAABAAQAAAAAAABQABAAAAAAQAMAnAKBGQALBSAHAbQAWBfASBdIABgOIAQi5IAOi5IAOi3IARjDQAJh0AFhPQAEg+AFh5QADgzAEgpQABgOAGgdQAGgcABgQQABAAAAAAQABgBAAAAQAAAAABAAQAAAAAAABQABAPAEAdQAFAdAAAPQACAogBBQIgFDhIgFD0QAGAdgBApIgDBGIgGB+QgEBZgCC0QgEB3gICVIgCAkQAIgNAOgbIA1hvQAdg/ARgqQAKgcAGgNQALgXAPgMQAAgBABAAQABAAAAAAQABAAAAABQABAAAAABQAEAYgMAjQgHATgQAlQgLAegNAvIgXBNIgIAbIBshhQAegaBQhAIAcgTQATgLAJgIQAYgTAMgHQABAAAAgBQABAAAAAAQABABAAAAQAAAAABAAQAAABAAAAQAAAAAAABQAAAAAAAAQAAABAAAAQgIALgPARQgSATgGAJQgZAigHAIQgzA6gaAaQgOAXgWAcIgpAxIguA3QAoAAAogBQAmgBA+gJIBFgGQAqgDAagFQAIgCAAAJQAAAIgHADIg6AbQghAQgbAGQgwALg8AHQhlALhBgJIg7gBIgdgBQgnAEgYgCQgSAGgcgCIgugDQgngBhMADIhrAEIgjABQgnAAghgDg");
	this.shape_20.setTransform(-11.2,115);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FFE655").s().p("AFbSqIk0AEImXAFIgggKQiOgthOghIhUgcQg2gTgagWQglgPgZgPQAAAAAAAAQAAgBAAAAQAAAAAAAAQABAAAAAAIArAJIABgBIAEAAIg/gOQgBAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAAAQAAgBABAAQAAAAAAAAQAAAAABAAQBUAEB4AQIDLAdIEKAkQgbgdgKgNQiridhhhrIgigWQgBAAAAAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQABAAAAgBQABAAAAAAQABgBAAAAQABABAAAAIAMAHIgRgUQAAAAAAgBQAAAAAAAAQAAAAAAAAQAAAAAAgBIACAAIAvApICnBkIBRAvQAyAdAfAVQgihBgthjIhLilIhUizIgphUQgYgzgLglIgTgjQgCgEAEgDQAEgEADAEQAdAfAhAyIA4BWQAmA5BLB1IBzCqIAlA0IAkA1IgBgGIgVhEQgnh3gSg8QgsiRgui2Qgchug1jbIhFklQgliogTiAIgSg/QgBgDADgCQABAAAAAAQABAAAAAAQABAAAAAAQABABAAAAIAFAMIgCgOIABgBIABAAIAJAjQAfBJAlBjIA/CuIC2HzICDFWIAgBUIgBg3IgEhlQgDg8ADgpQAAgBAAAAQABgBAAAAQAAAAAAgBQABAAAAgBIAEAAIgBgFIACgBQARApARA6IAcBkQAEASAOAuIAOg2QABgZALiJIARjCQAZk9AVl8QAIiJAGjYIAEioQADhjAHhGQAAgDAEgBQAFgBAAAFIABgNQAAAAAAgBQAAAAABgBQAAAAABAAQAAAAABgBQAAAAABAAQAAAAAAAAQABAAAAABQAAAAAAABQAHAxADBEIAEB2IADBsIACARQAEAqACBVIAGB5QADBHAAAyQAAB6gCB6IAUO2QALAlAFA+IBOiXIAEgMQACgFADgBIAKgSQAAAAAAgBQAAAAAAAAQABAAAAAAQAAAAAAAAQABAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAAAIgIASQAFABAAAFIAAABQgEAngMA5IgWBfIgVBpIgHAjICviXIAugoQAdghATgJIAPgMIAyguQAfgbAYgOQABAAAAAAQABAAAAAAQABAAAAAAQAAAAABAAQAAABAAAAQABAAAAABQAAAAAAAAQAAABgBAAIAYgZQABAAAAAAQAAgBAAAAQABAAAAABQAAAAABAAQAAAAAAAAQAAABAAAAQAAAAAAAAQAAABAAAAIgnA1IgCAFIgNAOQg4BKhnB9IgbAiQgyA/g9BHICTgDIAUgCIBEgFQAngCAcAEQA/gCAqACIAFgCQAFgCACAEIAJABQAFAAgBAFQAAAFgEAAIgPACIhOAgQgMAJgXAIIgjALQgWAJgSAFQhLAbg/AUIgIADQhsgMg2ABgAA6GZIAAgJIABgBIgDgPg");
	this.shape_21.setTransform(-10.8,78.6);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FFE655").s().p("AhkEyQAAAAgBgBQAAAAAAAAQgBAAAAgBQAAAAABgBQBdjuBnlvQABgDAEAAQAAAAABAAQABABAAAAQAAABABAAQAAABAAABQgzEliVE4QAAABAAAAQgBAAAAAAQAAABgBAAQAAAAAAAAIgBAAg");
	this.shape_22.setTransform(90.6,24);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#FFE655").s().p("AClCgQhHg8hihfIilifQgDgDADgCQADgDADACICoCcQBkBcBBBDQABABAAABQAAAAAAABQAAAAAAABQAAABgBAAIgDACIgCgCg");
	this.shape_23.setTransform(-93.1,115.2);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#FFE655").s().p("AhQg4IABgBQBrBLA1AnQAAABAAAAQAAAAAAAAQAAAAAAAAQgBAAAAAAIighyg");
	this.shape_24.setTransform(-141.2,73.2);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#FFE655").s().p("AAAAEIg9gEQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAgBAAAAQABAAAAAAIA8gBQAkAAAZAEQAAAAABAAQAAAAAAAAQAAAAAAABQAAAAAAABQAAAAAAABQgBAAAAAAQAAABgBAAQAAAAgBAAIgbABIgggBg");
	this.shape_25.setTransform(-77,199.5);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FFE655").s().p("ACHAmQg3gJhQgUQhagYgtgLQgFgBACgFQABgGAFABQAtAMBaAUQBSASA1ASQAAABABAAQAAAAABABQAAAAAAABQAAABAAAAQgBABAAAAQgBABAAAAQAAABgBAAQgBAAAAAAIgBAAg");
	this.shape_26.setTransform(-136.5,186);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#FFE655").s().p("ACQBHQhBgXhTgqIiQhJQAAAAgBgBQAAAAAAAAQAAAAAAgBQABAAAAAAQAAgBABAAQAAAAAAAAQAAAAABAAQAAAAAAAAICVBAQBVAlA8AiQABABAAAAQABABAAAAQAAABAAAAQgBABAAABQAAAAgBAAQAAABgBAAQAAAAAAAAQgBAAAAAAIgCAAg");
	this.shape_27.setTransform(-103.8,149.5);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#FFE655").s().p("AlqBOQAAgBAAgBQAAAAAAAAQABgBAAAAQAAgBABAAQF9hvFUgpQABAAAAAAQAAAAABAAQAAAAAAABQAAAAAAABQAAAAAAABQAAAAAAAAQgBABAAAAQAAAAgBAAQmOA/lCBaIgBAAQgBAAAAAAQAAAAgBAAQAAAAAAgBQAAAAAAAAg");
	this.shape_28.setTransform(115.1,167.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#FFE655").s().p("Ag1BUQgEgCACgEQA3hhAyg/QACgDADACQADACgCADQgoBNg/BUQgBAAAAABQgBAAAAABQAAAAgBAAQAAAAgBAAIgCgBg");
	this.shape_29.setTransform(54.4,145.3);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#FFE655").s().p("AhYCGQgEgCACgEQAgg8AyhIIBaiAQADgEAEADQAEACgDAEIhSCFQgwBLgqA0QAAAAgBABQAAAAgBABQAAAAgBAAQAAAAgBAAIgCgBg");
	this.shape_30.setTransform(85.4,95.9);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#FFE655").s().p("AgVDnQgEhjAMiEIAZjlQAAgFAGgBQAFAAAAAFIgJDnQgHCFgSBhQgBAFgFAAIgBAAQgDAAAAgFg");
	this.shape_31.setTransform(46.3,82.4);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#FFE655").s().p("AgNGZQgBitAIjsIAQmYQAAAAAAgBQAAAAAAgBQAAAAABAAQAAAAABAAQABAAAAAAQABAAAAAAQAAABAAAAQABABAAAAIgIGYQgFDtgKCsQAAAAAAABQAAAAgBABQAAAAAAAAQgBAAAAAAIgBAAQgBAAAAAAQgBAAAAAAQAAgBAAAAQAAgBAAAAg");
	this.shape_32.setTransform(50.2,-102.3);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#FFE655").s().p("AB+GVQghhUglh0Ig+jLIiAmUQAAgBAAAAQAAgBAAAAQABAAAAgBQAAAAABAAQAAgBABAAQAAAAABAAQAAAAAAAAQABABAAAAICGGRIBFDJQAmB0AXBXQABAEgEACIgDABQAAAAgBAAQAAAAgBgBQAAAAAAAAQgBgBAAAAg");
	this.shape_33.setTransform(-24.2,13.5);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#FFE655").s().p("AAtCcQgahEgZhXIgsicQAAgBAAAAQAAgBABAAQAAAAAAABQAAAAABAAQBGDEAdBxQAAABAAAAQAAABAAAAQgBABAAAAQgBABAAAAIgCABQAAAAgBAAQAAgBAAAAQAAAAgBAAQAAgBAAAAg");
	this.shape_34.setTransform(-57.5,-87.2);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#FFE655").s().p("AEGImQg+hxhPiiIiFkWQhai1grhbQhMidgvh2IABgBQBABvBOCfICDETICIESQBNCfAyB3QABADgDACIgCABQgBAAAAAAQgBAAAAAAQAAAAAAgBQgBAAAAgBg");
	this.shape_35.setTransform(-95.5,-19.7);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#FFE655").s().p("AAiAuQgagIgXgaQgOgOgGgNQgCgFgBgIIgBgPIABgCQABAAAAAAQABAAAAAAQAAAAAAAAQABAAAAAAIAJAKIAIAJIAQAYQAHAJAMAMIAWAUQAAAAABABQAAABAAAAQAAABAAAAQgBABAAABQAAAAgBABQAAAAgBABQAAAAAAAAQgBAAAAAAIgCAAg");
	this.shape_36.setTransform(-230.2,9.7);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#FFE655").s().p("AgWBBQgFgBAAgEQgCgNAGgSIAMgdQAQgjARgbQAAAAABgBQAAAAABAAQAAgBABAAQAAAAABABQABAAAAAAQABAAAAABQABAAAAABQAAAAAAABQgGAhgMAkIgKAdQgGAQgKAJQgDACgDAAIgBAAg");
	this.shape_37.setTransform(131.2,12.8);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#FFE655").s().p("AhRCTQAAgBAAAAQgBAAAAgBQAAAAAAgBQAAAAAAAAQAwhlAagvQAshUAsg5IACAAQABAAAAAAQAAAAAAAAQAAAAAAABQAAAAgBAAQgZBDgvBRQgaAvg9BfIgCABIgCAAg");
	this.shape_38.setTransform(139.1,-70);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#FFE655").s().p("Ag8BVQgDgCACgEQATgkAkgvIA9hQQACgDAEACQADACgCADIg3BUQghAygcAeQAAABgBAAQAAABAAAAQgBAAAAAAQgBABAAAAIgDgCg");
	this.shape_39.setTransform(181.8,9.4);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#FFE655").s().p("AgJAIIASgRIABAAIAAABIgRARIgCABIAAgCg");
	this.shape_40.setTransform(176.1,37.5);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#FFE655").s().p("ApPE6QgEgUAMgLQAxgwBXgsQAygZBjguQAkgSB6g3QBhgsA5geIEkieQBfgzDAheIAAABQi4BvhfA1IkLCSQg7AghbA6IiUBdQhkBBg1AfQhcA2hJARIgGAAQgOAAgCgRg");
	this.shape_41.setTransform(133,148.9);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#FFE655").s().p("ABhAvQgpgQg5gcIhjgvQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAAAABgBQAAAAAAAAQAAAAAAgBQAAAAABAAQAAABAAAAIBkAqQA8AYAoAVQAAABAAAAQABAAAAABQAAAAAAABQgBABAAAAQAAABgBAAQAAABAAAAQgBAAAAAAQAAABgBAAIgBgBg");
	this.shape_42.setTransform(-177.8,133.1);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#FFE655").s().p("AJfClIhQgXIi9g3QhHgThkgYIipgpQjsg5nVh6IAAgBIABgBQHjBsDkA2ICzArQBoAYBMAQICxAjIBRAPQAvAKAeAPQANAGgFAPQgEAPgOAAIgDABQggAAgvgOg");
	this.shape_43.setTransform(-174.3,166.5);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#FFE655").s().p("AgNATQgWgTgFgbQgBgEAFgDQAEgDACAFQAUAnAyAXQAAAAABAAQAAABAAAAQAAAAAAABQAAAAAAABQAAAAgBABQAAAAAAAAQgBABAAAAQgBAAAAAAIgIABQgYAAgTgRg");
	this.shape_44.setTransform(-197.1,-41.7);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#FFE655").s().p("ABnCbQg7g+g5hWQgqg9g6hjQAAAAAAgBQAAAAAAAAQAAgBABAAQAAAAAAgBQABAAAAAAQABAAAAAAQAAAAABAAQAAAAAAAAQBLBXAsA7QA/BSAoBLQACAEgEAEQgBAAAAABQgBAAAAABQgBAAgBAAQAAAAgBAAQAAAAgBAAQAAAAAAAAQgBgBAAAAQgBAAAAgBg");
	this.shape_45.setTransform(-168.2,-75.6);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#FFFFFF").s().p("Ah5IVQgogFghgXQAAAAgBgBQAAAAAAgBQgBAAAAgBQAAAAABgBQAAgBAAAAQAAgBAAAAQABgBAAAAQABgBAAAAIAegSIhugwQhCgdgugNQg1gQhMgSIhDgPQgQgEgYgJIgngOQgBgBAAAAQAAAAAAAAQAAAAAAAAQAAgBAAAAIACgBIA1gBQAdAAAXADIBLAMQAZAEA1AMQAyAKAbAFIBTANQAwAHAiAKQAcAHALAEIAKgMQhDg9gjguQgDgFAFgFQAFgFAFACQAeAQAkAZIADgIIhJhdIjikgIgwg/QgaglgHghQgBgDADgCQADgCADABQAeANAhAlQASAWAgArIB6CYQAkAtBIBfQBABUA0AxQAFgIAHgEQAHgEAIADIADACQAKgDAHAJIgig7QglhFgQglQgbg+gIgzQgBgHAGgEQAHgEAEAGQAVAdAVAqIAkBMIgIgXQgnhlgTg4QgNgogRhBIgEgHQgig2gGgMQgVgmgIghQgCgIAHgGQAHgGAHAFQAWAPAUAaQAMAOAWAjIBWCEIArBFIAqBGIAjA8QATAiAKAdIgDh5QgChIADgwQAGhbgDifQgCi1AChGQABgEAEgBQAFgBAAAFQAKBHANCpQANCaANBWQAHAwAFBDIAIB1IAFAoQAMgeAVguIAWgyQAdhRAbhbQANg6AJgeQAPg2AXgaQAAAAABgBQAAAAABAAQAAAAABAAQAAgBABABQABAAAAAAQABAAAAABQAAAAABABQAAAAAAABQAFAZgLApQgHAWgOAqQgcBqgIAkQgNA+gLBaIgTCZIArg1QA4hKAngxQA9hMAzg7QAtgyA6grQAHgFAGAFQAFAEgDAIQgYBHgyBWIhdCUQgRAbhDBkIguBFIACAJIAGAFQAUgRAigSIA5gdIBEgkQAsgUAcAHQAEABABAFQAAAEgBADQgPAfgsAcIhLAqIg/AlQgmAUgdACQgNAIgWADQgLACgXABIioADIipACQg6AAgUgDg");
	this.shape_46.setTransform(-16.3,145.3);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#FFFFFF").s().p("AElJdQhLhxhXitQhgjGgwhhIhLiUQgthYgbg+Qgzh4gbg0IgohIQgYgsgIggQgBgFAGgGQAGgFAFAFQAUAXAUArIAgBIQASAlAeA0IAyBXQAhA7AqBTIBGCPQAyBiBoDGQBYCvAvCCQADAHgIAFQgDACgCAAQgEAAgDgEg");
	this.shape_47.setTransform(-72.5,40.9);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#FFE655").s().p("AggZVIgYADQgPACgOgIQgMgIgIgOQhwgjiRhEIj4h7QgOgHAFgRQAGgRAPACQC5ARB5ARIAEABQBdAEBYAQIB1AXIhLiAIg2hLQhUh6gqhGQhChwgjhfQhGh0gvhYQhBhNgdg2QgEgHAGgIQAHgJAHAGIAFAEIgBgCQAAAAAAAAQAAgBAAAAQAAAAAAAAQABAAAAAAIABAAIAJAMQArAnA2BCIBaBvIC2DcICRCuQBYBqA3BEQgSglgbg/IgshlIjpoMIg2h1QgghEgTg0Io4z6IhkjhQg7iEgkhfQgshYgjhOQgFgKALgHQALgHAHAKQBMCABhC8ICkE/QDAFvF6LfIEhIwQB5DTB+DQIABgLIAMixQAKioADi0QACiHgHjaQgIkUgBhNQAAgJAKgDQAJgCABAKQANBVAGBuQADA2AFCOIABAPIAoFIIAmFBIAUCcQAyiFBBiXIBmjoQAhhPARgnQAehDAdguQAGgKAKAHQAJAGgEAIQgMAtgUAzIgMA4IgeB6IgpCpIhhHWIBph7IBLhZQAsg0AhgjIBWhaQA1g3AfgkQABAAAAAAQAAAAAAgBQABAAAAAAQAAAAABABQAAAAAAAAQABAAAAABQAAAAAAAAQAAABgBAAQghAphCBbQBhh8BMhbQAFgFAGAEQAFADgDAHQhBBuhZCIIiaEUQgYAshDBwIgiA4IBYgwQBbgxC3hfQALgGAGAMQAEAMgHAIQhoBshtBUQg3AshBArIgpAdQgZARgTAKIgKAHQgOAJgNgBQgDAAgEgCQgMgFgIgLQgfAKgpAEQgXADg0ACIiyAIIi+AGIg6ACIgHAAQgeAAgWgDgAlDMJIABgDIgRgUg");
	this.shape_48.setTransform(-40.5,37.6);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#FFE655").s().p("AprHSQgDgEAEgEQA7gyBghIICeh3QCkiACKhlIE0jkQC8iKB7hYQADgCACADQABADgCACQh4Bfi+CRIk2DtQhvBWjECNIiWByQhbBEg/ApIgEABQgBAAAAAAQgBAAAAgBQgBAAAAAAQAAgBgBAAg");
	this.shape_49.setTransform(184,75.1);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#FFE655").s().p("AliGSQAAAAgBgBQAAAAAAAAQgBgBAAAAQAAgBAAAAIADguQAAgBAAAAQAAAAAAAAQAAgBABAAQAAAAABAAQAAAAAAAAQABAAAAAAQAAAAAAABQAAAAAAAAIABAbQADAIAPgSICNijIC7jYICzjMIBShgQAxg4AngiQAEgDAFAEQAEAEgDAEQggAtg1A8IhbBkIioC7IizDJQhoBzhPBUIgCABIgCAAg");
	this.shape_50.setTransform(97.2,107);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#FFE655").s().p("AEtF0QhHhEhXhqIiRi3QiJipijjWQAAAAgBgBQAAAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQAAgBABAAQAAAAAAABQAAAAABAAQCdC0CRCyICdC6QBZBuA2BXQABAAAAABQAAAAAAAAQAAABgBAAQAAAAAAAAIgBABIgBgBg");
	this.shape_51.setTransform(-134.9,31);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#FFE655").s().p("AADAsQgKghgBgJQgGgYAGgRQABgFAEgBQAEgBACAEQAFAHACAKIACATQABAPgDAhQAAABAAAAQgBABAAAAQAAABgBAAQgBAAAAABIgCAAQgBAAAAAAQAAAAAAAAQgBgBAAAAQAAAAAAgBg");
	this.shape_52.setTransform(-12.4,-83.3);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#FFE655").s().p("AAREOQgKg3gGhJIgIiAIgLiJQgGhTABg4QAAgGAHgCQAHgDABAHQAIA0AEBNIAICBIAJCKQAEBPgCA8QAAABAAAAQgBABAAAAQAAAAgBAAQAAABgBAAQAAAAgBAAQAAAAgBgBQAAAAAAAAQAAgBgBAAg");
	this.shape_53.setTransform(-8.1,-33.7);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#FFE655").s().p("AAzCtQgSgfgQgxIgZhTQgLgigriUQAAAAAAgBQAAAAAAAAQAAgBABAAQAAAAAAgBQABAAAAAAQABAAAAAAQAAAAAAAAQABABAAAAQA4CMAJAcIAgBVQASAzAGAlQABAFgGADIgDABQgDAAgBgDg");
	this.shape_54.setTransform(-103.2,-195.3);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#FFE655").s().p("AC1JFQhFjDh4l7IhckfIgwiRQgchVgMg+QgBgFAGgDQAGgEACAFQAZA3AaBTIArCNIBaEhQB9GLA2DBQABADgEACIgCABQAAAAgBAAQAAAAAAAAQAAgBgBAAQAAAAAAgBg");
	this.shape_55.setTransform(-62.2,-69.4);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#FFE655").s().p("AMTIWQhggfh4hRIjJiOQiMhhj1ijQkXi6h2hRQjdiXioh/QgEgCADgEQACgEAEACQC1BpDhCPQBtBFEiC+QDICDC9B4QBEArCQBYQB7BRBFBNQAFAHgGAIQgFAGgFAAIgEgBg");
	this.shape_56.setTransform(-147.6,107.6);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#FFE655").s().p("Ak+JQQgFgDADgFQAhg5AwhjQA5h2AVgoICZkcQBvjNDPlwQADgGAGADQAGACgEAGQjeGwheCtQhBB+hcCnQgTAjgeAyIgzBUICWjcIBiiTQA6hTAzg1QAFgFAFADQAGADgEAHQgjBCg9BVIhrCQQh9CohiCIQgDADgDAAIgDAAg");
	this.shape_57.setTransform(84.3,39.2);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#FFE655").s().p("AjAVLQAQhwAXi7IAmkqQBerDAvlgQBUpiBJnAQABgFAEAAQAFgBAAAFQghEqgnEsQgtFYhjLOQgaC7g3F3IAWh5QAjjVAThqQAgi4AliDQABgDADAAQAEAAAAAEQgMCGghCzQgSBogqDOIg6E5Ig7E4QgBAJgKAAQgJAAABgKg");
	this.shape_58.setTransform(40.1,-61.1);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#FFFFFF").s().p("ADdBGQgXgCghgOQgkgQgSgHQg0gTg5gOIh1gdQhMgSgrgLQAAgBgBAAQAAAAAAAAQAAgBAAAAQAAAAAAgBIACgCQBtgMB3AcQA9AOA8AUIA6ASQAjANATAPQAJAIgBAPQAAAQgOAAIgBAAg");
	this.shape_59.setTransform(-99.8,194.1);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#FFFFFF").s().p("Ak2FeQgFgHAFgHQA7hWBVhkQAyg7Bqh0QBchnBFhGQAZgaAxg2QAtgvAkgaQADgCACACQADACgCADQgXApgrA1IhLBYQg+BNhVBgQhpB7gxA2QhaBhhOBDQgDADgDAAQgDAAgDgDg");
	this.shape_60.setTransform(72.2,141.8);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#FFFFFF").s().p("AhIC9QgGgBAAgGQAJhjAphlQAXg7AQgfQAcg0AggbQAEgCACACQADACgBAEQgMAfggA5QghA5gLAfQgZA8gTBNQAAAAABAAQAAAAAAABQAAAAAAAAQAAAAAAAAQgCANgKAlQgCAGgGAAIAAAAg");
	this.shape_61.setTransform(110.9,23.4);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#FFFFFF").s().p("AiSIOQgHgDABgHQAKg2AThIIAjh9IBEj8IBIkHQAUhHAQg0QARg2AphgQABgEADABQAEABgBAEQgSB1gpCWQgOA0g+DRIhMEHIgkB+QgWBKgUAzQgCAGgFAAIgDgBg");
	this.shape_62.setTransform(64.6,30.6);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#FFFFFF").s().p("Ah0HGQgHgTAHggQALgjAEgPQAUhQAIgoQAKgvARhEIAdhzIA7jrQAMgrAVhCIAjhtQABgEAFAAQAFgBgBAGIgYB8QgOBLgMAxIg5DdQgpCmgTBBQgIAbgYBdIgKAtQgIAbgOAMIgDABQAAAAgBgBQAAAAAAAAQAAAAgBAAQAAgBAAAAg");
	this.shape_63.setTransform(19.2,57.9);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#FFFFFF").s().p("AAGFUQgMhDgEhlQgEhygEg4IgKigQgCgjgBg7IgBheQAAgBAAAAQAAgBAAAAQAAAAABgBQAAAAABAAQAAAAABAAQAAAAAAAAQAAAAABAAQAAABAAAAIALBNQAHAwADAdIANCtIAPCmIAJBeQAFA3gCAnQgBAMgLAEIgGABQgHAAgCgKg");
	this.shape_64.setTransform(-32.5,56.5);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#FFFFFF").s().p("AEmEAQgVgEgXgNQgLgGgdgUQgsgegqggQhPg6hNhDQhDg4hMhKQgygsgZgZQgsgrgQglIABgCIABAAQAhAOApAlIBDA/QA+A1BhBMQBVBCBSA6QAZATA3AjQAuAhAXAfQAGAIgFAJQgFAJgIAAIgCAAg");
	this.shape_65.setTransform(-156,117.4);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#FFE655").s().p("AhlAZIBlgcQA6gQAqgGQAAAAABAAQAAAAABAAQAAAAAAAAQAAABAAAAQAAABAAAAQgBABAAAAQAAAAAAAAQgBABAAAAQgoAOg8AMIhlAVIAAAAIAAgBg");
	this.shape_66.setTransform(229.2,170);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#FFE655").s().p("An+B7QAAAAAAgBQAAAAAAgBQAAAAABAAQAAAAABgBQEJhFD5g8QBTgUCmgrQCUgkBogQQAEgBAAAEQAAAEgDABQhoAiiZAkIkCA5QkDA+jyA0IgBAAQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAAAAAgBg");
	this.shape_67.setTransform(138.9,190.7);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#FFE655").s().p("AkwD0QAAgBAAAAQAAAAAAgBQAAAAAAAAQAAgBABAAQA2gyBehKQB5hfAegYICciAQAYgSAvgoQArgjAggUQAEgCACADQADADgDADQgbAbgsAjIhLA6IiXB1QgfAZh5BjQheBMg+ArIgCABIgBgBg");
	this.shape_68.setTransform(240.3,59.5);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#FFE655").s().p("Ag1AiQAAAAAAAAQAAgBAAAAQAAAAAAgBQABAAAAAAQBbg6AOgIQAAAAAAAAQAAAAAAAAQABAAAAAAQAAAAAAAAIAAACQgTANhWA2IgBAAIgBgBg");
	this.shape_69.setTransform(174.9,102.8);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#FFE655").s().p("AAMFEQgCgfACgzIADhTQgBhdgEg6QgFg0gLhqIgNhVQgIg1gCghQAAgEAEgBQADgBACAEQALAgAIAvIALBSQAMBSACBcIAGCcQABBbgNBAQAAABgBAAQAAABAAAAQgBABAAAAQgBAAAAAAIgBABQgBAAAAAAQAAgBAAAAQgBAAAAgBQAAAAAAgBg");
	this.shape_70.setTransform(-24.7,-97);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#FFE655").s().p("AgBAOQgBgOACgOIAAgBIABABQACARgCALQAAAAAAAAQAAABAAAAQAAAAgBAAQAAABAAAAIgBgCg");
	this.shape_71.setTransform(-23,-51.6);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#FFE655").s().p("AAMAzQgOgggMhEQAAgBAAAAQABgBAAAAQAAAAAAAAQABAAAAABQAYA/ADAlIgBACIgBAAIgBgBg");
	this.shape_72.setTransform(-61.3,-18.8);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#FFE655").s().p("AAeCkIgmiiQgVhfgGhEQAAgBAAAAQABgBAAAAQAAgBABAAQAAgBABAAQABAAABAAQABAAAAAAQABAAAAABQAAAAABABQALAhAJAwIAOBRQALA5ASBqQAAABAAAAQAAABgBAAQAAABgBAAQAAAAgBABIgBAAQgBAAAAAAQAAAAgBAAQAAgBAAAAQAAAAAAgBg");
	this.shape_73.setTransform(-74.9,-77.5);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#FFE655").s().p("AANA4QgKglgRhJIABgBIABAAQAUBMAHAiIgBABIgBAAg");
	this.shape_74.setTransform(-86.7,-123.8);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#FFE655").s().p("AAPAKQgSgDgPgMQAAAAgBAAQAAgBAAAAQAAAAAAgBQABAAAAgBIADgBQAHABAKAEQANAFAEADQAAABABAAQAAAAAAABQAAAAAAABQgBABAAAAQAAABgBAAQAAABAAAAQgBAAAAAAQgBAAAAAAIgBAAg");
	this.shape_75.setTransform(-198.6,116.8);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#FFE655").s().p("ABiA+QhEgliBhQQgBgBAAAAQAAgBAAAAQAAgBAAAAQAAgBABAAQAAgBAAgBQABAAAAAAQABAAAAAAQABAAAAAAQB6BGBKAxQABAAAAAAQAAAAAAABQAAAAAAABQAAAAgBABQAAAAAAAAQAAABAAAAQgBAAAAAAQAAAAAAAAIgBAAg");
	this.shape_76.setTransform(-231.3,100);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#FFE655").s().p("AARAMIgTgHQgEACgIgDQgHgDAFgHQAEgIAHAEQAFAEABAFIASAKQAAAAAAABQAAAAAAAAQAAAAAAABQAAAAAAAAIgBABIgBAAg");
	this.shape_77.setTransform(-247.7,-50.8);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#FFE655").s().p("AAAAAIABAAIgBABQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAg");
	this.shape_78.setTransform(-249.7,-52.6);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#FFE655").s().p("AASAVQgRgKgVgbQAAAAgBgBQAAAAAAgBQAAAAABgBQAAAAABAAQAAgBAAAAQABAAAAgBQABAAAAABQABAAAAAAQAbAVALARQAAAAAAABQAAAAAAAAQgBABAAAAQAAAAAAABIgCABIgBgBg");
	this.shape_79.setTransform(-237.8,-38.3);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#FFE655").s().p("AAJAOQgEgBgGgJIgJgOQgBAAAAgBQAAAAAAAAQABgBAAAAQAAAAAAgBQAAAAABAAQAAAAAAAAQABAAAAAAQAAAAABAAIALAMQAHAIABAEQAAABgBAAQAAABAAAAQAAABAAAAQgBAAAAAAIgBAAg");
	this.shape_80.setTransform(-120.3,96.7);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#FFE655").s().p("AAhAiQgjgdgfglIAAgBIABAAQAmAeAdAjQAAABAAAAQAAAAAAAAQAAAAgBABQAAAAAAAAIgBAAIAAAAg");
	this.shape_81.setTransform(-99.8,115.7);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#FFE655").s().p("AgjgjIAAAAIBHBHIAAAAg");
	this.shape_82.setTransform(-120.9,49.6);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#FFE655").s().p("ABxAhQgxgFhCgTIhygjQAAAAgBAAQAAAAgBgBQAAAAAAgBQAAAAAAgBQABgBAAgBQABAAAAgBQABAAAAAAQABAAAAAAIB0AXQBFAOAtATQAEACgCADQgBAEgDAAIgBAAg");
	this.shape_83.setTransform(-83.5,212.7);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#FFE655").s().p("AHtArIj3gfQiRgRhmgIQjTgPkdABQgBAAAAgBQAAAAgBAAQAAAAAAgBQAAAAAAgBQAAAAAAgBQABAAAAgBQAAAAABAAQAAAAAAAAQDmgSEAAQQCSAJBtANQCLAQByAcQAEABgCAFQgBAFgEAAIgBAAg");
	this.shape_84.setTransform(-179.8,200.6);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#FFE655").s().p("AAAAEIg9gNQAAAAgBAAQAAAAAAgBQAAAAAAAAQAAAAAAgBIACgBQAUAEApAEQAlAEAYAHQAAABAAAAQABAAAAAAQAAABAAAAQAAABAAABQAAAAAAABQgBAAAAAAQAAABgBAAQAAAAAAAAQgZgBgkgIg");
	this.shape_85.setTransform(-130,159.5);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#FFE655").s().p("AD+A+Qg3gHhKgQIh/geQifgjhggdQgBAAAAgBQgBAAAAAAQAAgBAAAAQAAgBAAAAQABgBAAgBQAAAAABgBQAAAAABAAQAAAAABAAQBdAOCdAjICDAdQBNARA2ASQAEABgCAFQgBAEgDAAIgBAAg");
	this.shape_86.setTransform(-198.3,144.1);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#FFE655").s().p("AhdApQAAgBAAgBQAAAAAAgBQAAAAABgBQAAAAABgBQBQgvBlgfQAEgBAAAEQABAFgEACQhgA1hUAWIgBAAQgBAAAAAAQgBAAAAgBQAAAAgBAAQAAgBAAAAg");
	this.shape_87.setTransform(130.9,141.8);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#FFE655").s().p("As0G+QgBgBAAgBQAAAAAAgBQABAAAAgBQAAAAABgBQBKgxBpg6IC2hjIJ6lXIE+itQC2hhCLhEQAFgDACAFQABAGgFACQhtBBj9CLIp5FYIk6CqIihBWQhdAxhHAfIgCAAQAAAAgBAAQAAAAAAAAQgBgBAAAAQAAgBAAAAg");
	this.shape_88.setTransform(130.7,160.2);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#FFE655").s().p("AAAAHIAAgNIAAgBIABABIAAANIgBABIAAgBg");
	this.shape_89.setTransform(-46.3,-93.4);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#FFE655").s().p("AKUHvQgggJg7gUQg/gWgcgJQhOgXhXgVIhRhGQgjgagjgdQhahMiTiKIhOhGQkYj4iKh+IiXh1IAAgCIABAAIBKAyIgcgaIACgBIAwAqQB3BSBaA/QAgARAmAbIBDAyIDgCmIFEDrICnB+IAEADIBOA1IADACIADACIDHCEIg/gRgAmSj9QgRgRgPgSIg5grIBZBOIAAAAg");
	this.shape_90.setTransform(-166.9,103);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#FFE655").s().p("ADVD6IiHiEQgxgxgYgbQgngsgZgmQgEgFAFgGIi/jPQBkBYA3A0QBUBOA+BEQAKALALACQBjBmBEBCQARARgMAVQgHAMgJAAQgHAAgJgJg");
	this.shape_91.setTransform(-50.7,162.8);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#FFE655").s().p("AIZCjIgBAAQgdgEgjgMIg9gZQgTgEgRgIQg/gWgvgSIkjhWIk5hZIg+gIIABgBIAnADIi9g2QgBAAAAAAQAAAAAAAAQgBgBAAAAQAAAAABgBQAAAAAAAAQAAgBABAAQAAAAAAAAQAAAAABAAIDoA7QAgACAQACQgegIgpgIIhIgNIAAgBIB2ASQiTgfgtgNQAAAAAAAAQAAAAAAAAQAAAAAAgBQABAAAAgBQA7AHBYAQICTAaIEVAsIBzASQBGAKAuAKQAjAkBBAzQBSBCAVASIAhAegAEtAQIAAgDIgWgEIAWAHgAjJhRIgQgGQgVgJgQgFQgBABAAAAQAAABgBAAQAAAAAAAAQgBAAAAAAIgTAAIBLASg");
	this.shape_92.setTransform(-114,193.9);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#FFE655").s().p("AA/BmQgggqgpg9IghgxQgTgdgGgWQAAgBAAAAQAAAAAAgBQAAAAAAAAQAAAAABABQASAOATAdIAeAwQAqA/AbAuQAAABAAAAQAAABAAABQAAAAAAABQgBAAAAABIgDABIgCgCg");
	this.shape_93.setTransform(-205.1,-91.3);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#FFE655").s().p("AAnA7QgKgKgLgQIgSgbIgpg8QAAgBAAAAQAAAAAAgBQAAAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQABAAAAAAQAAAAABABIAoA4IAVAcQAMAQAGANQAAABAAAAQAAAAAAAAQAAABAAAAQAAAAgBABIgBAAIgBAAg");
	this.shape_94.setTransform(-158.5,-35.4);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#FFE655").s().p("Ah0ChIBxiiQBAhcA0hEQABAAAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQABABAAAAQAAAAAAABQAAAAAAAAQAAABAAAAQgwBHhDBaIh0CgIgCABQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAAAAAgBg");
	this.shape_95.setTransform(240,-30.5);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#FFE655").s().p("AAAAEIAAgGQAAgBAAAAQAAAAABAAQAAAAAAAAQAAAAAAAAIAAAGIgBABIAAAAg");
	this.shape_96.setTransform(220.5,-3.1);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#FFE655").s().p("AgaAfQgBAAAAgBQAAAAAAAAQAAAAAAgBQAAAAAAgBIAYgeQANgSANgJQABgBAAAAQABAAAAAAQABAAAAAAQABAAAAABQABAAAAABQAAAAAAABQAAAAAAABQAAAAAAABQgIAOgQAPIgcAbIgBAAIgBAAg");
	this.shape_97.setTransform(187,28.7);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#FFE655").s().p("AgJAXIAFgYQADgOAFgHQAAgBABAAQAAAAABAAQAAgBABAAQAAAAABABQAAAAABAAQAAAAABAAQAAAAAAABQAAAAABABQAAAJgFALIgKAYQgBAAAAAAQAAABgBAAQAAAAgBAAQAAABAAAAQgBAAgBgBQAAAAAAAAQAAAAgBgBQAAAAABAAg");
	this.shape_98.setTransform(228.5,-156);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#FFE655").s().p("AgZAtQgBAAAAAAQAAAAAAgBQAAAAAAAAQAAgBAAAAIAXgrQANgaANgRQAAgBAAAAQABAAAAAAQAAgBABAAQAAAAABABQAAAAABAAQAAAAAAAAQAAABAAAAQAAABAAAAQgJAUgPAYIgaArIgBABIgBgBg");
	this.shape_99.setTransform(197.7,-116.5);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#FFE655").s().p("AgpA9IAmg9QAWglASgXQABAAAAgBQAAAAABAAQAAAAABAAQAAAAABAAQAAABAAAAQABAAAAABQAAAAAAABQAAAAgBABQgOAagZAhIgqA8IAAAAIgBgBg");
	this.shape_100.setTransform(202.2,-147.7);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#FFE655").s().p("AifErICckrIBMiWQAuhZAkg7QAAAAAAgBQABAAAAAAQABgBAAAAQABAAABABQAAAAABAAQAAAAAAABQABAAAAABQgBAAAAABQgcA+gwBZIhSCTIifEqIgCABQAAAAAAgBQAAAAgBAAQAAAAAAAAQAAgBABAAg");
	this.shape_101.setTransform(157.6,-94);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#FFE655").s().p("AgaCAQgBAAAAAAQAAAAgBgBQAAAAAAAAQAAgBAAgBIAbiEIAKg8QAHgkAIgXQAAAAABAAQAAAAAAgBQABAAAAAAQABAAAAAAQABAAAAAAQAAAAABAAQAAABAAAAQAAAAAAABQgBAYgIAkIgOA7IgcCEQgBAAAAABQAAAAgBABQAAAAAAAAQgBAAAAAAIgBAAg");
	this.shape_102.setTransform(106.7,-190);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#FFE655").s().p("AgWBbIAShbQAKgzAMglQAAgBAAAAQAAgBABAAQAAAAABAAQAAgBABAAQABAAAAAAQABAAAAABQAAAAABABQAAAAAAABQgGAmgOA0IgYBZIgCABIAAgBg");
	this.shape_103.setTransform(87.6,-143.4);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#FFE655").s().p("AgVBAQAIgoAbhYQABgEAEABQABAAAAAAQABAAAAABQABAAAAABQAAABAAABQgWBagNAmQgBAEgEAAQgDgBAAgEg");
	this.shape_104.setTransform(52.6,-10.7);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#FFE655").s().p("AgaByQAEgvAThEQAVhNAJgmIABAAQgIAmgMBOQgLBGgQAsQgBABAAAAQAAABgBAAQAAAAgBABQgBAAAAAAQgBAAgBAAQgBAAAAgBQAAAAAAgBQgBAAABgBg");
	this.shape_105.setTransform(70.6,-75.9);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#FFE655").s().p("AgPDSQgChVAIh8QAKiKAEhGQAAgGAGAAQAGAAAAAGQgEBGgECKQgGB8gJBVQgBAEgEAAIgBAAQgBAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAgBg");
	this.shape_106.setTransform(9.4,-39.5);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#FFE655").s().p("AgODuQAHjLAOkOQABgEADAAQAEgBAAAEQgLD/gNDaQAAABAAAAQAAABgBAAQAAABAAAAQgBAAgBAAQAAAAgBAAQAAAAAAAAQgBgBAAAAQAAgBAAAAg");
	this.shape_107.setTransform(17.4,-171.8);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#FFE655").s().p("AEhKcQgkhEguhjIhOipIiflXIiglOQhijNg7iDQAAgBAAgBQAAAAABgBQAAAAAAgBQABAAAAgBQABAAAAAAQABgBAAABQABAAAAAAQABAAAAABQBCB7BnDKQCAD9AmBJICwFTIBZCqQAzBjAhBJQAOAdgbAJQgHADgGAAQgRAAgLgUg");
	this.shape_108.setTransform(-104.8,-54.7);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#FFE655").s().p("AFuG8QgHgDgCgHQhIhYhwiBIi4jYQhLhWhxiHIi6jeQAAgBAAAAQAAAAAAAAQABAAAAgBQABAAAAAAQFBFtA9BHIC0DUQBsB/BLBUQAFgHAGgBQAHAAAFAHQABABAAAAQAAABAAAAQAAABAAAAQgBABAAAAQAAABgBAAQAAAAgBAAQAAABgBAAQAAAAgBAAQgJABADAIIABACQAFAFgFAFQgCAEgEAAIgEgBg");
	this.shape_109.setTransform(-181.4,26.1);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#FFE655").s().p("Am1MFQgIgDABgJQADhFAUhJQABgHAFgNQAahQAzhdQAjg/A1hTIBdiOIB4i2IA5hxQADgGAGACQAFABgDAGIgGAOIDWlJIBjiZQA6haAtg8QAAAAABgBQAAAAABAAQAAAAABAAQAAAAABAAQAAABAAAAQAAAAAAABQABAAgBAAQAAABAAAAQgsBShKBxIh9C/Ij1GAQhjDOgzBnIh0DlIhzDmQgEAGgFAAIgEgBgAlIHIIAAAAIAshNQgUAfgYAug");
	this.shape_110.setTransform(143.5,-27.2);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#FFE655").s().p("AqfLTQAMgwAahDIAthzQAggpAlgqQA2g8BQhSQBdhbAugvQBohpDSjQIDWjaQAEgEAFgBICwixIBHhTQADgEADADQACADgCADIgKANQBZhXBBg9QAAgBABAAQAAAAAAAAQABAAAAAAQAAAAABABQAAAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAIhTBZIhUBYIhJBIIiyDfIh6CcQhMBigvA5QhbBwimDAQiHCbh+CLIhWBgQgQARg7A3QgSASgVAYIAThLgAorHuIAEADIAZgfIgCgFgAhXAFQAEACABACIBRhagAExmMIABAEIAjgpg");
	this.shape_111.setTransform(101.9,116.3);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#FFE655").s().p("AmTTPQgNgEAAgOQACjzBRkoQA5jMBokNIC6nPIC/nhQBGivAdhGQA5iJA0hpQAAAAAAAAQABAAAAgBQAAAAABAAQAAAAAAAAQABAAAAABQAAAAAAAAQABAAAAABQAAAAgBAAQgkB3g5CXIhoELIhqENIAAABIhHDpQgNA+gbBaIgrCVQg7DVgsCTIiiIYIgeBhQgTA5gUAlQgCAFgFADIgDAMQgDANgKAAIgFgBg");
	this.shape_112.setTransform(82.2,-12);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#FFE655").s().p("AkfUsQg9kCBBkqQAYhsAqiUIBJj9ICWoSQAfhvBNkZQBEj6ApiOIAujWQACgIAHABQAIACgCAIIgEAVIAYhOQACgHAGACQAHABgCAIQgkCWhFDwMgHlAjLQgBAFgGACIgCABQgDAAgCgGgAiRKNIALgxIgCAAgAiUFrIACAAIAFgYg");
	this.shape_113.setTransform(33.8,8.7);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#FFE655").s().p("AHqLpIgkgTIgEgEQAAAAAAABQgBAAAAABQAAAAgBAAQAAABAAAAQgBAAgBAAQAAAAgBAAQAAAAgBAAQAAgBAAAAIgOgVQg7gwgNhFIiqkaQiTjwhFh4IjxlVQiHjChiiXQgBAAAAAAQAAgBAAAAQAAAAAAgBQABAAAAgBQAAAAABAAQAAAAAAAAQABAAAAAAQAAAAABAAQBNBmCmDnQBOBsFcHrIBkCMQA8BUAmA5QAvBFAfA5QAlBGAVBCQABAGgEAGQgEAEgEAAIgDgBgABEBXIABgEIgggvg");
	this.shape_114.setTransform(-87.3,64.9);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#FFE655").s().p("ABqUaIgOgzQgWhVgOg+QgmiqgRiZQgQiXgCinIAAhGIgDghQgPi1gOj9QgUjxgGi7IgDh9QgPkqgFiVIgBgLIgNiIQgIhRAAg4QAAAAAAgBQAAAAAAAAQABgBAAAAQAAAAABAAQAAAAABAAQAAAAAAAAQABAAAAABQAAAAAAABQAJAtAFA1QABAAAAAAQAAAAAAABQABAAAAAAQAAAAAAAAIABATQAGA8AJB4IAMCAQAEgCAEACQADACABAFQAGBfAPCYIAZD3IAkGzQAWEAATCzIAWDMQgGAmACAwQABAfAFA3IANB0QAHBCACAxIAHCXQAEBbABA8IAAAFIgPgzgAhNrqIAAheIgJhjg");
	this.shape_115.setTransform(-36.5,-5.2);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#FFFFFF").s().p("AgUAvQAdhKAJgTQAAAAAAAAQABgBAAAAQAAAAAAAAQABAAAAAAQABAAAAAAQAAAAAAABQAAAAAAAAQAAAAAAABQgHAUgMAaIgVAuIgBABIAAgBg");
	this.shape_116.setTransform(118.5,-53.9);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#FFFFFF").s().p("AgIAhIACghQACgVAEgNQABgDADAAQABAAABAAQAAAAABAAQAAAAAAABQABAAAAABQADANgDAVIgEAgQgBAGgFABIgCAAQgFAAABgFg");
	this.shape_117.setTransform(36,-146.4);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#FFFFFF").s().p("AgCALIAAgUQAAgBAAAAQABgBAAAAQAAAAABAAQAAgBAAAAQABAAAAAAQABAAAAAAQAAABAAAAQABABAAAAQABAJgBALQAAAAAAABQAAAAgBABQAAAAgBAAQAAABgBAAIAAAAQgBAAAAAAQAAAAgBgBQAAAAAAAAQAAgBAAAAg");
	this.shape_118.setTransform(3.1,-90.2);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#FFFFFF").s().p("AgFAzIABgyQABgcADgVQAAgBAAAAQABgBAAAAQAAAAABgBQAAAAABAAQABAAAAAAQABAAAAAAQAAAAAAABQABAAAAABQABAWgDAbIgGAzIgBABQgBAAAAAAQAAAAgBAAQAAAAAAAAQAAgBAAAAg");
	this.shape_119.setTransform(-65.3,-134.3);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#FFFFFF").s().p("AAAAOIgCgOQgCgHADgFIABgCIACABQACADgBAKIgCAOIAAABIgBgBg");
	this.shape_120.setTransform(-100.9,-98.6);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#FFFFFF").s().p("AAUAqQgOgNgLgZIgTgrIABgCQAAAAAAAAQAAAAABAAQAAAAAAAAQAAAAABAAIAaAnQAPAWAFATQAAABAAAAQAAAAAAABQAAAAgBAAQAAABAAAAIgCAAIgCAAg");
	this.shape_121.setTransform(-180.3,-101.3);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#FFFFFF").s().p("AACAPQgDgHgEgTQAAgBAAAAQAAgBABAAQAAgBAAAAQABAAAAAAQABgBABAAQAAAAABAAQAAAAAAABQAAAAAAABQAGARAAAJQAAAAAAABQAAAAgBAAQAAABAAAAQAAAAgBABIAAAAIgCgBg");
	this.shape_122.setTransform(-212,-145.2);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f("#FFFFFF").s().p("AAJATIgLgMQgGgHgCgEIgCgKQAAAAAAgBQAAAAAAgBQAAAAABgBQAAAAABAAQAAgBABAAQAAgBABAAQAAAAABAAQAAAAABABQAGAFADAFQACACACAGIAGAQQAAAAAAABQAAAAAAABQAAAAgBAAQAAABAAAAIgCABIgBgBg");
	this.shape_123.setTransform(-200.1,-28.9);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#FFFFFF").s().p("AAMAZIgPgXQgJgNgCgLQAAAAAAAAQAAgBAAAAQAAAAAAgBQABAAAAAAQABAAAAAAQAAAAABAAQAAAAAAAAQAAAAABAAQAIAIAGAPIALAYQAAAAAAAAQAAABAAAAQAAAAAAAAQAAABgBAAIgBAAIgBAAg");
	this.shape_124.setTransform(-222.3,-56.9);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f("#FFFFFF").s().p("ABlCrQgwhBg6hmQhBh0gig5QAAAAAAAAQAAAAAAgBQAAAAABAAQAAAAAAgBQAAAAABAAQAAAAAAAAQAAAAAAAAQABAAAAAAQAjA4BIBwQA/BiAkBKQAAAAAAABQAAAAAAAAQAAABgBAAQAAAAAAABIgCAAIgBgBg");
	this.shape_125.setTransform(-144.1,46);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#FFFFFF").s().p("AApBHQgYgcgWgnQgQgbgXguQAAAAABgBQAAAAAAAAQAAAAAAAAQABAAAAAAQA/BTAXA4IAAACIgBAAIgCAAg");
	this.shape_126.setTransform(-88.5,95.1);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#FFFFFF").s().p("AADAMIgIgMQgEgGAAgEQAAAAAAgBQAAgBABAAQAAAAABAAQABAAABAAQAEAAADAHIAIAMQABACgDADIgDABIgCgBg");
	this.shape_127.setTransform(-135.5,113.9);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#FFFFFF").s().p("AA/A/QgQgHgegZQgjgegLgLQAAgBgBAAQAAAAAAgBQABAAAAAAQAAgBAAAAIADAAIAEACIgtgxQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAgBABAAQAAAAABAAQAAAAAAAAQABAAAAAAQAAAAAAAAIAiAgQAUATALAOIASAOIAaAUQAOALAIALQABAAAAABQAAAAAAAAQAAABAAAAQAAABgBAAIgCABIgCAAg");
	this.shape_128.setTransform(-130.8,114.8);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f("#FFFFFF").s().p("AgEAxQgLgjAGhBIACgDQABAAAAAAQABAAAAAAQABAAAAABQAAAAAAAAQAUA7gFApQgBAIgHAAQgGAAgBgGg");
	this.shape_129.setTransform(-35.4,138);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#FFFFFF").s().p("AgxA8QgBAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQAmhAA5g1QABgBAAAAQABAAABAAQAAAAABAAQAAAAABAAQAAABABAAQAAAAAAABQAAAAAAABQAAABgBAAQgqBEg3AvIgBAAIgBAAg");
	this.shape_130.setTransform(43.7,165.2);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f("#FFFFFF").s().p("AghBDQAAAAgBgBQAAAAgBAAQAAAAAAgBQAAAAAAgBQANg6AzhGQACgDADABQABABAAAAQABAAAAABQAAAAAAABQAAABAAAAQgaBRgoAvIgCABIgBAAg");
	this.shape_131.setTransform(38.6,129.2);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#FFFFFF").s().p("AAOA2QgJgMgHgjQgLgrgBgPQAAgBAAAAQAAAAAAgBQABAAAAAAQAAAAABgBQAAAAABAAQAAAAAAAAQABAAAAABQAAAAABAAQAFALAEARIAHAcIAGAZQADAOgBAMIgBABIAAgBg");
	this.shape_132.setTransform(-48.3,68.1);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f("#FFFFFF").s().p("AgGA1QAEhPADgcQAAAAAAAAQABgBAAAAQAAAAABgBQAAAAABAAQAAAAABAAQAAAAABAAQAAAAAAABQAAAAAAABQACAfgFBKQAAAFgEABIgCAAQgDAAAAgEg");
	this.shape_133.setTransform(2.5,110.3);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f("#FFE655").s().p("AgOA3IAHg3QAFghAIgWQABgDAEgBQAEAAAAAFQACAXgIAgQgEATgKAkQgBADgEAAIgBABQgEAAABgFg");
	this.shape_134.setTransform(26.2,-109.1);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f("#FFE655").s().p("AgGBkIADhkQACg4ADgrQABgBAAAAQAAAAAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQABAAAAAAQAAAAAAABQAAAAAAAAQABAsgDA4IgGBkQAAAAAAAAQAAABAAAAQAAAAgBAAQAAABgBAAIAAAAQgBAAAAAAQAAAAAAgBQAAAAAAAAQgBAAAAgBg");
	this.shape_135.setTransform(25.8,-168.5);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f("#FFE655").s().p("AjHDTQAAAAAAgBQgBAAABgBQAAAAAAgBQAAgBABAAQAngtA5g8IBjhnQAfgiA/hMQA6hCAtgiQADgCACACQADADgCADQgeAug9A7QhFBBgfAgIhlBsQg7A/gsArIgCACIgCgCg");
	this.shape_136.setTransform(273.1,-70.5);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f("#FFE655").s().p("AhXBNQgBAAAAgBQAAAAAAgBQAAAAAAgBQAAgBABAAQANgTAYgVIAqgiQBEg6AYgRQABgBAAAAQABAAABAAQAAAAABAAQAAABABAAQACADgDACQgZAcg/A2IgnAkQgYAVgUAKIgCAAIgCgBg");
	this.shape_137.setTransform(168,47.1);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f("#FFE655").s().p("AggAnQgEgDADgFQAjgxAagUQADgDADADQACACgCAEQgOAagtAsQAAABgBAAQAAABgBAAQAAAAgBAAQgBABAAAAIgDgCg");
	this.shape_138.setTransform(214.5,-45.9);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f("#FFE655").s().p("AhbBsQgBgBAAAAQAAAAAAgBQAAAAAAgBQAAAAAAgBIBXhrQAyg+AqgpQADgDACACQABABAAAAQAAABAAAAQAAABAAABQAAAAgBABQgiAwg1A7IhdBmIgCACIgBgBg");
	this.shape_139.setTransform(166.5,-10);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#FFE655").s().p("Ag+BuQgDgCACgDQARgjAjhLQAghCAhgkQADgDAFABQAEACgBAFQgOAvgoA9IhEBmQAAAAgBABQAAAAAAAAQgBABAAAAQgBAAAAAAIgCAAg");
	this.shape_140.setTransform(210.2,-143.8);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f("#FFE655").s().p("AhBBhQgBAAAAgBQAAAAAAAAQAAgBAAAAQAAgBAAAAIBAhfQAlg4AcgmQAAgBABAAQAAAAABAAQAAAAABAAQAAAAABAAQAAAAAAABQAAAAAAABQAAAAAAABQAAAAAAAAQgZApgnA2IhCBeIgBABIgBAAg");
	this.shape_141.setTransform(168.9,-79.1);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.f("#FFE655").s().p("Ag4BsQgBAAAAAAQgBAAAAgBQAAAAAAgBQAAAAAAgBQAwhuA9hkQACgEAEABQAEABgCAEQgxBug+BkQAAAAgBABQAAAAAAAAQgBABAAAAQAAAAgBAAIgBgBg");
	this.shape_142.setTransform(112.1,26);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.f("#FFE655").s().p("AgaBbIAVhbQAMg0AMglQABgEAEABQAEAAgBAFQgIAkgQA1IgaBZQAAABAAAAQgBAAAAABQAAAAgBAAQAAAAAAAAIgBAAQAAAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAgBg");
	this.shape_143.setTransform(91.7,-110.7);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.f("#FFE655").s().p("AgfBfIAchfQAPg4APgmQABgBAAAAQAAAAABAAQAAgBAAAAQABAAAAAAQABAAAAAAQAAAAABABQAAAAAAAAQAAABAAAAQgKApgTA2IgfBfIgCABQAAAAAAgBQgBAAAAAAQAAAAAAAAQAAgBAAAAg");
	this.shape_144.setTransform(62.5,-28.1);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.f("#FFE655").s().p("AgUBBIAmiCQABAAABAAQAAAAABAAQAAAAAAAAQAAABAAAAIgnCBIgBABIgBgBg");
	this.shape_145.setTransform(50.6,22);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.f("#FFE655").s().p("AgCB5IgEh4QgChGAFgxQAAgDADgBQAAAAABAAQABAAAAAAQABAAAAABQAAAAABABQAFAygBBGIgFB4QAAABAAAAQgBABAAAAQAAABgBAAQAAAAgBAAIAAAAQAAAAgBAAQAAAAgBAAQAAAAAAgBQAAAAAAgBg");
	this.shape_146.setTransform(-25.6,-131.6);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.f("#FFE655").s().p("AgBA8IgBg8QgBgjACgZQABAAAAAAQAAgBABAAQAAAAABABQAAAAAAAAQACAZgBAjIgBA7QAAABAAAAQAAAAgBABQAAAAAAAAQAAAAgBAAIAAABQAAAAAAgBQAAAAAAAAQgBAAAAAAQAAgBAAAAg");
	this.shape_147.setTransform(-29.6,-54.5);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f("#FFE655").s().p("AACAfQgCgFgBgJIgCgOIgEggQAAAAABgBQAAAAAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQABgBAAABQAAAAABAAQAAAAAAABIAGAeQAEARgBAMQAAABAAAAQAAABAAAAQAAAAgBABQAAAAgBAAIgBAAQAAAAAAAAQgBAAAAAAQAAAAgBAAQAAgBAAAAg");
	this.shape_148.setTransform(-70,-78.5);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f("#FFE655").s().p("AAHAgQgMgZgHgjQAAgBAAAAQAAgBAAAAQABgBAAAAQAAAAABgBQABAAAAAAQABAAAAAAQABAAAAAAQAAABABAAQAOAfAFAdQAAAAAAABQAAAAAAABQgBAAAAABQgBAAAAABIgCAAIgCgBg");
	this.shape_149.setTransform(-94,-156.4);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f("#FFE655").s().p("AA7CXQgRgbgSgqIgchIIg/igQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAABAAQAAAAAAAAQABAAAAAAQAAAAAAAAQABAAAAAAQAXAwAxBjQAsBXAQBAQABAEgEACIgDABQAAAAgBAAQAAAAgBAAQAAgBgBAAQAAAAAAgBg");
	this.shape_150.setTransform(-138.8,-101.4);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f("#FFE655").s().p("AAZA5QgRgfgihNQgCgDAEgCQABAAAAAAQABgBABAAQAAAAABABQAAAAAAABQAiBLANAjIAAACIgBABIgBgBg");
	this.shape_151.setTransform(-168.2,-161.1);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f("#FFE655").s().p("ACzDpQgrgsg1hEIhah0QhXhvhch8QAAAAAAgBQAAAAAAAAQAAgBAAAAQAAAAABAAQAAgBABAAQAAAAABAAQAAAAAAAAQABAAAAABQBkB0BXBuIBeByQA2BEAhA0QACACgDADIgDABIgDgBg");
	this.shape_152.setTransform(-195.9,-79.5);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f("#FFE655").s().p("AAnAzQgVgOgXgcIgnguQgEgFAGgFQAFgGAFAEIApAtQAZAaAMAWQABADgDADQAAAAAAABQgBAAAAAAQAAAAgBABQAAAAgBAAIgCgBg");
	this.shape_153.setTransform(-243.7,-147.2);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f("#FFE655").s().p("AgJgMQgBAAABgBIATAaIAAAAg");
	this.shape_154.setTransform(-249.2,-3.9);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f("#FFE655").s().p("ABIBGQgjgbgqgmIhKhFQgBgBAAAAQAAgBAAAAQAAgBAAAAQABgBAAAAQADgDACACIBOBAQAsAjAgAgQADADgEAEQAAAAgBABQAAAAgBAAQAAAAgBABQAAAAgBAAIgDgBg");
	this.shape_155.setTransform(-239.2,41.6);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.f("#FFE655").s().p("AAWAZIgYgWIgMgKIgKgOQAAAAgBAAQAAgBAAAAQAAgBAAAAQABAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQAAAAABABIAMAJIALALQASATAFAHQABAAAAAAQAAABAAAAQAAABgBAAQAAAAAAABIgCABIgBgBg");
	this.shape_156.setTransform(-291.2,-5.5);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f("#FFE655").s().p("AAfAZQgQgHgRgOIgggZQAAgBAAAAQgBAAAAAAQAAAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQAAAAABAAQAAAAAAAAIAjAVQATALANANQAAAAAAABQABAAAAABQAAAAgBABQAAAAAAAAIgDABIgBAAg");
	this.shape_157.setTransform(-311.5,25.9);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.f("#FFE655").s().p("AgCAFQgFgDgDgCIgEgFQgBAAAAgBQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAABAAQAAgBAAAAQABAAAAAAQAAAAABAAIAIABIAIADQALAFABAEQABADgEACIgDABQgFAAgHgFg");
	this.shape_158.setTransform(-230.8,116.3);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.f("#FFE655").s().p("AAVAQQgMgDgLgJIgWgQQgBAAAAAAQAAAAAAgBQAAAAAAAAQAAgBAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQAAAAABAAIAYALQAPAGAIAIQACACgCADQAAAAgBAAQAAABAAAAQgBAAAAAAQAAAAgBAAIgBAAg");
	this.shape_159.setTransform(-279.7,82.1);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.f("#FFE655").s().p("AAfAdQgQgIgSgRIgggcQAAgBAAAAQAAAAAAgBQAAAAAAgBQABAAAAAAQAAgBABAAQAAAAAAAAQABAAAAAAQAAAAABAAIAiAZQAVANALAOQABABAAAAQAAABAAAAQAAABAAAAQgBABAAAAIgCABIgCAAg");
	this.shape_160.setTransform(-329.5,54.2);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.f("#FFE655").s().p("AAiAeQgMgDgMgIIgVgPIgQgMQgJgJgDgJQAAgBAAAAQAAgBAAAAQABAAAAgBQABAAAAAAQALAAAMAGIASANQAaASAJAOQACADgCADQgBAAAAABQgBAAAAAAQgBABAAAAQgBAAAAAAIgBAAg");
	this.shape_161.setTransform(-286.6,117.8);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.f("#FFE655").s().p("AgiASQAAAAAAgBQAAAAAAAAQAAgBAAAAQAAAAAAgBQAggUAjgNQAAAAABAAQAAAAAAAAQABAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAQAAABAAAAQgBAAAAAAQgcASgmAPIgBAAIgBgBg");
	this.shape_162.setTransform(252.5,19.3);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.f("#FFE655").s().p("AhsBCQAjgWBGguQA+grAtgVQAEgCABADQABADgDACQgoAehCAkIhtA9IAAABIAAgCg");
	this.shape_163.setTransform(248.1,50.3);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.f("#FFE655").s().p("AhHAtQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAAAIBFguQAngbAfgPQABAAAAAAQABAAAAAAQABAAAAAAQABAAAAABQAAABAAAAQAAABAAAAQAAABAAAAQgBABAAAAQgcAVgpAYIhHApIgBAAIgBgBg");
	this.shape_164.setTransform(77.7,168.7);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.f("#FFE655").s().p("AjDCOQAAAAAAgBQAAAAAAAAQAAgBAAAAQAAgBABAAQCPhxDyioQABAAABgBQAAAAABAAQAAABABAAQAAAAAAABQABAAAAABQAAAAAAABQAAAAAAABQAAAAgBABQj0C5iOBfIgCABIgCgCg");
	this.shape_165.setTransform(134.8,123.7);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.f("#FFE655").s().p("AgVALIABgCQATgOAUgGQABAAAAAAQABAAAAAAQAAAAAAABQABAAAAAAQAAABAAAAQAAABAAAAQAAABAAAAQAAAAgBAAQgSANgWAGIgBAAIgBgBg");
	this.shape_166.setTransform(195.1,135.8);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.f("#FFE655").s().p("Ag7AbQAAAAAAgBQAAAAAAgBQAAAAAAgBQABAAAAAAQBIgoAqgMQABAAABAAQAAAAABAAQAAAAABABQAAAAAAABQAAABAAAAQAAABAAAAQAAABgBAAQAAABgBAAQgkAXhOAcIgBAAQAAAAgBAAQAAAAAAAAQgBAAAAgBQAAAAAAgBg");
	this.shape_167.setTransform(154.2,156.2);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.f("#FFE655").s().p("AgvAVQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAgBABAAIAugUQAagNAVgGQAAAAAAAAQABAAAAAAQAAAAAAAAQAAAAAAABIgBACQgTAKgbAKIguASIgBAAIgBAAg");
	this.shape_168.setTransform(120.4,172.6);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.f("#FFE655").s().p("AksChQgBgEADgDQB1hGCyhbIEriaQABgBABAAQAAAAABAAQABAAAAAAQAAABABABQAAAAAAABQAAABAAAAQAAABgBAAQAAABgBAAIknCkQivBhh8A6IgCAAQAAAAgBAAQAAAAgBAAQAAgBAAAAQAAgBgBAAg");
	this.shape_169.setTransform(64.3,203.4);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.f("#FFE655").s().p("AklJIQgFgBABgGQAQhDAphWIBNiSQAagzAyhYQA4hhAWgpQAmhHBvjdQBdi4A+hsQABAAAAAAQABAAABAAQAAAAAAAAQAAABAAAAQgzB1heC6Qh2DoggBDQgUArgsBkQgoBcgZAyIhGCQQgsBTgrAxQgEADgEAAIgCAAg");
	this.shape_170.setTransform(51.3,102.7);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.f("#FFE655").s().p("AhbBzQgBAAAAAAQgBgBAAAAQAAgBAAAAQAAgBABAAQBpiYBKhKQADgCACACQADACgCACQg6Bdh7CEIgCABIgBgBg");
	this.shape_171.setTransform(135,48.1);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.f("#FFE655").s().p("AmWHQQB+iQAqgzIE8l0QC2jUCMicQADgDADADQACACgCAEQiECji1DWIk+F0IifC9QgJgGgNgDg");
	this.shape_172.setTransform(77,126.3);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.f("#FFE655").s().p("AgQBTIAMhTQAHgwAJghQAAAAAAgBQABAAAAAAQAAAAABgBQAAAAAAAAQABAAABAAQAAAAAAABQAAAAABAAQAAABgBAAQgDAigKAwIgRBSIAAABIgCgBg");
	this.shape_173.setTransform(19.1,-22.8);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.f("#FFE655").s().p("AgSDDQABhSAMhxIAVjDQABAAABAAQAAgBABAAQAAAAAAABQAAAAAAAAIgMDDQgHBygNBQQAAAAAAABQAAAAgBABQAAAAgBAAQAAAAgBAAIgBABQAAAAAAgBQgBAAAAAAQAAAAAAAAQAAgBAAAAg");
	this.shape_174.setTransform(7.1,44.1);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.f("#FFE655").s().p("AAiERIgykPQgcicgNh0QgBgFAGgCQAGgCABAGQAbBtAbCaIAuEIIADAQQgMACgLAGg");
	this.shape_175.setTransform(-34,138.9);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.f("#FFE655").s().p("AAzD7QgnhlgbiSIgsj7QAAgDADgCQAEgBABAEIBCD1QAkCOAJBsQAAAEgEACIgCABQAAAAgBAAQAAAAAAgBQgBAAAAAAQAAgBgBAAg");
	this.shape_176.setTransform(-48.5,65.9);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.f("#FFE655").s().p("AArD/QgOgzgNhLIgTiAQgXiDgTh8IABgBIABAAQAWBtAYCRIAZB/QAOBKAEA2QAAAAAAAAQAAABAAAAQAAAAAAABQgBAAAAAAIgBAAIgBgBg");
	this.shape_177.setTransform(-62,-9.9);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.f("#FFE655").s().p("ABODBQggg/goheQgqhrgWg1IgehGQAIABAKgCIAbA/IBECeQApBeAXBDQABAEgFADIgEACQAAAAgBgBQAAAAAAAAQgBAAAAgBQgBAAAAgBg");
	this.shape_178.setTransform(-57.6,169.4);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.f("#FFE655").s().p("ABiEHIhxkMQhAiZgsh3QAAAAAAAAQAAgBAAAAQAAAAABgBQAAAAAAAAQABAAAAAAQABAAAAAAQAAAAABAAQAAAAAAABQA4B2BECgIB3EYIgagRg");
	this.shape_179.setTransform(-91.1,88.7);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.f("#FFE655").s().p("ABDChQgzhrhWjNQgCgFAFgDQAFgEACAFQBcDWAnBnQAAAAAAABQAAAAAAAAQAAABAAAAQAAAAgBAAIgCABIgBgBg");
	this.shape_180.setTransform(-125.9,-1.9);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.f("#FFE655").s().p("AEFC9Qh1hGiWhvIkCjAQgBAAAAgBQAAAAAAAAQAAgBAAAAQAAgBAAAAQABgBAAAAQABAAAAgBQAAAAABAAQAAAAABABIELC0QCaBpBpBXQABAAAAABQAAAAAAABQAAAAAAABQAAABgBAAIgCACIgCgBg");
	this.shape_181.setTransform(-177.9,169);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.f("#FFE655").s().p("AC6CwQiziPjFjGQgEgEAEgEQAEgFAEADQDWCzCgCnQACACgDADIgDABIgCgBg");
	this.shape_182.setTransform(-133.4,112.2);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.f("#FFE655").s().p("ABoBqQgsgog9hAIhohpIAAgCQAAAAABAAQAAgBAAAAQABAAAAABQAAAAAAAAIBqBnQA/A+AoAsQAAAAAAABQABAAAAAAQAAAAgBABQAAAAAAAAIgBABIgBgBg");
	this.shape_183.setTransform(-219.2,31.8);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.f("#FFE655").s().p("ABtBdQg0ghg+g2IhtheQgBgBAAAAQAAAAAAgBQAAAAAAgBQAAAAABAAQAAgBABAAQAAgBABAAQAAAAABAAQAAAAAAABIB0BVQBCAxAsAsQACACgCAEQgBAAAAABQAAAAgBAAQAAABgBAAQAAAAgBAAIgCgBg");
	this.shape_184.setTransform(-169.1,111.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2}]},1).to({state:[{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20}]},1).to({state:[{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36}]},1).to({state:[{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59}]},1).to({state:[{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116}]},1).to({state:[]},1).wait(79));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-42.1,122,85.2,78.1);


(lib.van = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.shock2();
	this.instance.parent = this;
	this.instance.setTransform(11.2,15,1,1,0,0,0,120,70);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(51).to({_off:false},0).to({_off:true},14).wait(41).to({_off:false},0).to({_off:true},14).wait(10));

	// Layer 1
	this.instance_1 = new lib.Symbol1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(13.8,13.8,1,1,0,0,0,13.8,13.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:-360},44).to({regX:13.7,regY:13.7,rotation:-315},7).to({regX:13.8,regY:13.8,rotation:-360},5).to({regX:13.7,regY:13.7,rotation:-315},4).wait(34).to({regX:13.8,regY:13.8,rotation:-360},0).to({regX:13.7,regY:13.7,rotation:-315},7).to({regX:13.8,regY:13.8,rotation:-360},5).to({regX:13.7,regY:13.7,rotation:-315},4).wait(20));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,27.5,27.6);


(lib.tube = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AhuGXQg4gNgegwQgegxANg3ICYqHQATgFAXAAQAmAAAnAVQAmAUAnAAQAcAAAVgHQAKgEAYgMIikK5QgLAvgmAeQglAdgvAAQgQAAgPgEg");
	mask.setTransform(21.8,41.1);

	// Layer 11
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8AD3E0").s().p("AgaAbQgLgLAAgQQAAgPALgLQALgLAPAAQAQAAALALQALALAAAPQAAAQgLALQgLALgQAAQgPAAgLgLg");
	this.shape.setTransform(8.9,70.7);
	this.shape._off = true;

	var maskedShapeInstanceList = [this.shape];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(70).to({_off:false},0).wait(1).to({x:10.8,y:69.4},0).wait(1).to({x:12.6,y:68},0).wait(1).to({x:14.5,y:66.7},0).wait(1).to({x:16.3,y:65.3},0).wait(1).to({x:18.2,y:64},0).wait(1).to({x:20,y:62.6},0).wait(1).to({x:21.9,y:61.3},0).wait(1).to({x:23.7,y:59.9},0).wait(1));

	// Layer 10
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#8AD3E0").s().p("AgpAqQgRgSAAgYQAAgYARgRQASgRAXAAQAYAAASARQARARAAAYQAAAYgRASQgSARgYAAQgXAAgSgRg");
	this.shape_1.setTransform(14.3,69.3);
	this.shape_1._off = true;

	var maskedShapeInstanceList = [this.shape_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(59).to({_off:false},0).wait(1).to({x:15.1,y:68},0).wait(1).to({x:15.9,y:66.7},0).wait(1).to({x:16.7,y:65.3},0).wait(1).to({x:17.4,y:64},0).wait(1).to({x:18.2,y:62.7},0).wait(1).to({x:19,y:61.3},0).wait(1).to({x:19.8,y:60},0).wait(1).to({x:20.5,y:58.7},0).wait(1).to({x:21.3,y:57.3},0).wait(1).to({x:21,y:55.1},0).wait(1).to({x:20.6,y:52.8},0).wait(1).to({x:20.3,y:50.5},0).wait(1).to({x:19.9,y:48.3},0).wait(1).to({x:19.5,y:46},0).wait(1).to({x:19.2,y:43.7},0).wait(1).to({x:18.8,y:41.5},0).wait(1).to({x:18.5,y:39.2},0).wait(1).to({x:18.1,y:36.9},0).wait(2));

	// Layer 9
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#8AD3E0").s().p("AgaAbQgLgLAAgQQAAgPALgLQALgLAPAAQAQAAALALQALALAAAPQAAAQgLALQgLALgQAAQgPAAgLgLg");
	this.shape_2.setTransform(21.5,87.3);
	this.shape_2._off = true;

	var maskedShapeInstanceList = [this.shape_2];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_2).wait(38).to({_off:false},0).wait(1).to({x:21.4,y:86},0).wait(1).to({x:21.3,y:84.6},0).wait(1).to({x:21.2,y:83.2},0).wait(1).to({x:21,y:81.8},0).wait(1).to({x:20.9,y:80.5},0).wait(1).to({x:20.8,y:79.1},0).wait(1).to({x:20.7,y:77.7},0).wait(1).to({x:20.5,y:76.3},0).wait(1).to({x:20.4,y:75},0).wait(1).to({x:20.3,y:73.6},0).wait(1).to({x:20.2,y:72.2},0).wait(1).to({x:20,y:70.8},0).wait(1).to({x:19.9,y:69.5},0).wait(1).to({x:19.8,y:68.1},0).wait(1).to({x:19.7,y:66.7},0).wait(1).to({x:19.5,y:65.3},0).wait(1).to({x:18.8,y:63.9},0).wait(1).to({x:18.1,y:62.4},0).wait(1).to({x:17.3,y:61},0).wait(1).to({x:16.6,y:59.5},0).wait(1).to({x:15.9,y:58.1},0).wait(1).to({x:15.2,y:56.6},0).wait(1).to({x:14.4,y:55.1},0).wait(1).to({x:13.7,y:53.7},0).wait(1).to({x:13,y:52.2},0).wait(1).to({x:12.3,y:50.8},0).wait(1).to({x:11.5,y:49.3},0).wait(1).to({x:13.2,y:46.5},0).wait(1).to({x:14.9,y:43.7},0).wait(1).to({x:16.5,y:40.8},0).wait(1).to({x:18.2,y:38},0).wait(1).to({x:19.9,y:35.2},0).wait(1).to({x:21.5,y:32.3},0).wait(1).to({x:23.2,y:29.5},0).wait(1).to({x:24.9,y:26.7},0).wait(1).to({x:26.5,y:23.8},0).wait(1).to({x:28.2,y:21},0).wait(1).to({x:29.9,y:18.2},0).wait(1).to({x:31.5,y:15.3},0).to({_off:true},1).wait(1));

	// Layer 8
	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#8AD3E0").s().p("AgoAqQgRgSAAgYQAAgXARgRQARgSAXAAQAYAAARASQARARAAAXQAAAYgRASQgRARgYAAQgXAAgRgRg");
	this.shape_3.setTransform(-3.1,83.5);
	this.shape_3._off = true;

	var maskedShapeInstanceList = [this.shape_3];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_3).wait(35).to({_off:false},0).wait(1).to({x:-1.9,y:81.9},0).wait(1).to({x:-0.7,y:80.3},0).wait(1).to({x:0.5,y:78.7},0).wait(1).to({x:1.7,y:77.1},0).wait(1).to({x:2.9,y:75.5},0).wait(1).to({x:4.1,y:73.9},0).wait(1).to({x:5.3,y:72.3},0).wait(1).to({x:6.5,y:70.7},0).wait(1).to({x:7.7,y:69.1},0).wait(1).to({x:8.9,y:67.5},0).wait(1).to({x:11.3,y:65.5},0).wait(1).to({x:13.7,y:63.5},0).wait(1).to({x:16.1,y:61.5},0).wait(1).to({x:18.5,y:59.5},0).wait(1).to({x:20.9,y:57.5},0).wait(1).to({x:22.1,y:53.3},0).wait(1).to({x:23.3,y:49.1},0).wait(1).to({x:24.5,y:44.9},0).wait(1).to({x:25.7,y:40.7},0).wait(1).to({x:26.9,y:36.5},0).wait(1).to({x:28.1,y:32.3},0).wait(1).to({x:29.3,y:28.1},0).wait(1).to({x:30.5,y:23.9},0).wait(1).to({x:31.7,y:19.7},0).wait(1).to({x:32.9,y:15.5},0).wait(1).to({x:32.4,y:14.3},0).wait(1).to({x:32,y:13.1},0).wait(1).to({x:31.5,y:11.9},0).wait(1).to({x:31.1,y:10.6},0).wait(1).to({x:30.7,y:9.4},0).wait(1).to({x:30.2,y:8.2},0).wait(1).to({x:29.8,y:7},0).wait(1).to({x:29.3,y:5.7},0).wait(1).to({x:28.9,y:4.5},0).wait(1).to({x:28.4,y:3.3},0).wait(1).to({x:28,y:2.1},0).wait(1).to({x:27.5,y:0.9},0).wait(1).to({x:27.1,y:-0.4},0).wait(1).to({x:26.7,y:-1.6},0).wait(1).to({x:26.2,y:-2.8},0).wait(1).to({x:25.8,y:-4},0).wait(1).to({x:25.3,y:-5.3},0).wait(1).to({x:24.9,y:-6.5},0).wait(1));

	// Layer 7
	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#8AD3E0").s().p("AgFAGQgCgDAAgDQAAgDACgCQADgCACAAQAEAAACACQACACAAADQAAADgCADQgCACgEAAQgCAAgDgCg");
	this.shape_4.setTransform(20.9,65.7);

	var maskedShapeInstanceList = [this.shape_4];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_4).wait(1).to({y:63.9},0).wait(1).to({y:62},0).wait(1).to({y:60.1},0).wait(1).to({y:58.3},0).wait(1).to({y:56.4},0).wait(1).to({y:54.5},0).wait(1).to({y:52.7},0).wait(1).to({y:50.8},0).wait(1).to({y:48.9},0).wait(1).to({y:47.1},0).wait(1).to({y:45.2},0).wait(1).to({y:43.3},0).wait(1).to({y:41.5},0).wait(1).to({y:39.6},0).wait(1).to({y:37.7},0).wait(1).to({x:21.4,y:37.2},0).wait(1).to({x:21.9,y:36.7},0).wait(1).to({x:22.5,y:36.1},0).wait(1).to({x:23,y:35.6},0).wait(1).to({x:23.5,y:35.1},0).wait(1).to({x:24.1,y:34.5},0).wait(1).to({x:24.6,y:34},0).wait(1).to({x:25.1,y:33.5},0).wait(1).to({x:25.7,y:32.9},0).wait(1).to({x:26.2,y:32.4},0).wait(1).to({x:26.7,y:31.9},0).wait(1).to({x:27.3,y:31.3},0).wait(1).to({x:27.8,y:30.8},0).wait(1).to({x:28.3,y:30.3},0).wait(1).to({x:28.9,y:29.7},0).wait(1).to({x:27.7,y:28.3},0).wait(1).to({x:26.5,y:26.9},0).wait(1).to({x:25.3,y:25.5},0).wait(1).to({x:24.1,y:24.1},0).wait(1).to({x:22.9,y:22.7},0).wait(1).to({x:21.7,y:21.3},0).wait(1).to({x:20.5,y:19.9},0).wait(1).to({x:19.3,y:18.5},0).wait(1).to({x:18.1,y:17.1},0).wait(1).to({x:16.9,y:15.7},0).wait(1).to({x:18.7,y:14.3},0).wait(1).to({x:20.5,y:12.9},0).wait(1).to({x:22.3,y:11.5},0).wait(1).to({x:24.1,y:10.1},0).wait(1).to({x:25.9,y:8.7},0).wait(1).to({x:27.7,y:7.3},0).wait(1).to({x:29.5,y:5.9},0).wait(1).to({x:31.3,y:4.5},0).wait(1).to({x:33.1,y:3.1},0).wait(1).to({x:34.9,y:1.7},0).to({_off:true},1).wait(28));

	// Layer 6
	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#8AD3E0").s().p("AgpAqQgRgSAAgYQAAgYARgRQASgRAXAAQAYAAASARQARARAAAYQAAAYgRASQgSARgYAAQgXAAgSgRg");
	this.shape_5.setTransform(8.4,91.1);
	this.shape_5._off = true;

	var maskedShapeInstanceList = [this.shape_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_5).wait(2).to({_off:false},0).wait(1).to({x:8.7,y:90.2},0).wait(1).to({x:9,y:89.3},0).wait(1).to({x:9.3,y:88.3},0).wait(1).to({x:9.6,y:87.4},0).wait(1).to({x:9.9,y:86.5},0).wait(1).to({x:10.2,y:85.6},0).wait(1).to({x:10.5,y:84.7},0).wait(1).to({x:10.8,y:83.8},0).wait(1).to({x:11.1,y:82.9},0).wait(1).to({x:11.4,y:82},0).wait(1).to({x:11.7,y:81.1},0).wait(1).to({x:12,y:80.2},0).wait(1).to({x:12.3,y:79.3},0).wait(1).to({x:12.6,y:78.3},0).wait(1).to({x:12.9,y:77.4},0).wait(1).to({x:13.2,y:76.5},0).wait(1).to({x:13.5,y:75.6},0).wait(1).to({x:13.8,y:74.7},0).wait(1).to({x:14.1,y:73.8},0).wait(1).to({x:14.4,y:72.9},0).wait(1).to({x:14.7,y:72},0).wait(1).to({x:15,y:71.1},0).wait(1).to({x:15.3,y:70.2},0).wait(1).to({x:15.6,y:69.3},0).wait(1).to({x:16,y:68.3},0).wait(1).to({x:16.3,y:67.4},0).wait(1).to({x:16.6,y:66.5},0).wait(1).to({x:16.9,y:65.6},0).wait(1).to({x:17.2,y:64.7},0).wait(1).to({x:17.5,y:63.8},0).wait(1).to({x:17.8,y:62.9},0).wait(1).to({x:18.1,y:62},0).wait(1).to({x:18.4,y:61.1},0).wait(1).to({x:18.3,y:60},0).wait(1).to({y:58.9},0).wait(1).to({x:18.2,y:57.8},0).wait(1).to({x:18.1,y:56.7},0).wait(1).to({y:55.6},0).wait(1).to({x:18,y:54.5},0).wait(1).to({y:53.4},0).wait(1).to({x:17.9,y:52.3},0).wait(1).to({x:17.8,y:51.3},0).wait(1).to({y:50.2},0).wait(1).to({x:17.7,y:49.1},0).wait(1).to({x:17.6,y:48},0).wait(1).to({y:46.9},0).wait(1).to({x:17.5,y:45.8},0).wait(1).to({y:44.7},0).wait(1).to({x:17.4,y:43.6},0).wait(1).to({x:17.3,y:42.5},0).wait(1).to({y:41.4},0).wait(1).to({x:17.2,y:40.3},0).wait(1).to({y:39.3},0).wait(1).to({x:17.1,y:38.2},0).wait(1).to({x:17,y:37.1},0).wait(1).to({y:36},0).wait(1).to({x:16.9,y:34.9},0).wait(1).to({y:33.8},0).wait(1).to({x:16.8,y:32.7},0).wait(1).to({x:16.7,y:31.6},0).wait(1).to({y:30.5},0).wait(1).to({x:16.6,y:29.4},0).wait(1).to({y:28.3},0).wait(1).to({x:16.5,y:27.3},0).wait(1).to({x:16.4,y:26.2},0).wait(1).to({y:25.1},0).wait(1).to({x:18,y:22.3},0).wait(1).to({x:19.6,y:19.5},0).wait(1).to({x:21.2,y:16.7},0).wait(1).to({x:22.8,y:13.9},0).wait(1).to({x:24.4,y:11.1},0).wait(1).to({x:26,y:8.3},0).wait(1).to({x:27.6,y:5.5},0).wait(1).to({x:29.2,y:2.7},0).wait(1).to({x:30.8,y:-0.1},0).wait(1).to({x:32.4,y:-2.9},0).wait(1));

	// Layer 5
	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgHQAHgGAJAAQAIAAAHAGQAHAHAAAJQAAAKgHAGQgHAHgIAAQgJAAgHgHg");
	this.shape_6.setTransform(19.9,89);
	this.shape_6._off = true;

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgGQAHgHAJAAQAIAAAIAHQAGAGAAAJQAAAJgGAHQgIAHgIAAQgJAAgHgHg");
	this.shape_7.setTransform(18.7,86.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgGQAHgHAIAAQAKAAAGAHQAHAGAAAJQAAAJgHAHQgGAHgKAAQgIAAgHgHg");
	this.shape_8.setTransform(17.4,83.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgGQAGgHAJAAQAKAAAHAHQAGAGAAAJQAAAJgGAHQgHAHgKAAQgJAAgGgHg");
	this.shape_9.setTransform(14.8,77.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgHQAGgGAJAAQAJAAAIAGQAGAHAAAJQAAAKgGAGQgIAHgJAAQgJAAgGgHg");
	this.shape_10.setTransform(13.6,74.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgGQAGgHAJAAQAJAAAIAHQAGAGAAAJQAAAJgGAHQgIAHgJAAQgJAAgGgHg");
	this.shape_11.setTransform(7.2,59.9);
	this.shape_11._off = true;

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgHQAGgGAJAAQAJAAAIAGQAGAHAAAJQAAAJgGAHQgIAHgJAAQgJAAgGgHg");
	this.shape_12.setTransform(5.9,57);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgHQAHgGAIAAQAKAAAGAGQAHAHAAAJQAAAKgHAGQgGAHgKAAQgIAAgHgHg");
	this.shape_13.setTransform(7.6,55.3);
	this.shape_13._off = true;

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgGQAHgHAJAAQAIAAAHAHQAHAGAAAJQAAAJgHAHQgHAHgIAAQgJAAgHgHg");
	this.shape_14.setTransform(10.9,52);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgGQAGgHAKAAQAJAAAHAHQAGAGAAAJQAAAJgGAHQgHAHgJAAQgKAAgGgHg");
	this.shape_15.setTransform(14.3,48.6);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgHQAGgGAJAAQAJAAAHAGQAHAHAAAJQAAAKgHAGQgHAHgJAAQgJAAgGgHg");
	this.shape_16.setTransform(15.9,47);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#8AD3E0").s().p("AgPAQQgHgHAAgJQAAgJAHgHQAGgGAJAAQAJAAAHAGQAHAHAAAJQAAAJgHAHQgHAHgJAAQgJAAgGgHg");
	this.shape_17.setTransform(24.9,35.4);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgHQAGgGAKAAQAJAAAHAGQAGAHAAAJQAAAKgGAGQgHAHgJAAQgKAAgGgHg");
	this.shape_18.setTransform(21.9,30.6);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgHQAHgGAJAAQAIAAAIAGQAGAHAAAJQAAAKgGAGQgIAHgIAAQgJAAgHgHg");
	this.shape_19.setTransform(20.9,29);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgGQAHgHAIAAQAKAAAGAHQAHAGAAAJQAAAKgHAGQgGAHgKAAQgIAAgHgHg");
	this.shape_20.setTransform(17.9,24.2);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#8AD3E0").s().p("AgPAQQgHgGAAgKQAAgJAHgGQAHgHAJAAQAIAAAHAHQAHAGAAAJQAAAKgHAGQgHAHgIAAQgJAAgHgHg");
	this.shape_21.setTransform(18.1,18.8);

	var maskedShapeInstanceList = [this.shape_6,this.shape_7,this.shape_8,this.shape_9,this.shape_10,this.shape_11,this.shape_12,this.shape_13,this.shape_14,this.shape_15,this.shape_16,this.shape_17,this.shape_18,this.shape_19,this.shape_20,this.shape_21];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_6}]},11).to({state:[{t:this.shape_7,p:{x:18.7,y:86.1}}]},1).to({state:[{t:this.shape_8,p:{x:17.4,y:83.2}}]},1).to({state:[{t:this.shape_8,p:{x:16.1,y:80.2}}]},1).to({state:[{t:this.shape_9,p:{x:14.8,y:77.3}}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7,p:{x:11,y:68.6}}]},1).to({state:[{t:this.shape_8,p:{x:9.7,y:65.7}}]},1).to({state:[{t:this.shape_8,p:{x:8.5,y:62.8}}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12,p:{x:5.9,y:57}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14,p:{x:10.9,y:52}}]},1).to({state:[{t:this.shape_9,p:{x:12.6,y:50.3}}]},1).to({state:[{t:this.shape_15,p:{x:14.3,y:48.6}}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_7,p:{x:20.9,y:42}}]},1).to({state:[{t:this.shape_12,p:{x:22.6,y:40.3}}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_17,p:{x:24.9,y:35.4}}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_14,p:{x:19.9,y:27.4}}]},1).to({state:[{t:this.shape_14,p:{x:18.9,y:25.8}}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_17,p:{x:15.9,y:21}}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_15,p:{x:24.7,y:12.2}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_15,p:{x:29.1,y:7.8}}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_7,p:{x:33.5,y:3.4}}]},1).to({state:[{t:this.shape_17,p:{x:35.7,y:1.2}}]},1).to({state:[{t:this.shape_6}]},1).to({state:[]},1).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(11).to({_off:false},0).to({_off:true},1).wait(5).to({_off:false,x:12.3,y:71.5},0).to({_off:true},1).wait(11).to({_off:false,x:17.6,y:45.3},0).to({_off:true},1).wait(17).to({_off:false,x:22.5,y:14.4},0).to({_off:true},1).wait(6).to({_off:false,x:37.9,y:-1},0).to({_off:true},1).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.shape_11).wait(21).to({_off:false},0).to({_off:true},1).wait(11).to({_off:false,x:24.3,y:38.6},0).to({_off:true},1).wait(2).to({_off:false,x:23.9,y:33.8},0).wait(1).to({x:22.9,y:32.2},0).to({_off:true},1).wait(8).to({_off:false,x:20.3,y:16.6},0).to({_off:true},1).wait(32));
	this.timeline.addTween(cjs.Tween.get(this.shape_13).wait(23).to({_off:false},0).wait(1).to({x:9.3,y:53.6},0).to({_off:true},1).wait(5).to({_off:false,x:19.3,y:43.6},0).to({_off:true},1).wait(3).to({_off:false,x:25.9,y:37},0).to({_off:true},1).wait(8).to({_off:false,x:16.9,y:22.6},0).to({_off:true},1).wait(5).to({_off:false,x:26.9,y:10},0).to({_off:true},1).wait(1).to({_off:false,x:31.3,y:5.6},0).to({_off:true},1).wait(27));

	// Layer 4
	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#8AD3E0").s().p("AghAhQgNgNAAgUQAAgSANgOQAOgOATAAQATAAAOAOQAOAOAAASQAAAUgOANQgOAOgTAAQgTAAgOgOg");
	this.shape_22.setTransform(1.9,86.2);
	this.shape_22._off = true;

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8AD3E0").s().p("AggAhQgOgNAAgUQAAgSAOgOQAOgOASAAQATAAAOAOQAOAOAAASQAAAUgOANQgOAOgTAAQgSAAgOgOg");
	this.shape_23.setTransform(2.3,84.4);
	this.shape_23._off = true;

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#8AD3E0").s().p("AggAhQgOgNAAgUQAAgSAOgOQANgOATAAQATAAAOAOQAOAOAAASQAAAUgOANQgOAOgTAAQgTAAgNgOg");
	this.shape_24.setTransform(3.1,80.8);
	this.shape_24._off = true;

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#8AD3E0").s().p("AghAhQgNgNAAgUQAAgSANgOQAPgOASAAQATAAAOAOQAOAOAAASQAAAUgOANQgOAOgTAAQgSAAgPgOg");
	this.shape_25.setTransform(3.5,79);
	this.shape_25._off = true;

	var maskedShapeInstanceList = [this.shape_22,this.shape_23,this.shape_24,this.shape_25];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_22).wait(8).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:2.7,y:82.6},0).to({_off:true},1).wait(4).to({_off:false,x:4.7,y:73.6},0).to({_off:true},1).wait(1).to({_off:false,x:5.5,y:70},0).to({_off:true},1).wait(4).to({_off:false,x:10.5,y:64.8},0).to({_off:true},1).wait(2).to({_off:false,x:14,y:62.3},0).to({_off:true},1).wait(1).to({_off:false,x:16.4,y:60.7},0).wait(1).to({x:17.5,y:59.8},0).to({_off:true},1).wait(1).to({_off:false,x:19.9,y:58.2},0).to({_off:true},1).wait(2).to({_off:false,x:17.6,y:54.4},0).to({_off:true},1).wait(2).to({_off:false,x:15.4,y:50.7},0).to({_off:true},1).wait(2).to({_off:false,y:46},0).to({_off:true},1).wait(2).to({_off:false,x:19.9,y:39.5},0).to({_off:true},1).wait(2).to({_off:false,x:24.4,y:33},0).to({_off:true},1).wait(2).to({_off:false,x:28.9,y:26.5},0).to({_off:true},1).wait(2).to({_off:false,x:31,y:19.8},0).wait(1).to({x:30.2,y:17.5},0).to({_off:true},1).wait(1).to({_off:false,x:28.5,y:12.8},0).to({_off:true},1).wait(4).to({_off:false,x:24.4,y:1.2},0).to({_off:true},1).wait(19));
	this.timeline.addTween(cjs.Tween.get(this.shape_23).wait(9).to({_off:false},0).to({_off:true},1).wait(6).to({_off:false,x:5.1,y:71.8},0).to({_off:true},1).wait(1).to({_off:false,x:5.9,y:68.2},0).to({_off:true},1).wait(1).to({_off:false,x:8.2,y:66.5},0).to({_off:true},1).wait(2).to({_off:false,x:11.7,y:64},0).to({_off:true},1).wait(25).to({_off:false,x:30.4,y:24.3},0).to({_off:true},1).wait(3).to({_off:false,x:29.4,y:15.2},0).to({_off:true},1).wait(4).to({_off:false,x:25.2,y:3.5},0).to({_off:true},1).wait(1).to({_off:false,x:23.5,y:-1.2},0).wait(1).to({x:22.7,y:-3.5},0).to({_off:true},1).wait(17));
	this.timeline.addTween(cjs.Tween.get(this.shape_24).wait(11).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:3.9,y:77.2},0).to({_off:true},1).wait(5).to({_off:false,x:7,y:67.3},0).to({_off:true},1).wait(1).to({_off:false,x:9.4,y:65.7},0).to({_off:true},1).wait(2).to({_off:false,x:12.9,y:63.2},0).to({_off:true},1).wait(1).to({_off:false,x:15.2,y:61.5},0).to({_off:true},1).wait(2).to({_off:false,x:18.7,y:59},0).to({_off:true},1).wait(2).to({_off:false,x:18.4,y:55.7},0).to({_off:true},1).wait(2).to({_off:false,x:16.1,y:51.9},0).to({_off:true},1).wait(2).to({_off:false,x:13.9,y:48.2},0).to({_off:true},1).wait(2).to({_off:false,x:18.4,y:41.7},0).to({_off:true},1).wait(2).to({_off:false,x:22.9,y:35.2},0).to({_off:true},1).wait(2).to({_off:false,x:27.4,y:28.7},0).to({_off:true},1).wait(2).to({_off:false,x:31.9,y:22.2},0).to({_off:true},1).wait(4).to({_off:false,x:27.7,y:10.5},0).to({_off:true},1).wait(1).to({_off:false,x:26,y:5.8},0).to({_off:true},1).wait(4).to({_off:false,x:21.9,y:-5.8},0).to({_off:true},1).wait(16));
	this.timeline.addTween(cjs.Tween.get(this.shape_25).wait(12).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false,x:4.3,y:75.4},0).to({_off:true},1).wait(16).to({_off:false,x:19.1,y:56.9},0).to({_off:true},1).wait(2).to({_off:false,x:16.9,y:53.2},0).to({_off:true},1).wait(2).to({_off:false,x:14.6,y:49.4},0).to({_off:true},1).wait(2).to({_off:false,x:16.9,y:43.8},0).to({_off:true},1).wait(2).to({_off:false,x:21.4,y:37.3},0).to({_off:true},1).wait(2).to({_off:false,x:25.9,y:30.8},0).to({_off:true},1).wait(9).to({_off:false,x:26.9,y:8.2},0).to({_off:true},1).wait(22));

	// Layer 2
	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#8AD3E0").s().p("AgVAXQgKgKAAgNQAAgMAKgJQAJgKAMAAQANAAAJAKQAKAJAAAMQAAANgKAKQgJAJgNAAQgMAAgJgJg");
	this.shape_26.setTransform(19.2,90.3);

	var maskedShapeInstanceList = [this.shape_26];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.shape_26).wait(1).to({x:18.7,y:89.1},0).wait(1).to({x:18.2,y:88},0).wait(1).to({x:17.7,y:86.8},0).wait(1).to({x:17.2,y:85.7},0).wait(1).to({x:16.7,y:84.6},0).wait(1).to({x:16.2,y:83.4},0).wait(1).to({x:15.7,y:82.3},0).wait(1).to({x:15.2,y:81.1},0).wait(1).to({x:14.7,y:80},0).wait(1).to({x:14.2,y:78.8},0).wait(1).to({x:13.7,y:77.7},0).wait(1).to({x:13.2,y:76.6},0).wait(1).to({x:12.7,y:75.4},0).wait(1).to({x:12.2,y:74.3},0).wait(1).to({x:13.2,y:73.2},0).wait(1).to({x:14.2,y:72.1},0).wait(1).to({x:15.2,y:70.9},0).wait(1).to({x:16.2,y:69.8},0).wait(1).to({x:17.2,y:68.7},0).wait(1).to({x:18.2,y:67.6},0).wait(1).to({x:19.2,y:66.5},0).wait(1).to({x:20.2,y:65.4},0).wait(1).to({x:21.2,y:64.3},0).wait(1).to({x:20.4,y:62.9},0).wait(1).to({x:19.6,y:61.6},0).wait(1).to({x:18.8,y:60.3},0).wait(1).to({x:18.1,y:58.9},0).wait(1).to({x:17.3,y:57.6},0).wait(1).to({x:16.5,y:56.3},0).wait(1).to({x:15.7,y:54.9},0).wait(1).to({x:15,y:53.6},0).wait(1).to({x:14.2,y:52.3},0).wait(1).to({x:15.4,y:50.3},0).wait(1).to({x:16.6,y:48.3},0).wait(1).to({x:17.8,y:46.3},0).wait(1).to({x:19,y:44.3},0).wait(1).to({x:20.2,y:42.3},0).wait(1).to({x:21.4,y:40.3},0).wait(1).to({x:22.6,y:38.3},0).wait(1).to({x:23.8,y:36.3},0).wait(1).to({x:25,y:34.3},0).wait(1).to({x:26.2,y:32.3},0).wait(1).to({x:25.4,y:30.9},0).wait(1).to({x:24.6,y:29.5},0).wait(1).to({x:23.8,y:28.1},0).wait(1).to({x:23,y:26.7},0).wait(1).to({x:22.2,y:25.3},0).wait(1).to({x:21.4,y:23.9},0).wait(1).to({x:20.6,y:22.5},0).wait(1).to({x:19.8,y:21.1},0).wait(1).to({x:19,y:19.7},0).wait(1).to({x:18.2,y:18.3},0).wait(1).to({x:19.9,y:15.4},0).wait(1).to({x:21.6,y:12.6},0).wait(1).to({x:23.3,y:9.7},0).wait(1).to({x:25,y:6.8},0).wait(1).to({x:26.7,y:4},0).wait(1).to({x:28.5,y:1.1},0).wait(1).to({x:30.2,y:-1.7},0).to({_off:true},1).wait(19));

	// Isolation Mode
	this.instance = new lib.Symbol3();
	this.instance.parent = this;
	this.instance.setTransform(29.1,39.2,1,1,0,0,0,330.6,47.9);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(79));

	// Isolation Mode
	this.instance_1 = new lib.Symbol4();
	this.instance_1.parent = this;
	this.instance_1.setTransform(195.4,38,1,1,0,0,0,330.6,48.3);

	var maskedShapeInstanceList = [this.instance_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(79));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,43.6,82.2);


(lib.container = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Symbol2();
	this.instance.parent = this;
	this.instance.setTransform(208,252.7,1,1,0,0,0,2.7,2.6);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQAEgMAMAAIACABIABAAQAGABAEAGQADAFgBAFIgDAHQgFAGgIAAg");
	this.shape.setTransform(206.5,260.7,0.48,0.48);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#00AC58").s().p("AgJApQgRgDgKgPQgJgPAFgRQADgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAPgEAQQgCAJgFAGQgNATgWAAg");
	this.shape_1.setTransform(207.3,261.5,0.48,0.48);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#00AC58").s().p("AgbArIAAhVIAiAAQAJAAAGAGQAHAHgBAIIAAAqQABAJgHAGQgGAHgJAAg");
	this.shape_2.setTransform(208.7,261.5,0.48,0.48);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#19B256").s().p("AgMA1QgVgFgMgTQgMgTAGgVQADgTAQgLQAPgMASAAIAKACIABAAIABAAQAVAFAMATQAMATgGAUQgCALgHAIQgQAXgbAAIgMgBg");
	this.shape_3.setTransform(208.1,261.5,0.48,0.48);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	// Layer 4
	this.instance_1 = new lib.van();
	this.instance_1.parent = this;
	this.instance_1.setTransform(337.1,353.1,1,1,0,0,0,13.8,13.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 5
	this.instance_2 = new lib.explode();
	this.instance_2.parent = this;
	this.instance_2.setTransform(226.8,147.8,0.3,0.3,-45,0,0,0.7,161.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// Layer 6
	this.instance_3 = new lib.Symbol5();
	this.instance_3.parent = this;
	this.instance_3.setTransform(571.7,265,1,1,0,0,0,36.3,8.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// Layer 1
	this.instance_4 = new lib.shock();
	this.instance_4.parent = this;
	this.instance_4.setTransform(406.6,213.5,1,1,0,0,0,197.5,-6.8);

	this.instance_5 = new lib.tube();
	this.instance_5.parent = this;
	this.instance_5.setTransform(503.1,193.6,1,1,0,0,0,21.8,41.1);

	this.instance_6 = new lib.explosion2();
	this.instance_6.parent = this;
	this.instance_6.setTransform(391.5,138.1,0.5,0.5,0,0,0,250.2,392.3);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#495555").s().p("AgsgpIBYgBIAABUIhYABg");
	this.shape_4.setTransform(521.8,404.3,0.48,0.48);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#535D5F").s().p("AhIApIgUgUQgCgCAAgDIAAgyQAAgHAHAAICvgBQACAAADADQACACAAADIAAAyQAAADgCACIgUATQgCACgCAAIiIABIgFgCg");
	this.shape_5.setTransform(521.8,404.3,0.48,0.48);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#7E8B8D").s().p("AAxAOIhjgOQgHAAABgHQABgDACgCQACgBADAAIBjANQADABACACQABACAAADQgBAGgGAAg");
	this.shape_6.setTransform(521.8,398,0.48,0.48);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#7E8B8D").s().p("AAxAOIhigOQgIAAABgHQACgHAHABIBiANQADAAACADQACACgBADQgBAGgGAAg");
	this.shape_7.setTransform(521.8,396.6,0.48,0.48);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#7E8B8D").s().p("AAxAOIhjgOQgHAAABgHQAAgDADgCQACgBADAAIBjANQAHABgBAHQgBAGgGAAg");
	this.shape_8.setTransform(521.8,395.2,0.48,0.48);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#7E8B8D").s().p("AAxAOIhjgOQgHAAABgHQABgDACgCQADgCACABIBjANQADAAACADQACACgBADQgBAGgGAAg");
	this.shape_9.setTransform(521.8,393.9,0.48,0.48);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#7E8B8D").s().p("AAxAOIhjgOQgHAAABgHQAAgDADgCQACgBADAAIBjANQAHABgBAHQgBAGgGAAg");
	this.shape_10.setTransform(521.8,392.5,0.48,0.48);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#626E70").s().p("AgegJIA8AAIAUASIhjABg");
	this.shape_11.setTransform(521.8,390.7,0.48,0.48);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#424C4E").s().p("AgxgJIBjgCIAAAWIhjABg");
	this.shape_12.setTransform(521.8,402,0.48,0.48);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#424C4E").s().p("AgQh2IAhAAIAADsIghABg");
	this.shape_13.setTransform(523.4,396.9,0.48,0.48);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#535D5F").s().p("Agxh1IAKgKIBPAAIAKAKIAAD1IhjAAg");
	this.shape_14.setTransform(521.8,396.4,0.48,0.48);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#495555").s().p("AgxAkIAQhXIBUAQIgRBXg");
	this.shape_15.setTransform(535,397.3,0.48,0.48);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#535D5F").s().p("AAPBiIgxgKQgEgBgBgCIgPgXQgCgBAAgEIAbiFQAAgDADgCIAWgPQADgCACABIAyAJQAHACgBAHIgiCrQgBAGgGAAIgBAAg");
	this.shape_16.setTransform(535.1,397.4,0.48,0.48);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#7E8B8D").s().p("AgSA3QgGgDACgGIAghfQACgGAHACQAHADgDAGIggBeQgBAFgFAAg");
	this.shape_17.setTransform(541.2,398.5,0.48,0.48);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#7E8B8D").s().p("AgSA2QgHgCADgHIAgheQABgDACgBQADgBADABQAGACgCAHIggBeQgBAFgGAAg");
	this.shape_18.setTransform(542.6,398.8,0.48,0.48);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#7E8B8D").s().p("AgSA2QgGgCACgHIAgheQACgHAHADQADABABACQABADgBADIggBeQgBAFgFAAg");
	this.shape_19.setTransform(543.9,399,0.48,0.48);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#7E8B8D").s().p("AgSA2QgHgDADgGIAgheQABgDACgBQADgBADABQAGACgCAHIggBeQgBAFgGAAg");
	this.shape_20.setTransform(545.2,399.3,0.48,0.48);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#7E8B8D").s().p("AgSA2QgGgCACgHIAgheQACgHAHACQAHADgDAHIggBeQgBAFgFAAg");
	this.shape_21.setTransform(546.6,399.5,0.48,0.48);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#626E70").s().p("AACgwIAPAXIgLA7IgWAPg");
	this.shape_22.setTransform(548.2,399.8,0.48,0.48);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#424C4E").s().p("AgTAvIAThhIAUAEIgRBhg");
	this.shape_23.setTransform(537.2,397.7,0.48,0.48);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#424C4E").s().p("Ah2gFIAFghIDoAsIgGAhg");
	this.shape_24.setTransform(542,400.3,0.48,0.48);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#535D5F").s().p("AiFAaIAThhIDxAvIAIALIgQBOIgMAIg");
	this.shape_25.setTransform(542.7,398.7,0.48,0.48);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#495555").s().p("AgxgjIBSgQIARBXIhSAQg");
	this.shape_26.setTransform(343.5,392.8,0.48,0.48);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#535D5F").s().p("AgWBcIgiirQAAgDABgCQACgDADgBIAygJQACgBADACIAWAPQADACAAADIAbCFQAAACgBAEIgQAWQgBACgDABIgyAKIgBAAQgGAAgBgGg");
	this.shape_27.setTransform(343.4,392.9,0.48,0.48);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#7E8B8D").s().p("AAKAyIggheQgDgHAHgDQAHgCACAHIAgBeQACAHgGACIgDABQgFAAgBgFg");
	this.shape_28.setTransform(337.2,394,0.48,0.48);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#7E8B8D").s().p("AARA3QgGAAgBgFIggheQgCgHAGgCQAHgCACAGIAgBeQADAHgHADg");
	this.shape_29.setTransform(335.9,394.2,0.48,0.48);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#7E8B8D").s().p("AAKAyIggheQgDgHAHgCQAHgDACAHIAgBeQACAIgGABIgDABQgEAAgCgFg");
	this.shape_30.setTransform(334.6,394.5,0.48,0.48);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#7E8B8D").s().p("AAKAyIggheIAAgGQACgCACgBQAHgDACAHIAgBeQABADgBADQgBADgDAAIgCABQgGAAgBgFg");
	this.shape_31.setTransform(333.2,394.8,0.48,0.48);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#7E8B8D").s().p("AAKAyIggheQgDgHAHgCQAGgDADAHIAgBeQACAHgGACIgDABQgFAAgBgFg");
	this.shape_32.setTransform(331.9,395,0.48,0.48);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#626E70").s().p("AgFAhIgLg6IAPgXIASBhg");
	this.shape_33.setTransform(330.2,395.3,0.48,0.48);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#424C4E").s().p("AgTguIAUgEIATBhIgWAEg");
	this.shape_34.setTransform(341.3,393.2,0.48,0.48);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#424C4E").s().p("Ah3AGIDogsIAHAhIjoAsg");
	this.shape_35.setTransform(336.5,395.8,0.48,0.48);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#535D5F").s().p("Ah2BBIgQhOIAIgLIDxgwIAUBhIjyAwg");
	this.shape_36.setTransform(335.8,394.2,0.48,0.48);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#CDD5D8").s().p("EgigAAoQgRAAgMgMQgMgMAAgQIAAgnMBGTAAAIAAAnQAAAQgMAMQgMAMgRAAg");
	this.shape_37.setTransform(167.9,401.1,0.48,0.48);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#E7EFF0").s().p("Egi0ACGQgJAAgGgGQgGgGAAgIIAAjjQAAgIAGgGQAGgGAJAAMBFpAAAQAJAAAGAGQAGAGAAAIIAADjQAAAIgGAGQgGAGgJAAg");
	this.shape_38.setTransform(167.9,396.6,0.48,0.48);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#AFBABD").s().p("EgkeACGQgIAAgHgGQgFgGAAgIIAAjiQAAgJAFgGQAHgGAIAAMBI9AAAQAIAAAGAGQAHAGgBAJIAADiQABAIgHAGQgGAGgIAAg");
	this.shape_39.setTransform(183.6,396.6,0.48,0.48);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#7E8B8D").s().p("Ag4AQQgHAAgBgGQAAgDACgDQACgDADgBIBwgPQAIgBABAIQABAIgIAAIhwAQg");
	this.shape_40.setTransform(67.3,388.2,0.48,0.48);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#7E8B8D").s().p("Ag4AQQgHAAgBgHQAAgDACgDQACgCADgBIBwgPQAIgBABAIQABAIgIAAIhwAQg");
	this.shape_41.setTransform(67.3,386.6,0.48,0.48);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#7E8B8D").s().p("Ag3AQQgIAAAAgHQgBgDACgDQACgCADgBIBwgPQAHgBACAIQABADgCADQgCACgEAAIhvAQg");
	this.shape_42.setTransform(67.3,385.1,0.48,0.48);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#7E8B8D").s().p("Ag4AQQgHAAgBgHQAAgDACgDQACgCADgBIBwgPQAIgBABAIQABAIgIAAIhwAQg");
	this.shape_43.setTransform(67.3,383.5,0.48,0.48);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#7E8B8D").s().p("Ag3ALIAVgVIBEAAIAWAVg");
	this.shape_44.setTransform(67.3,381.5,0.48,0.48);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#424C4E").s().p("AgSCRIAAkhIAQAAIAVAWIAAELg");
	this.shape_45.setTransform(69,387.9,0.48,0.48);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#535D5F").s().p("Ag3CRIAAkWIALgLIBZAAIALALIAAEWg");
	this.shape_46.setTransform(67.3,387.9,0.48,0.48);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#FFFFFF").s().p("AhFAjQgGgBAAgFIAAg4QAAgGAGAAICLAAQAGAAAAAGIAAA4QAAAFgGABg");
	this.shape_47.setTransform(526.2,273.7,0.48,0.48);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#C0CAD1").s().p("AhEAjQgHgBAAgFIAAg4QAAgGAHAAICKAAQAGAAAAAGIAAA4QAAAFgGABg");
	this.shape_48.setTransform(526.9,273.7,0.48,0.48);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#FFFFFF").s().p("AhFAjQgGgBAAgFIAAg4QAAgGAGAAICLAAQAGAAAAAGIAAA4QAAAFgGABg");
	this.shape_49.setTransform(517.2,273.7,0.48,0.48);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#C0CAD1").s().p("AhFAjQgGgBAAgFIAAg4QAAgGAGAAICLAAQAGAAAAAGIAAA4QAAAFgGABg");
	this.shape_50.setTransform(517.9,273.7,0.48,0.48);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#FFFFFF").s().p("AgoAxQgIgBAAgGIAAhSQAAgIAIAAIBRAAQAIAAAAAIIAABSQAAAGgIABg");
	this.shape_51.setTransform(527.5,268.2,0.48,0.48);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#FFFFFF").s().p("AgpAxQgGgBAAgGIAAhSQAAgIAGAAIBTAAQAGAAAAAIIAABSQAAAGgGABg");
	this.shape_52.setTransform(521.7,268.2,0.48,0.48);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#FFFFFF").s().p("AgpAxQgHgBAAgGIAAhSQAAgIAHAAIBSAAQAIAAAAAIIAABSQAAAGgIABg");
	this.shape_53.setTransform(515.9,268.2,0.48,0.48);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#FFFFFF").s().p("AgoAxQgIgBAAgGIAAhSQAAgIAIAAIBRAAQAIAAAAAIIAABSQAAAGgIABg");
	this.shape_54.setTransform(527.5,262.1,0.48,0.48);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#FFFFFF").s().p("AgpAxQgGgBAAgGIAAhSQAAgIAGAAIBTAAQAGAAAAAIIAABSQAAAGgGABg");
	this.shape_55.setTransform(521.7,262.1,0.48,0.48);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#FFFFFF").s().p("AgpAxQgHgBAAgGIAAhSQAAgIAHAAIBSAAQAIAAAAAIIAABSQAAAGgIABg");
	this.shape_56.setTransform(515.9,262.1,0.48,0.48);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#FFFFFF").s().p("AgoAxQgIgBAAgGIAAhSQAAgIAIAAIBRAAQAIAAAAAIIAABSQAAAGgIABg");
	this.shape_57.setTransform(527.5,256.1,0.48,0.48);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#FFFFFF").s().p("AgpAxQgGgBAAgGIAAhSQAAgIAGAAIBTAAQAGAAAAAIIAABSQAAAGgGABg");
	this.shape_58.setTransform(521.7,256.1,0.48,0.48);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#FFFFFF").s().p("AgpAxQgHgBAAgGIAAhSQAAgIAHAAIBSAAQAIAAAAAIIAABSQAAAGgIABg");
	this.shape_59.setTransform(515.9,256.1,0.48,0.48);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#C0CAD1").s().p("AgpAxQgHgBABgGIAAhSQgBgIAHAAIBTAAQAGAAAAAIIAABSQAAAGgGABg");
	this.shape_60.setTransform(528.2,268.2,0.48,0.48);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#C0CAD1").s().p("AgpAxQgCAAgDgCQAAgBgBgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIAAhSQAAgEACgCQADgCACAAIBTAAQAHAAAAAIIAABSQAAAGgHABg");
	this.shape_61.setTransform(522.4,268.2,0.48,0.48);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#C0CAD1").s().p("AgpAxQgCAAgDgCQAAgBgBgBQAAAAAAgBQgBAAAAgBQAAAAAAgBIAAhSQAAgIAHAAIBTAAQAHAAAAAIIAABSQAAAGgHABg");
	this.shape_62.setTransform(516.6,268.2,0.48,0.48);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#C0CAD1").s().p("AgpAxQgHgBABgGIAAhSQgBgIAHAAIBTAAQAGAAAAAIIAABSQAAAGgGABg");
	this.shape_63.setTransform(528.2,262.1,0.48,0.48);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#C0CAD1").s().p("AgpAxQgCAAgDgCQAAgBgBgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIAAhSQAAgEACgCQADgCACAAIBTAAQAHAAAAAIIAABSQAAAGgHABg");
	this.shape_64.setTransform(522.4,262.1,0.48,0.48);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#C0CAD1").s().p("AgpAxQgCAAgDgCQAAgBgBgBQAAAAAAgBQgBAAAAgBQAAAAAAgBIAAhSQAAgIAHAAIBTAAQAHAAAAAIIAABSQAAAGgHABg");
	this.shape_65.setTransform(516.6,262.1,0.48,0.48);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#C0CAD1").s().p("AgpAxQgHgBABgGIAAhSQgBgIAHAAIBTAAQAGAAAAAIIAABSQAAAGgGABg");
	this.shape_66.setTransform(528.2,256.1,0.48,0.48);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#C0CAD1").s().p("AgpAxQgCAAgDgCQAAgBgBgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIAAhSQAAgEACgCQADgCACAAIBTAAQAHAAAAAIIAABSQAAAGgHABg");
	this.shape_67.setTransform(522.4,256.1,0.48,0.48);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#C0CAD1").s().p("AgpAxQgCAAgDgCQAAgBgBgBQAAAAAAgBQgBAAAAgBQAAAAAAgBIAAhSQAAgIAHAAIBTAAQAHAAAAAIIAABSQAAAGgHABg");
	this.shape_68.setTransform(516.6,256.1,0.48,0.48);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#4B4E4E").s().p("Ar9DEQgGAAgEgFQgFgEAAgGIAAlpQAAgGAFgEQAEgFAGAAIX7AAQAGAAAFAFQAEAEAAAGIAAFpQAAAGgEAEQgFAFgGAAg");
	this.shape_69.setTransform(571.8,264.6,0.48,0.48);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#DEE7EB").s().p("Av/EjQgJAAgHgGQgFgHgBgIIAAobQABgIAFgHQAHgGAJAAIf/AAQAJAAAGAGQAGAHABAIIAAIbQgBAIgGAHQgGAGgJAAg");
	this.shape_70.setTransform(561.5,264.6,0.48,0.48);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#B9C8CF").s().p("AwAEjQgJAAgFgGQgHgHAAgIIAAobQAAgIAHgHQAFgGAJAAMAgAAAAQAJAAAHAGQAFAHAAAIIAAIbQAAAIgFAHQgHAGgJAAg");
	this.shape_71.setTransform(562.4,264.6,0.48,0.48);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#53C6D9").s().p("Ak+VOQhzgbg/hlQg+hlAbhzMAH7ghtQAahzBlg/QBlg+BzAbQBzAbA/BlQA+BlgbBzMgH7AhtQgXBihOA+QhOA9hiAAQghAAghgIg");
	this.shape_72.setTransform(507.2,169.1,0.48,0.48);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#CAD5DA").s().p("AlNWMQiMghhNh7QhMh8AhiNMAH7ghsQAhiNB6hNQB8hMCNAhQCMAhBNB7QBMB8ghCNMgH7AhsQgcB4heBLQhfBLh6AAQgpAAgogJgAB0zlQg9AxgSBMMgH6AhsQgVBaAwBPQAxBOBaAVQAZAGAaAAQBNAAA9gwQA9gwARhMMAH6ghsQAVhagwhPQgxhOhagVQgZgGgZAAQhNAAg9Avg");
	this.shape_73.setTransform(507.2,169,0.48,0.48);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#CAD5DA").s().p("Ak+VOQhzgbg/hlQg+hlAbhzMAH7ghtQAahzBlg/QBlg+BzAbQBzAbA/BlQA+BlgbBzMgH7AhtQgXBihOA+QhOA9hiAAQghAAghgIg");
	this.shape_74.setTransform(507.2,169.1,0.48,0.48);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#6E7D83").s().p("AggCgIgigHIBFk5IAiAHQAQAEAJANQAIAOgEAPIg1DuQgEAQgMAJQgJAFgKAAIgKgBg");
	this.shape_75.setTransform(571.7,134.7,0.48,0.48);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#7B898F").s().p("AAQCoIhlgXQgQgDgIgNQgJgOAEgPIA2jvQADgPAOgJQANgIAPADIBlAXQAQAEAJANQAIAOgEAPIg1DuQgEAQgNAJQgJAGgKAAIgKgCg");
	this.shape_76.setTransform(569.4,134.3,0.48,0.48);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#FFD93E").s().p("AjOJkQgWAAgQgQQgPgPAAgWIBEAAQBTAABCg1QBAg0AShRICjrVQAShPgzg/QgzhAhRAAIg0AAQAAgWAPgPQAPgQAWAAQAzAAAtAWQAuAWAfAoQAgAnAMAxQALAxgLAyIijLUQgWBlhPA/QhPBAhnAAg");
	this.shape_77.setTransform(561.9,140.8,0.48,0.48);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#FBF064").s().p("AjOJkQgWAAgQgQQgPgPAAgWQAAgWAPgQQAQgPAWAAIAPAAQBCAAAygpQAygoAPhAIChrUQAGgagGgaQgFgagRgUQgjgsg4AAQgWAAgPgPQgPgQAAgWQAAgWAPgPQAPgQAWAAQAzAAAtAWQAuAWAfAoQAgAnAMAxQALAxgLAyIijLUQgWBlhPA/QhPBAhnAAg");
	this.shape_78.setTransform(561.9,140.8,0.48,0.48);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#65777E").s().p("AgDBLQgfAAgXgVQgWgXAAgfQAAgeAWgWQAXgXAfAAIAHAAQAfAAAXAXQAWAWAAAeQAAAfgWAXQgXAVgfAAg");
	this.shape_79.setTransform(551.8,167.6,0.48,0.48);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#6D7D83").s().p("AhXATQgUAAgSgLQgRgIgKgSIExAAQgKARgRAJQgSALgUAAg");
	this.shape_80.setTransform(547.8,170.4,0.48,0.48);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#7B898F").s().p("AhXBLQgfAAgWgVQgWgXAAgfQAAgeAWgWQAWgXAfAAICvAAQAfAAAWAXQAWAWAAAeQAAAfgWAXQgWAVgfAAg");
	this.shape_81.setTransform(547.8,167.6,0.48,0.48);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#65777E").s().p("AgDBLQgfABgXgXQgWgWAAgfQAAgfAWgWQAXgWAfABIAHAAQAggBAWAWQAVAWAAAfQAAAfgVAWQgWAXgggBg");
	this.shape_82.setTransform(563.6,114,0.48,0.48);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#6D7D83").s().p("AhXATQgUAAgSgKQgRgKgKgRIExAAQgKASgRAJQgSAKgUAAg");
	this.shape_83.setTransform(559.5,116.7,0.48,0.48);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#7B898F").s().p("AhXBLQgfABgWgXQgWgWAAgfQAAgfAWgWQAWgWAfABICvAAQAfgBAWAWQAWAWAAAfQAAAfgWAWQgWAXgfgBg");
	this.shape_84.setTransform(559.5,114,0.48,0.48);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#159193").s().p("AhXCSQA2gBAmgnQAngnAAg4IAAicIAsAAIAACcQAAA4gnAnQgoAog2AAg");
	this.shape_85.setTransform(624,301.9,0.48,0.48);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#50B0B6").s().p("AiQBYQgRAAgNgMQgMgNAAgRQAAgSAMgMQANgNARAAIDGAAQAUAAAOgNQAPgPAAgUQAAgRANgNQAMgMARAAQASAAAMAMQANAMAAASQAAA3goAnQgnAng3AAg");
	this.shape_86.setTransform(619.2,304.7,0.48,0.48);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#65777E").s().p("AgDBFQgcAAgUgUQgVgVAAgcQAAgcAVgUQAUgUAcAAIAHAAQAcAAAVAUQAUAUAAAcQAAAcgUAVQgVAUgcAAg");
	this.shape_87.setTransform(612,306.9,0.48,0.48);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#6D7D83").s().p("AhPARQgTAAgQgJQgPgJgJgPIEVAAQgJAPgPAJQgQAJgTAAg");
	this.shape_88.setTransform(608.4,309.3,0.48,0.48);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#7B898F").s().p("AhPBFQgdAAgUgUQgUgVAAgcQAAgcAUgUQAUgUAdAAICfAAQAcAAAVAUQAUAUAAAcQAAAcgUAVQgVAUgcAAg");
	this.shape_89.setTransform(608.4,306.9,0.48,0.48);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#DEE7EB").s().p("Ag6FbQgYgGgNgVQgOgVAGgZICFo/QAGgYAVgNQAVgNAZAFIACABQgPAFgMALQgLAMgEAQIiFI/QgFAYAMAVQAMAUAXAHQgIACgIAAIgOgBg");
	this.shape_90.setTransform(493.4,264.6,0.48,0.48);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#DEE7EB").s().p("Ag5FbQgZgGgNgVQgNgVAFgZICFo/QAGgYAVgNQAWgNAYAFIADABQgQAFgLALQgMAMgEAQIiFI/QgFAYAMAVQAMAUAYAHQgJACgIAAIgNgBg");
	this.shape_91.setTransform(473.8,264.6,0.48,0.48);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#DEE7EB").s().p("Ag6FbQgYgGgNgVQgNgVAFgZICFo/QAGgYAVgNQAVgNAZAFIADABQgQAFgLALQgMAMgEAQIiFI/QgFAYAMAVQAMAUAXAHQgIACgIAAIgOgBg");
	this.shape_92.setTransform(483.6,264.6,0.48,0.48);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#95A9AF").s().p("AB7FbQgYgGgNgVQgOgVAGgZICGo/QAGgYAVgNQAVgNAZAFQAYAGANAVQANAVgFAZIiGI/QgFAUgRANQgQANgVAAIgOgBgAhQFbQgYgGgNgVQgNgVAFgZICFo/QAGgYAVgNQAVgNAZAFQAYAGANAVQANAVgFAZIiFI/QgFAUgRANQgQANgVAAIgOgBgAkbFbQgZgGgNgVQgNgVAFgZICGo/QAGgYAVgNQAWgNAYAFQAYAGAOAVQANAVgGAZIiGI/QgFAUgRANQgQANgVAAIgNgBg");
	this.shape_93.setTransform(484.7,264.6,0.48,0.48);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#FFFFFF").s().p("EANaAsIQgLgLAAgPIAAg6QAAgQALgLQALgLAQAAQAPAAALALQALALAAAQIAAA6QAAAPgLALQgLALgPAAQgQAAgLgLgEANaAo9QgLgLAAgQIAAlBQAAgQALgLQALgLAQAAQAPAAALALQALALAAAQIAAFBQAAAQgLALQgLALgPAAQgQAAgLgLgAwaUoQgNgYgJgbQgEgPAHgOQAIgNAOgFQAPgEAOAHQAOAIAEAOQAGATAJARQAIANgEAPQgEAPgNAIQgJAFgKAAQgWAAgLgTgAwXSkQgQgDgIgOQgIgNADgPIBGkrQAEgPANgIQANgJAPAEQAPADAIANQAJAOgEAPIhFErQgDANgLAIQgKAIgNAAIgIgBgANaDvQgLgLAAgPIAAgvQAAgPALgLQALgLAQAAQAPAAALALQALALAAAPIAAAvQAAAPgLALQgLALgPAAQgQAAgLgLgANyA9QgPgEgIgNQgIgNADgPQAQhBAvgxQAvgxBCgTQAOgFAOAIQAOAHAEAPQAEAPgHAOQgIANgPAFQguANghAiQghAjgLAtQgDANgKAIQgKAIgNAAIgJgBgAoVv9QgPgDgIgNQgJgNAEgQICEo3QAEgQANgIQANgIAPAEQAPADAIANQAJANgEAQIiEI3QgDANgKAIQgLAIgNAAIgIgBgAlY8nQgPgEgIgNQgJgNAEgPIAdh9QADgPANgJQAOgIAPAEQAPADAIANQAJAOgEAPIgdB9QgDAMgLAJQgKAIgNAAgEgC1gnrQgOgGgGgPQgGgOAGgOQAqhlBXhCQBWhCBsgNQAPgCAMAKQAMAKACAPQACAQgJAMQgKAMgPACQhYALhGA1QhHA2giBRQgEALgKAGQgJAHgLAAQgHAAgIgDg");
	this.shape_94.setTransform(506.6,221.4,0.48,0.48);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#DEE7EB").s().p("EAHEAv7QhoAAhKhJQhKhKAAhpIAA5BI6UAAQh2AAhKhcQhJhdAahzMANWg5TQAhiKBuhXQBuhYCNAAIHZAAQB7AABNBhQBNBhgcB4MgKeAs/IJvAAIAAkZQAAhoBKhKQBKhJBogBIJIAAQBoABBKBJQBKBLAABnIAAEZIDFAAQBmAABIBIQBIBIAABmIAAJkQAABfhEBDQhDBDhgAAIjUAAIAAZBQAABohKBLQhKBJhoAAgEgKngtnQhaBHgaBwMgNWA5TQgKArAMArQANArAhAgQAYAXAgAMQAgAMAjAAIbEAAQAJAAAGAGQAHAHAAAJIAAZ2QAABJAzA0QA0A0BJAAIJIAAQBJAAA0g0QAzg0AAhJIAA52QAAgJAHgHQAGgGAJAAIEKAAQBAAAAugtQAtguAAg/IAApkQAAhHgxgyQgygxhHAAIj7AAQgJAAgGgGQgHgHAAgKIAAlOQAAhIgzg1Qg0gzhJAAIpIAAQhJAAg0AzQgzA1AABIIAAFOQAAAKgHAHQgGAGgJAAIrcAAQgQAAgJgMQgKgMAEgPMAKpgtvQAJgmgGgkQgFgmgUgfQgagogogXQgogVguAAInZAAQhyAAhaBHg");
	this.shape_95.setTransform(537.7,232.4,0.48,0.48);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#AFBABD").s().p("AAxBPQgbAAgSgTIhjhiQgJgKgOAAIiFAAQgGABgEgFQgFgFAAgGQAAgGAFgFQAEgEAGAAICFAAQAaAAATATIBiBiQAKAKAOAAIDLAAQAGAAAEAFQAFAEAAAGQAAAHgFAEQgEAEgGAAg");
	this.shape_96.setTransform(561.4,244.5,0.48,0.48);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#AFBABD").s().p("Aj7BPQgGAAgEgEQgFgEAAgHQAAgGAFgEQAEgFAGAAIDLAAQAOAAAKgKIBihiQAUgTAZAAICFAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAFgGgBIiFAAQgOAAgJAKIhjBiQgTATgaAAg");
	this.shape_97.setTransform(585.6,244.5,0.48,0.48);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#AFBABD").s().p("AB3BPQgaAAgTgTIhihiQgLgKgNAAIjLAAQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAIDLAAQAaAAATATIBjBiQAJAKAOAAICFAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAg");
	this.shape_98.setTransform(585.6,284.8,0.48,0.48);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#AFBABD").s().p("Aj7BPQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAICFAAQANAAAKgKIBjhiQATgTAaAAIDLAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAIjLAAQgOAAgKAKIhiBiQgTATgaAAg");
	this.shape_99.setTransform(561.4,284.8,0.48,0.48);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#AFBABD").s().p("AB3BPQgaAAgTgTIhihiQgLgKgNAAIjLAAQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAIDLAAQAbAAASATIBjBiQAJAKAOAAICFAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAg");
	this.shape_100.setTransform(585.6,322.7,0.48,0.48);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#AFBABD").s().p("Aj7BPQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAICFAAQANAAAKgKIBjhiQASgTAbAAIDLAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAIjLAAQgOAAgKAKIhiBiQgTATgaAAg");
	this.shape_101.setTransform(561.4,322.7,0.48,0.48);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#FFFFFF").s().p("EAHEAv7QhoAAhKhKQhKhJAAhoIAA5BI6UAAQh2AAhKhdQhJhdAah0MANWg5SQAhiKBuhXQBuhYCNAAIHZAAQB7AABNBhQBNBhgcB4MgKeAs/IJvAAIAAkYQAAhpBKhJQBKhLBoABIJIAAQBogBBKBLQBJBJAABpIAAEYIDGAAQBmAABIBIQBIBIAABlIAAJkQAABfhEBEQhDBEhgAAIjVAAIAAZBQAABohJBJQhKBKhoAAg");
	this.shape_102.setTransform(537.8,232.5,0.48,0.48);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#95A9AF").s().p("Ai+OeQBjgDBHhGQBJhKAAhoIAA5AICKAAIAAZAQAABohKBKQhJBJhoAAg");
	this.shape_103.setTransform(609.2,335.2,0.48,0.48);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#95A9AF").s().p("AirIfQBagDBAhAQBDhDAAhfIAApjQAAhmhIhIQhEhEhhgEICCAAQBkAABJBIQBHBIABBmIAAJjQAABfhEBDQhDBDhfAAg");
	this.shape_104.setTransform(630.6,264.6,0.48,0.48);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#95A9AF").s().p("AmXY9MAKegs/QAch4hNhhQhLheh1gDICBAAQB8AABNBhQBNBhgcB4MgKeAs/g");
	this.shape_105.setTransform(549.1,161.9,0.48,0.48);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#95A9AF").s().p("AA1ELIAAkZQAAhohJhKQhHhHhjgDICCAAQBnAABKBKQBKBKAABoIAAEZg");
	this.shape_106.setTransform(609.2,225.7,0.48,0.48);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#AFBABD").s().p("EAHEAv7QhoAAhKhJQhKhLAAhoIAA5BI6TAAQh3AAhJhcQhKhdAbhzMANWg5TQAgiKBuhXQBuhYCOAAIHYAAQB7AABNBhQBNBhgcB4MgKeAs/IJvAAIAAkZQAAhnBKhLQBKhJBogBIJIAAQBoABBKBJQBKBKAABoIAAEZIDFAAQBmAABIBIQBIBIAABmIAAJkQAABfhEBDQhDBDhfAAIjVAAIAAZBQAABphKBKQhJBJhpAAg");
	this.shape_107.setTransform(556.5,232.4,0.48,0.48);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#677479").s().p("AgaBeIAAi7IAfAAQAJAAAGAHQAHAGAAAJIAACPQAAAJgHAGQgGAHgJAAg");
	this.shape_108.setTransform(627.8,290.4,0.48,0.48);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#7B898F").s().p("Ag0BeQgEAAgDgDQgDgEAAgEIAAilQAAgEADgDQADgEAEAAIBoAAQAFAAADAEQADADAAAEIAAClQAAAEgDAEQgDADgFAAg");
	this.shape_109.setTransform(626,290.4,0.48,0.48);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#50B0B6").s().p("AgdChQgMgMAAgRIAAkGQAAgSAMgNQAMgMARAAQARAAANAMQAMANAAASIAAEGQAAARgMAMQgNANgRAAQgRAAgMgNg");
	this.shape_110.setTransform(626.2,296.1,0.48,0.48);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#556368").s().p("AgRAKIAAgTIARgLIASALIAAATIgSALg");
	this.shape_111.setTransform(323.3,339.2,0.48,0.48);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#556368").s().p("AgRALIAAgVIARgKIASAKIAAAVIgSAKg");
	this.shape_112.setTransform(323.3,366.9,0.48,0.48);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#556368").s().p("AgRAKIAAgTIARgLIASALIAAATIgSALg");
	this.shape_113.setTransform(350.8,339.2,0.48,0.48);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#556368").s().p("AgRALIAAgVIARgKIASAKIAAAVIgSAKg");
	this.shape_114.setTransform(350.8,366.9,0.48,0.48);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#5F6A6E").s().p("AkzFRQgMAAgJgIQgJgJAAgMIAApnQAAgMAJgJQAJgIAMAAIJnAAQAMAAAJAIQAJAJgBAMIAAJnQABAMgJAJQgJAIgMAAgAk9k+QgFAFAAAGIAAJnQAAAGAFAFQADAEAHAAIJnAAQAGAAAEgEQAFgFAAgGIAApnQAAgGgFgFQgEgEgGAAIpnAAQgHAAgDAEg");
	this.shape_115.setTransform(337,353.1,0.48,0.48);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#637379").s().p("AigFAQhCAAgugvQgwguAAhDIAAk/QAAhDAwguQAugvBCAAIFBAAQBCAAAuAvQAwAuAABDIAAE/QAABDgwAuQguAvhCAAg");
	this.shape_116.setTransform(337,353.1,0.48,0.48);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#7B898F").s().p("AlCFRQgGAAgEgEQgFgEAAgGIAAqFQAAgGAFgEQAEgEAGAAIKFAAQAGAAAEAEQAEAEAAAGIAAKFQAAAGgEAEQgEAEgGAAg");
	this.shape_117.setTransform(337,353.1,0.48,0.48);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#5F6A6E").s().p("AlCFRQgGAAgEgEQgEgEAAgGIAAqFQAAgGAEgEQAEgEAGAAIKFAAQAGAAAEAEQAEAEAAAGIAAKFQAAAGgEAEQgEAEgGAAg");
	this.shape_118.setTransform(338.2,353.1,0.48,0.48);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#FFE4BE").s().p("AgIDRQgEAAgDgCQgCgDAAgEIAAmPQAAgEACgDQADgDAEABIARAAQAEgBADADQACADAAAEIAAGPQAAAEgCADQgDACgEAAg");
	this.shape_119.setTransform(347.1,337.1,0.48,0.48);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#FEC050").s().p("AgRDnQgIAAgFgGQgFgGAAgGIAAmpQAAgHAFgFQAFgGAIAAIAjAAQAIAAAFAGQAFAFAAAHIAAGpQAAAGgFAGQgFAGgIAAg");
	this.shape_120.setTransform(347.6,337.1,0.48,0.48);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#D6853A").s().p("AgJhxQATAKAAAWIAACjQAAALgFAJQgFAIgJAEg");
	this.shape_121.setTransform(348.9,326.2,0.48,0.48);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#EE9936").s().p("AgRB2QgHAAgFgFQgGgGAAgHIAAjIQAAgGAGgGQAFgFAHAAIAjAAQAHAAAGAFQAFAGAAAGIAADIQAAAHgFAGQgGAFgHAAg");
	this.shape_122.setTransform(347.6,326.2,0.48,0.48);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f("#FFE4BE").s().p("AgIDRQgEAAgCgCQgDgDAAgEIAAmPQAAgEADgDQACgDAEABIARAAQAEgBACADQADADAAAEIAAGPQAAAEgDADQgCACgEAAg");
	this.shape_123.setTransform(340.4,337.1,0.48,0.48);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#FEC050").s().p("AgRDnQgHAAgFgGQgGgGAAgGIAAmpQAAgHAGgFQAFgGAHAAIAjAAQAHAAAGAGQAFAFAAAHIAAGpQAAAGgFAGQgGAGgHAAg");
	this.shape_124.setTransform(340.9,337.1,0.48,0.48);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f("#D6853A").s().p("AgJhxQATAKAAAWIAACjQAAAXgTAJg");
	this.shape_125.setTransform(342.2,326.2,0.48,0.48);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#EE9936").s().p("AgRB2QgHAAgFgFQgGgGAAgHIAAjIQAAgGAGgGQAFgFAHAAIAjAAQAHAAAGAFQAFAGAAAGIAADIQAAAHgFAGQgGAFgHAAg");
	this.shape_126.setTransform(340.9,326.2,0.48,0.48);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#FFE4BE").s().p("AgIDRQgDAAgDgCQgDgDAAgEIAAmPQAAgEADgDQADgDADABIARAAQAEgBACADQADADAAAEIAAGPQAAAEgDADQgCACgEAAg");
	this.shape_127.setTransform(333.7,337.1,0.48,0.48);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#FEC050").s().p("AgRDnQgHAAgFgGQgGgGAAgGIAAmpQAAgHAGgFQAFgGAHAAIAjAAQAHAAAGAGQAFAFAAAHIAAGpQAAAGgFAGQgGAGgHAAg");
	this.shape_128.setTransform(334.3,337.1,0.48,0.48);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f("#D6853A").s().p("AgJhxQATAKAAAWIAACjQAAAXgTAJg");
	this.shape_129.setTransform(335.5,326.2,0.48,0.48);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#EE9936").s().p("AgRB2QgHAAgFgFQgGgGAAgHIAAjIQAAgGAGgGQAFgFAHAAIAjAAQAHAAAGAFQAFAGAAAGIAADIQAAAHgFAGQgGAFgHAAg");
	this.shape_130.setTransform(334.3,326.2,0.48,0.48);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f("#FFE4BE").s().p("AgIDRQgDAAgDgCQgDgDAAgEIAAmPQAAgEADgDQADgDADABIARAAQAEgBACADQADADAAAEIAAGPQAAAEgDADQgCACgEAAg");
	this.shape_131.setTransform(327,337.1,0.48,0.48);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#FEC050").s().p("AgRDnQgHAAgFgGQgGgGAAgGIAAmpQAAgHAGgFQAFgGAHAAIAjAAQAHAAAGAGQAFAFAAAHIAAGpQAAAGgFAGQgGAGgHAAg");
	this.shape_132.setTransform(327.6,337.1,0.48,0.48);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f("#D6853A").s().p("AgJhxQATAKAAAWIAACjQAAAXgTAJg");
	this.shape_133.setTransform(328.8,326.2,0.48,0.48);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f("#EE9936").s().p("AgRB2QgHAAgFgFQgGgGAAgHIAAjIQAAgGAGgGQAFgFAHAAIAjAAQAHAAAGAFQAFAGAAAGIAADIQAAAHgFAGQgGAFgHAAg");
	this.shape_134.setTransform(327.6,326.2,0.48,0.48);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f("#D6853A").s().p("AhBAkQgIAAgFgFQgFgGAAgHIAAgjQAAgHAFgGQAFgFAIAAICDAAQAIAAAFAFQAFAGAAAHIAAAjQAAAHgFAGQgFAFgIAAg");
	this.shape_135.setTransform(349.9,322.3,0.48,0.48);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f("#D6853A").s().p("AhBAkQgIAAgEgFQgGgGAAgHIAAgjQAAgHAGgGQAEgFAIAAICDAAQAHAAAGAFQAFAGAAAHIAAAjQAAAHgFAGQgGAFgHAAg");
	this.shape_136.setTransform(343.3,322.3,0.48,0.48);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f("#D6853A").s().p("AhBAkQgHAAgGgFQgFgGAAgHIAAgjQAAgHAFgGQAGgFAHAAICDAAQAHAAAGAFQAFAGAAAHIAAAjQAAAHgFAGQgGAFgHAAg");
	this.shape_137.setTransform(336.6,322.3,0.48,0.48);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f("#D6853A").s().p("AhBAkQgIAAgEgFQgGgGAAgHIAAgjQAAgHAGgGQAEgFAIAAICDAAQAHAAAGAFQAFAGAAAHIAAAjQAAAHgFAGQgGAFgHAAg");
	this.shape_138.setTransform(329.9,322.3,0.48,0.48);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAAHgHAAg");
	this.shape_139.setTransform(337.6,369.3,0.48,0.48);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQACACAAADIAAANQAAAHgHAAg");
	this.shape_140.setTransform(337.6,367.1,0.48,0.48);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQACACAAADIAAANQAAAHgHAAg");
	this.shape_141.setTransform(337.6,364.9,0.48,0.48);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQACACAAADIAAANQAAAHgHAAg");
	this.shape_142.setTransform(337.6,362.8,0.48,0.48);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQACACAAADIAAANQAAAHgHAAg");
	this.shape_143.setTransform(337.6,360.6,0.48,0.48);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQACACAAADIAAANQAAAHgHAAg");
	this.shape_144.setTransform(337.6,358.5,0.48,0.48);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQACACAAADIAAANQAAAHgHAAg");
	this.shape_145.setTransform(337.6,356.3,0.48,0.48);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQAAABABAAQAAABAAAAQAAABABABQAAAAAAABIAAANQAAAHgHAAg");
	this.shape_146.setTransform(337.6,354.1,0.48,0.48);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQACAAADACQAAABABAAQAAABAAAAQAAABABABQAAAAAAABIAAANQAAAHgHAAg");
	this.shape_147.setTransform(337.6,352,0.48,0.48);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAAHgHAAg");
	this.shape_148.setTransform(337.6,349.8,0.48,0.48);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAAHgHAAg");
	this.shape_149.setTransform(337.6,347.7,0.48,0.48);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAAHgHAAg");
	this.shape_150.setTransform(337.6,345.5,0.48,0.48);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAAHgHAAg");
	this.shape_151.setTransform(337.6,343.3,0.48,0.48);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAABAAAAQgBABAAABQAAAAAAABQgBAAAAABQgDACgCAAg");
	this.shape_152.setTransform(337.6,341.2,0.48,0.48);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAABAAAAQgBABAAABQAAAAAAABQgBAAAAABQgDACgCAAg");
	this.shape_153.setTransform(337.6,339,0.48,0.48);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f("#C1C9CF").s().p("AlqAOQgHAAAAgHIAAgNQAAgHAHAAILVAAQAHAAAAAHIAAANQAAACgCADQgDACgCAAg");
	this.shape_154.setTransform(337.6,336.9,0.48,0.48);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQAAgDADgCQACgCACAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_155.setTransform(337.6,360.6,0.48,0.48);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQAAgDADgCQACgCACAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_156.setTransform(337.6,364.9,0.48,0.48);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_157.setTransform(337.6,369.3,0.48,0.48);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQAAgDADgCQACgCACAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_158.setTransform(337.6,356.3,0.48,0.48);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_159.setTransform(337.6,352,0.48,0.48);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_160.setTransform(337.6,347.7,0.48,0.48);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_161.setTransform(337.6,343.3,0.48,0.48);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_162.setTransform(337.6,339,0.48,0.48);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_163.setTransform(337.6,336.9,0.48,0.48);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_164.setTransform(337.6,341.2,0.48,0.48);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_165.setTransform(337.6,345.5,0.48,0.48);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_166.setTransform(337.6,349.8,0.48,0.48);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQABgHAGAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_167.setTransform(337.6,354.1,0.48,0.48);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQAAgDADgCQACgCACAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_168.setTransform(337.6,358.5,0.48,0.48);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQAAgDADgCQACgCACAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_169.setTransform(337.6,362.8,0.48,0.48);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.f("#98A3A9").s().p("AmRAOQgGAAgBgHIAAgNQAAgDADgCQACgCACAAIMiAAQAIAAgBAHIAAANQABAHgIAAg");
	this.shape_170.setTransform(337.6,367.1,0.48,0.48);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.f("#FFD93E").s().p("AEQD5QhFAAgwgxQgxgxAAhEQAAgfgVgVQgWgVgegBIgsAAQiXAAiMg5QiNg7hqhsIAiggQBjBkCDA3QCDA4CPAAIAsAAQAyAAAjAjQAjAiAAAyQAAAxAjAjQAjAjAxAAIEWAAIAAAvg");
	this.shape_171.setTransform(266,172,0.48,0.48);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.f("#FBF064").s().p("AEQEJQhFAAgwgxQgxgxAAhEQAAgegVgWQgWgVgeAAIgsAAQiXAAiMg6QiNg7hqhrIBDhCQBdBeB7A0QB7AzCEAAIAsAAQBFAAAxAxQAwAwAABFQAAAeAWAVQAVAVAeAAIEWAAIAABeg");
	this.shape_172.setTransform(266,171.3,0.48,0.48);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.f("#D8D8D8").s().p("AAhBEQgYgZgSgXIgzg9QgFgGABgIQABgHAGgGQAGgFAHABQAIABAFAGIAyA+QAVAYAUAUQAGAGgBAIQAAAIgFAFQgGAFgHAAQgIAAgGgFg");
	this.shape_173.setTransform(239,157.5,0.48,0.48);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.f("#EF6B37").s().p("AiMBjQhCAAgvgvQgvgvAAhBIAAgmQACA/AtAsQAvAuBCAAIG1AAIAEAsg");
	this.shape_174.setTransform(407.9,148.7,0.48,0.48);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.f("#F47939").s().p("AiMBpQhCAAgvgvQgvguAAhBIAAgzIBeAAIAAAzQAAAbATATQATATAcgBIGvAAQAHArADAzg");
	this.shape_175.setTransform(407.9,148.4,0.48,0.48);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.f("#EF6B37").s().p("Ai3AYIAAguIFdAAIARAug");
	this.shape_176.setTransform(409.9,134.6,0.48,0.48);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.f("#F47939").s().p("Ai3AvIAAhdIFKAAQAWA0AOApg");
	this.shape_177.setTransform(409.9,133.5,0.48,0.48);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.f("#D8D8D8").s().p("AgOATQgHAAgFgGQgGgFAAgIQAAgHAGgFQAFgGAHAAIAcAAQAIAAAGAGQAFAFAAAHQAAAIgFAFQgGAGgIAAg");
	this.shape_178.setTransform(400.5,133.5,0.48,0.48);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.f("#D8D8D8").s().p("AArB0QgFgFgBgIIAAhdQABgmgcgcQgbgbgmAAQgIAAgGgFQgFgGAAgIQAAgIAFgFQAGgFAIgBQA2AAAmAnQAmAnAAA1IAABdQAAAIgFAFQgGAFgIAAQgHAAgGgFg");
	this.shape_179.setTransform(393,138.4,0.48,0.48);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.f("#FCB85F").s().p("Ag/AfQgGAAAAgGIAAgxQAAgGAGAAIB/AAQABAAAAAAQABABAAAAQABAAAAAAQABABAAAAQAAABABAAQAAABAAAAQABABAAAAQAAABAAAAIAAAxQAAAGgGAAg");
	this.shape_180.setTransform(331.1,97.8,0.48,0.48);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.f("#B6C1C4").s().p("AhHAHQgOAAgEgNIC0AAQgFANgNAAg");
	this.shape_181.setTransform(346.4,99.6,0.48,0.48);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.f("#E4E9EB").s().p("AhHATQgJAAgFgGQgGgFABgIQgBgHAGgFQAFgGAJAAICQAAQAHAAAGAGQAFAFABAHQgBAIgFAFQgGAGgHAAg");
	this.shape_182.setTransform(346.4,99,0.48,0.48);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.f("#E76838").s().p("AAABbQgmAAgagbQgbgaABgmQgBgkAbgbQAagbAmABIAAAAQAngBAaAbQAbAbgBAkQABAmgbAaQgaAbgnAAg");
	this.shape_183.setTransform(342.7,99.1,0.48,0.48);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.f("#F37036").s().p("AidAdQgcgBgXgQQgXgOgKgZIHjAAQgLAZgWAOQgXAQgdABg");
	this.shape_184.setTransform(335.1,102,0.48,0.48);

	this.shape_185 = new cjs.Shape();
	this.shape_185.graphics.f("#FCD4C4").s().p("AgVA4QgHAAgGgFQgFgFgBgHIAAgJQAAgcAPgWQAQgXAZgKQAHgDAHADQAHADADAHQADAHgDAIQgDAHgHADQgQAGgJAMQgIAOAAAQIAAAFQABAIgFAGQgFAGgHABg");
	this.shape_185.setTransform(325.2,97.6,0.48,0.48);

	this.shape_186 = new cjs.Shape();
	this.shape_186.graphics.f("#F47939").s().p("AjLBbQgSAAgOgNQgNgOAAgSIAAhaQAAgTANgOQAOgNASABIGWAAQATgBANANQANAOAAATIAABaQAAASgNAOQgNANgTAAg");
	this.shape_186.setTransform(335.1,99.1,0.48,0.48);

	this.shape_187 = new cjs.Shape();
	this.shape_187.graphics.f("#FCB85F").s().p("Ag/AfQgGAAAAgGIAAgxQAAgGAGAAIB/AAQABAAAAAAQABAAAAABQABAAAAAAQABABAAAAQAAABABAAQAAABAAAAQABABAAAAQAAABAAAAIAAAxQAAAGgGAAg");
	this.shape_187.setTransform(331.1,110.1,0.48,0.48);

	this.shape_188 = new cjs.Shape();
	this.shape_188.graphics.f("#B6C1C4").s().p("AhHAHQgOAAgEgNIC0AAQgFANgNAAg");
	this.shape_188.setTransform(346.4,111.9,0.48,0.48);

	this.shape_189 = new cjs.Shape();
	this.shape_189.graphics.f("#E4E9EB").s().p("AhHATQgJAAgFgGQgGgFABgIQgBgHAGgFQAFgGAJAAICQAAQAHAAAGAGQAFAFABAHQgBAIgFAFQgGAGgHAAg");
	this.shape_189.setTransform(346.4,111.3,0.48,0.48);

	this.shape_190 = new cjs.Shape();
	this.shape_190.graphics.f("#E76838").s().p("AAABaQgmAAgagaQgbgaABgmQgBgkAbgbQAagbAmAAIAAAAQAnAAAaAbQAbAbgBAkQABAmgbAaQgaAagnAAg");
	this.shape_190.setTransform(342.7,111.3,0.48,0.48);

	this.shape_191 = new cjs.Shape();
	this.shape_191.graphics.f("#F37036").s().p("AidAcQgcAAgXgPQgXgPgKgaIHjAAQgLAagWAPQgXAPgdAAg");
	this.shape_191.setTransform(335.1,114.3,0.48,0.48);

	this.shape_192 = new cjs.Shape();
	this.shape_192.graphics.f("#FCD4C4").s().p("AgVA4QgHAAgGgFQgFgFgBgHIAAgJQAAgcAPgWQAQgXAZgKQAHgDAHADQAHADADAHQADAHgDAIQgDAHgHADQgQAGgJAMQgIAOAAAQIAAAFQABAIgFAGQgFAGgHABg");
	this.shape_192.setTransform(325.2,109.9,0.48,0.48);

	this.shape_193 = new cjs.Shape();
	this.shape_193.graphics.f("#F47939").s().p("AjLBaQgSAAgOgNQgNgMAAgUIAAhaQAAgSANgNQAOgOASAAIGWAAQATAAANAOQANANAAASIAABaQAAATgNANQgNANgTAAg");
	this.shape_193.setTransform(335.1,111.3,0.48,0.48);

	this.shape_194 = new cjs.Shape();
	this.shape_194.graphics.f("#FCB85F").s().p("Ag/AfQgGAAAAgGIAAgxQAAgGAGAAIB/AAQABAAAAAAQABABAAAAQABAAAAAAQABABAAAAQAAABABAAQAAABAAAAQABABAAAAQAAABAAAAIAAAxQAAAGgGAAg");
	this.shape_194.setTransform(331.1,122.4,0.48,0.48);

	this.shape_195 = new cjs.Shape();
	this.shape_195.graphics.f("#B6C1C4").s().p("AhHAHQgOAAgEgNIC0AAQgFANgNAAg");
	this.shape_195.setTransform(346.4,124.2,0.48,0.48);

	this.shape_196 = new cjs.Shape();
	this.shape_196.graphics.f("#E4E9EB").s().p("AhHATQgJAAgFgGQgGgFABgIQgBgHAGgFQAFgGAJAAICQAAQAHAAAGAGQAFAFABAHQgBAIgFAFQgGAGgHAAg");
	this.shape_196.setTransform(346.4,123.6,0.48,0.48);

	this.shape_197 = new cjs.Shape();
	this.shape_197.graphics.f("#E76838").s().p("AAABbQgmgBgagaQgbgbABglQgBgkAbgbQAagbAmABIAAAAQAngBAaAbQAbAbgBAkQABAlgbAbQgaAagnABg");
	this.shape_197.setTransform(342.7,123.6,0.48,0.48);

	this.shape_198 = new cjs.Shape();
	this.shape_198.graphics.f("#F37036").s().p("AidAdQgcgBgXgQQgXgOgKgZIHjAAQgLAZgWAOQgXAQgdABg");
	this.shape_198.setTransform(335.1,126.6,0.48,0.48);

	this.shape_199 = new cjs.Shape();
	this.shape_199.graphics.f("#FCD4C4").s().p("AgVA4QgHAAgGgFQgFgFgBgHIAAgJQAAgcAPgWQAQgXAZgKQAHgDAHADQAHADADAHQADAHgDAIQgDAHgHADQgQAGgJAMQgIAOAAAQIAAAFQABAIgFAGQgFAGgHABg");
	this.shape_199.setTransform(325.2,122.2,0.48,0.48);

	this.shape_200 = new cjs.Shape();
	this.shape_200.graphics.f("#F47939").s().p("AjLBbQgSgBgOgNQgNgNAAgSIAAhaQAAgTANgOQAOgNASABIGWAAQATgBANANQANAOAAATIAABaQAAASgNANQgNANgTABg");
	this.shape_200.setTransform(335.1,123.6,0.48,0.48);

	this.shape_201 = new cjs.Shape();
	this.shape_201.graphics.f("#BAC5C9").s().p("Ag7ANQgBAAAAAAQAAAAAAAAQgBgBAAAAQAAAAAAgBIAAgVQAAgBAAAAQAAAAABgBQAAAAAAAAQAAAAABAAIB3AAQAAAAABAAQAAAAAAAAQAAABABAAQAAAAAAABIAAAVQAAABAAAAQgBAAAAABQAAAAAAAAQgBAAAAAAg");
	this.shape_201.setTransform(399.4,210.9,0.48,0.48);

	this.shape_202 = new cjs.Shape();
	this.shape_202.graphics.f("#BAC5C9").s().p("AhOANQAAAAAAAAQgBAAAAgBQAAAAAAAAQgBgBAAAAIAAgVQAAAAABgBQAAAAAAAAQAAgBABAAQAAAAAAAAICdAAQAAAAAAAAQABAAAAABQAAAAAAAAQABABAAAAIAAAVQAAAAgBABQAAAAAAAAQAAABgBAAQAAAAAAAAg");
	this.shape_202.setTransform(400.3,209.1,0.48,0.48);

	this.shape_203 = new cjs.Shape();
	this.shape_203.graphics.f("#BAC5C9").s().p("AhOANQAAAAAAAAQgBAAAAgBQAAAAAAAAQgBgBAAAAIAAgVQAAAAABgBQAAAAAAgBQAAAAABAAQAAAAAAAAICdAAQAAAAAAAAQABAAAAAAQAAABAAAAQABABAAAAIAAAVQAAAAgBABQAAAAAAAAQAAABgBAAQAAAAAAAAg");
	this.shape_203.setTransform(400.3,207.2,0.48,0.48);

	this.shape_204 = new cjs.Shape();
	this.shape_204.graphics.f("#BAC5C9").s().p("AhOANQAAAAAAAAQgBAAAAAAQAAgBAAAAQgBAAAAAAIAAgWQAAAAABgBQAAAAAAAAQAAgBABAAQAAAAAAAAICdAAQAAAAAAAAQABAAAAABQAAAAAAAAQABABAAAAIAAAWQAAAAgBAAQAAAAAAABQAAAAgBAAQAAAAAAAAg");
	this.shape_204.setTransform(400.3,203.5,0.48,0.48);

	this.shape_205 = new cjs.Shape();
	this.shape_205.graphics.f("#BAC5C9").s().p("AhiAhQgBAAAAAAQgBAAAAAAQgBgBAAAAQAAgBAAgBIAAg7QAAgBAAgBQAAAAABgBQAAAAABAAQAAAAABAAIDFAAQABAAAAAAQABAAAAAAQABABAAAAQAAABAAABIAAA7QAAABAAABQAAAAgBABQAAAAgBAAQAAAAgBAAg");
	this.shape_205.setTransform(401.3,200.8,0.48,0.48);

	this.shape_206 = new cjs.Shape();
	this.shape_206.graphics.f("#686C6E").s().p("AiUDrIAAmjQAAgVAPgOQAOgPAVAAID3AAIAAF3QAAAngcAbQgbAcgnAAg");
	this.shape_206.setTransform(401,207.1,0.48,0.48);

	this.shape_207 = new cjs.Shape();
	this.shape_207.graphics.f("#5B6163").s().p("AihEVQgKABgIgIQgHgGAAgLIAAn5QAAgKAHgIQAIgGAKAAIFDAAQAKAAAIAGQAHAIAAAKIAAH5QAAALgHAGQgIAIgKgBg");
	this.shape_207.setTransform(402.8,209.2,0.48,0.48);

	this.shape_208 = new cjs.Shape();
	this.shape_208.graphics.f("#3E4345").s().p("AihEVQgLABgHgIQgHgGAAgLIAAn5QAAgKAHgIQAHgGALAAIFEAAQAKAAAHAGQAHAIAAAKIAAH5QAAALgHAGQgHAIgKgBg");
	this.shape_208.setTransform(404.6,209.2,0.48,0.48);

	this.shape_209 = new cjs.Shape();
	this.shape_209.graphics.f("#ACB8BB").s().p("AhdAcQgMAAgIgIQgJgIABgMQgBgKAJgJQAIgIAMAAIC8AAQALAAAIAIQAJAJgBAKQABAMgJAIQgIAIgLAAg");
	this.shape_209.setTransform(411.1,218,0.48,0.48);

	this.shape_210 = new cjs.Shape();
	this.shape_210.graphics.f("#ACB8BB").s().p("AhdAcQgMAAgIgIQgJgIABgMQgBgKAJgJQAIgIAMAAIC8AAQALAAAIAIQAJAJgBAKQABAMgJAIQgIAIgLAAg");
	this.shape_210.setTransform(411.1,212.1,0.48,0.48);

	this.shape_211 = new cjs.Shape();
	this.shape_211.graphics.f("#ACB8BB").s().p("AhdAcQgMAAgIgIQgJgIABgMQgBgKAJgJQAIgIAMAAIC8AAQALAAAIAIQAJAJgBAKQABAMgJAIQgIAIgLAAg");
	this.shape_211.setTransform(411.1,206.2,0.48,0.48);

	this.shape_212 = new cjs.Shape();
	this.shape_212.graphics.f("#ACB8BB").s().p("AhdAcQgMAAgIgIQgJgJABgLQgBgLAJgIQAIgIAMAAIC8AAQALAAAIAIQAJAIgBALQABALgJAJQgIAIgLAAg");
	this.shape_212.setTransform(411.1,200.4,0.48,0.48);

	this.shape_213 = new cjs.Shape();
	this.shape_213.graphics.f("#D4DFE2").s().p("AhdAcQgMAAgIgIQgJgIAAgMQAAgKAJgJQAIgIAMAAIC7AAQAMAAAIAIQAJAJAAAKQAAAMgJAIQgIAIgMAAg");
	this.shape_213.setTransform(414.2,218,0.48,0.48);

	this.shape_214 = new cjs.Shape();
	this.shape_214.graphics.f("#D4DFE2").s().p("AheAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIC8AAQAMAAAIAIQAIAJAAAKQAAAMgIAIQgIAIgMAAg");
	this.shape_214.setTransform(395,218,0.48,0.48);

	this.shape_215 = new cjs.Shape();
	this.shape_215.graphics.f("#D4DFE2").s().p("AhdAcQgMAAgIgIQgJgIAAgMQAAgKAJgJQAIgIAMAAIC7AAQAMAAAIAIQAJAJAAAKQAAAMgJAIQgIAIgMAAg");
	this.shape_215.setTransform(414.2,212.1,0.48,0.48);

	this.shape_216 = new cjs.Shape();
	this.shape_216.graphics.f("#D4DFE2").s().p("AheAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIC8AAQAMAAAIAIQAIAJAAAKQAAAMgIAIQgIAIgMAAg");
	this.shape_216.setTransform(395,212.1,0.48,0.48);

	this.shape_217 = new cjs.Shape();
	this.shape_217.graphics.f("#D4DFE2").s().p("AhdAcQgMAAgIgIQgJgIAAgMQAAgKAJgJQAIgIAMAAIC7AAQAMAAAIAIQAJAJAAAKQAAAMgJAIQgIAIgMAAg");
	this.shape_217.setTransform(414.2,206.2,0.48,0.48);

	this.shape_218 = new cjs.Shape();
	this.shape_218.graphics.f("#D4DFE2").s().p("AheAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIC8AAQAMAAAIAIQAIAJAAAKQAAAMgIAIQgIAIgMAAg");
	this.shape_218.setTransform(395,206.2,0.48,0.48);

	this.shape_219 = new cjs.Shape();
	this.shape_219.graphics.f("#D4DFE2").s().p("AhdAcQgMAAgIgIQgJgJAAgLQAAgLAJgIQAIgIAMAAIC7AAQAMAAAIAIQAJAIAAALQAAALgJAJQgIAIgMAAg");
	this.shape_219.setTransform(414.2,200.4,0.48,0.48);

	this.shape_220 = new cjs.Shape();
	this.shape_220.graphics.f("#D4DFE2").s().p("AheAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIC8AAQAMAAAIAIQAIAIAAALQAAALgIAJQgIAIgMAAg");
	this.shape_220.setTransform(395,200.4,0.48,0.48);

	this.shape_221 = new cjs.Shape();
	this.shape_221.graphics.f("#00B4D1").s().p("AgXAvIAAhdIAjAAQAFAAAEADQADAEAAAFIAABFQAAAFgDAEQgEADgFAAg");
	this.shape_221.setTransform(394.8,243.6,0.48,0.48);

	this.shape_222 = new cjs.Shape();
	this.shape_222.graphics.f("#53C6D9").s().p("Ag3AvQAAAAgBAAQAAAAgBAAQgBgBAAAAQgBAAAAgBQgBAAAAgBQAAAAgBAAQAAgBAAgBQAAAAAAgBIAAhRQAAgGAGAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_222.setTransform(393,243.6,0.48,0.48);

	this.shape_223 = new cjs.Shape();
	this.shape_223.graphics.f("#00B4D1").s().p("AgXAvIAAhdIAjAAQAFAAAEADQADAEAAAFIAABFQAAAFgDAEQgEADgFAAg");
	this.shape_223.setTransform(394.8,232,0.48,0.48);

	this.shape_224 = new cjs.Shape();
	this.shape_224.graphics.f("#53C6D9").s().p("Ag3AvQgGAAAAgGIAAhRQAAgBAAAAQAAgBAAAAQABgBAAAAQAAgBABAAQAAgBABAAQAAgBABAAQABAAAAAAQABAAAAAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_224.setTransform(393,232,0.48,0.48);

	this.shape_225 = new cjs.Shape();
	this.shape_225.graphics.f("#00A1B7").s().p("AgMCTQgFAAAAgFIAAkbQAAgFAFAAIAYAAQAGAAAAAFIAAEbQAAAFgGAAg");
	this.shape_225.setTransform(394.5,238.1,0.48,0.48);

	this.shape_226 = new cjs.Shape();
	this.shape_226.graphics.f("#00B4D1").s().p("AgnCTQgEAAgDgCQgDgDAAgEIAAkSQAAgFADgCQADgDAEAAIBPAAQAEAAADADQADACAAAFIAAESQAAAEgDADQgDACgEAAg");
	this.shape_226.setTransform(393,238.1,0.48,0.48);

	this.shape_227 = new cjs.Shape();
	this.shape_227.graphics.f("#E4E9EB").s().p("AgMDdQgQAAgLgLQgMgMAAgQIAAlrQAAgQAMgMQALgMAQAAIAwAAQAGAAAFAGQAFAEAAAHQAAAHgFAEQgFAFgGABIgwAAQgGgBAAAHIAAFrQAAAHAGAAIAwAAQAGAAAFAEQAFAFAAAHQAAAHgFAFQgFAEgGAAg");
	this.shape_227.setTransform(394.7,237.8,0.48,0.48);

	this.shape_228 = new cjs.Shape();
	this.shape_228.graphics.f("#00B4D1").s().p("AgYAvIAAhdIAkAAQAGAAADADQAEAEAAAFIAABFQAAAFgEAEQgDADgGAAg");
	this.shape_228.setTransform(416.2,243.6,0.48,0.48);

	this.shape_229 = new cjs.Shape();
	this.shape_229.graphics.f("#53C6D9").s().p("Ag3AvQgGAAAAgGIAAhRQAAgGAGAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_229.setTransform(414.4,243.6,0.48,0.48);

	this.shape_230 = new cjs.Shape();
	this.shape_230.graphics.f("#00B4D1").s().p("AgYAvIAAhdIAkAAQAGAAADADQAEAEAAAFIAABFQAAAFgEAEQgDADgGAAg");
	this.shape_230.setTransform(416.2,232,0.48,0.48);

	this.shape_231 = new cjs.Shape();
	this.shape_231.graphics.f("#53C6D9").s().p("Ag3AvQgGAAAAgGIAAhRQAAgGAGAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_231.setTransform(414.4,232,0.48,0.48);

	this.shape_232 = new cjs.Shape();
	this.shape_232.graphics.f("#00A1B7").s().p("AgLCTQgHAAAAgFIAAkbQAAgFAHAAIAYAAQAFAAAAAFIAAEbQAAAFgFAAg");
	this.shape_232.setTransform(416,238.1,0.48,0.48);

	this.shape_233 = new cjs.Shape();
	this.shape_233.graphics.f("#00B4D1").s().p("AgnCTQgEAAgDgCQgDgDAAgEIAAkSQAAgFADgCQADgDAEAAIBPAAQAEAAADADQADACAAAFIAAESQAAAEgDADQgDACgEAAg");
	this.shape_233.setTransform(414.4,238.1,0.48,0.48);

	this.shape_234 = new cjs.Shape();
	this.shape_234.graphics.f("#E4E9EB").s().p("AgMDdQgQAAgLgLQgLgMAAgQIAAlrQAAgQALgMQALgMAQAAIAvAAQAHAAAFAGQAFAEgBAHQABAHgFAEQgFAFgHABIgvAAQgGgBAAAHIAAFrQAAAHAGAAIAvAAQAIAAAEAEQAFAFgBAHQABAHgFAFQgFAEgHAAg");
	this.shape_234.setTransform(416.1,237.8,0.48,0.48);

	this.shape_235 = new cjs.Shape();
	this.shape_235.graphics.f("#00B4D1").s().p("AgXAvIAAhdIAjAAQAFAAAEADQADAEAAAFIAABFQAAAFgDAEQgEADgFAAg");
	this.shape_235.setTransform(409.1,243.6,0.48,0.48);

	this.shape_236 = new cjs.Shape();
	this.shape_236.graphics.f("#53C6D9").s().p("Ag3AvQAAAAgBAAQAAAAgBAAQAAgBgBAAQgBAAAAgBQgBAAAAgBQAAAAgBAAQAAgBAAgBQAAAAAAgBIAAhRQAAgGAGAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_236.setTransform(407.3,243.6,0.48,0.48);

	this.shape_237 = new cjs.Shape();
	this.shape_237.graphics.f("#00B4D1").s().p("AgXAvIAAhdIAjAAQAFAAAEADQADAEAAAFIAABFQAAAFgDAEQgEADgFAAg");
	this.shape_237.setTransform(409.1,232,0.48,0.48);

	this.shape_238 = new cjs.Shape();
	this.shape_238.graphics.f("#53C6D9").s().p("Ag3AvQgGAAAAgGIAAhRQAAgBAAAAQAAgBAAAAQABgBAAAAQAAgBABAAQAAgBABAAQABgBAAAAQABAAAAAAQABAAAAAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_238.setTransform(407.3,232,0.48,0.48);

	this.shape_239 = new cjs.Shape();
	this.shape_239.graphics.f("#00A1B7").s().p("AgMCTQgFAAAAgFIAAkbQAAgFAFAAIAYAAQAGAAAAAFIAAEbQAAAFgGAAg");
	this.shape_239.setTransform(408.8,238.1,0.48,0.48);

	this.shape_240 = new cjs.Shape();
	this.shape_240.graphics.f("#00B4D1").s().p("AgnCTQgEAAgDgCQgDgDAAgEIAAkSQAAgFADgCQADgDAEAAIBPAAQAEAAADADQADACAAAFIAAESQAAAEgDADQgDACgEAAg");
	this.shape_240.setTransform(407.3,238.1,0.48,0.48);

	this.shape_241 = new cjs.Shape();
	this.shape_241.graphics.f("#E4E9EB").s().p("AgLDdQgRAAgLgLQgMgMAAgQIAAlrQAAgQAMgMQALgMARAAIAuAAQAHAAAFAGQAEAEABAHQgBAHgEAEQgFAFgHABIguAAQgHgBAAAHIAAFrQAAAHAHAAIAuAAQAHAAAFAEQAEAFABAHQgBAHgEAFQgFAEgHAAg");
	this.shape_241.setTransform(409,237.8,0.48,0.48);

	this.shape_242 = new cjs.Shape();
	this.shape_242.graphics.f("#00B4D1").s().p("AgXAvIAAhdIAjAAQAFAAAEADQADAEAAAFIAABFQAAAFgDAEQgEADgFAAg");
	this.shape_242.setTransform(401.9,243.6,0.48,0.48);

	this.shape_243 = new cjs.Shape();
	this.shape_243.graphics.f("#53C6D9").s().p("Ag3AvQgBAAAAAAQgBAAAAAAQgBgBAAAAQgBAAAAgBQAAAAgBgBQAAAAAAAAQgBgBAAgBQAAAAAAgBIAAhRQAAgGAGAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_243.setTransform(400.1,243.6,0.48,0.48);

	this.shape_244 = new cjs.Shape();
	this.shape_244.graphics.f("#00B4D1").s().p("AgXAvIAAhdIAjAAQAFAAAEADQADAEAAAFIAABFQAAAFgDAEQgEADgFAAg");
	this.shape_244.setTransform(401.9,232,0.48,0.48);

	this.shape_245 = new cjs.Shape();
	this.shape_245.graphics.f("#53C6D9").s().p("Ag3AvQgGAAAAgGIAAhRQAAgBAAAAQAAgBABAAQAAgBAAAAQABgBAAAAQAAgBABAAQAAgBABAAQAAAAABAAQAAAAABAAIBvAAQAGAAAAAGIAABRQAAAGgGAAg");
	this.shape_245.setTransform(400.1,232,0.48,0.48);

	this.shape_246 = new cjs.Shape();
	this.shape_246.graphics.f("#00A1B7").s().p("AgMCTQgFAAAAgFIAAkbQAAgFAFAAIAYAAQAGAAAAAFIAAEbQAAAFgGAAg");
	this.shape_246.setTransform(401.7,238.1,0.48,0.48);

	this.shape_247 = new cjs.Shape();
	this.shape_247.graphics.f("#00B4D1").s().p("AgnCTQgEAAgDgCQgDgDAAgEIAAkSQAAgFADgCQADgDAEAAIBPAAQAEAAADADQADACAAAFIAAESQAAAEgDADQgDACgEAAg");
	this.shape_247.setTransform(400.1,238.1,0.48,0.48);

	this.shape_248 = new cjs.Shape();
	this.shape_248.graphics.f("#E4E9EB").s().p("AgMDdQgQAAgLgLQgLgMAAgQIAAlrQAAgQALgMQALgMAQAAIAvAAQAHAAAFAGQAEAEAAAHQAAAHgEAEQgFAFgHABIgvAAQgGgBAAAHIAAFrQAAAHAGAAIAvAAQAIAAAEAEQAEAFAAAHQAAAHgEAFQgFAEgHAAg");
	this.shape_248.setTransform(401.8,237.8,0.48,0.48);

	this.shape_249 = new cjs.Shape();
	this.shape_249.graphics.f("#BAC5C9").s().p("AhOANQAAAAAAAAQgBAAAAgBQAAAAAAAAQAAgBAAAAIAAgWQAAAAAAAAQAAAAAAgBQAAAAABAAQAAAAAAAAICcAAQABAAAAAAQABAAAAAAQAAABAAAAQABAAAAAAIAAAWQAAAAgBABQAAAAAAAAQAAABgBAAQAAAAgBAAg");
	this.shape_249.setTransform(266.5,314.8,0.48,0.48);

	this.shape_250 = new cjs.Shape();
	this.shape_250.graphics.f("#BAC5C9").s().p("AhiAhQgBAAgBAAQAAAAgBAAQAAgBAAAAQAAgBAAgBIAAg7QAAgBAAgBQAAAAAAgBQABAAAAAAQABAAABAAIDFAAQABAAABAAQAAAAABAAQAAABAAAAQABABAAABIAAA7QAAABgBABQAAAAAAABQgBAAAAAAQgBAAgBAAg");
	this.shape_250.setTransform(267.6,312,0.48,0.48);

	this.shape_251 = new cjs.Shape();
	this.shape_251.graphics.f("#686C6E").s().p("AjlBHIAAhoQAAgPALgMQAMgKAPgBIGkAAIAAA+QAAAhgYAXQgXAYgiAAg");
	this.shape_251.setTransform(271.2,312.5,0.48,0.48);

	this.shape_252 = new cjs.Shape();
	this.shape_252.graphics.f("#5B6163").s().p("Aj4BrQgIgBgGgFQgFgGAAgHIAAivQAAgHAFgGQAGgFAIgBIHxAAQAIABAGAFQAFAGAAAHIAACvQAAAHgFAGQgGAFgIABg");
	this.shape_252.setTransform(273.1,314.2,0.48,0.48);

	this.shape_253 = new cjs.Shape();
	this.shape_253.graphics.f("#3E4345").s().p("Aj4BrQgIgBgGgFQgFgGAAgHIAAivQAAgHAFgGQAGgFAIgBIHxAAQAIABAGAFQAFAGAAAHIAACvQAAAHgFAGQgGAFgIABg");
	this.shape_253.setTransform(274.9,314.2,0.48,0.48);

	this.shape_254 = new cjs.Shape();
	this.shape_254.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgLAAgIgHg");
	this.shape_254.setTransform(283.6,318.8,0.48,0.48);

	this.shape_255 = new cjs.Shape();
	this.shape_255.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgJAAgLQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_255.setTransform(284.2,321.7,0.48,0.48);

	this.shape_256 = new cjs.Shape();
	this.shape_256.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQAMAAAIAJQAIAIAAALIAAB2QAAAMgIAJQgIAHgMAAQgLAAgIgHg");
	this.shape_256.setTransform(278.7,318.8,0.48,0.48);

	this.shape_257 = new cjs.Shape();
	this.shape_257.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgJAAgLQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_257.setTransform(279.2,321.7,0.48,0.48);

	this.shape_258 = new cjs.Shape();
	this.shape_258.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAJgJAKAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgKAAgJgHg");
	this.shape_258.setTransform(273.7,318.8,0.48,0.48);

	this.shape_259 = new cjs.Shape();
	this.shape_259.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_259.setTransform(274.3,321.7,0.48,0.48);

	this.shape_260 = new cjs.Shape();
	this.shape_260.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAJgJAKAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgKAAgJgHg");
	this.shape_260.setTransform(268.8,318.8,0.48,0.48);

	this.shape_261 = new cjs.Shape();
	this.shape_261.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_261.setTransform(269.3,321.7,0.48,0.48);

	this.shape_262 = new cjs.Shape();
	this.shape_262.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgLAAgIgHg");
	this.shape_262.setTransform(263.8,318.8,0.48,0.48);

	this.shape_263 = new cjs.Shape();
	this.shape_263.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_263.setTransform(264.3,321.7,0.48,0.48);

	this.shape_264 = new cjs.Shape();
	this.shape_264.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAIgIALAAQALAAAJAIQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLgBQgLABgIgJg");
	this.shape_264.setTransform(283.6,309.6,0.48,0.48);

	this.shape_265 = new cjs.Shape();
	this.shape_265.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgJAAgLQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_265.setTransform(284.2,306.8,0.48,0.48);

	this.shape_266 = new cjs.Shape();
	this.shape_266.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAIgIALAAQAMAAAIAIQAIAIAAAMIAAB1QAAAMgIAIQgIAJgMgBQgLABgIgJg");
	this.shape_266.setTransform(278.7,309.6,0.48,0.48);

	this.shape_267 = new cjs.Shape();
	this.shape_267.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgJAAgLQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_267.setTransform(279.2,306.8,0.48,0.48);

	this.shape_268 = new cjs.Shape();
	this.shape_268.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAJgIAKAAQALAAAJAIQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLgBQgKABgJgJg");
	this.shape_268.setTransform(273.7,309.6,0.48,0.48);

	this.shape_269 = new cjs.Shape();
	this.shape_269.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_269.setTransform(274.3,306.8,0.48,0.48);

	this.shape_270 = new cjs.Shape();
	this.shape_270.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAJgIAKAAQALAAAJAIQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLgBQgKABgJgJg");
	this.shape_270.setTransform(268.8,309.6,0.48,0.48);

	this.shape_271 = new cjs.Shape();
	this.shape_271.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_271.setTransform(269.3,306.8,0.48,0.48);

	this.shape_272 = new cjs.Shape();
	this.shape_272.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAIgIALAAQALAAAJAIQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLgBQgLABgIgJg");
	this.shape_272.setTransform(263.8,309.6,0.48,0.48);

	this.shape_273 = new cjs.Shape();
	this.shape_273.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgJAAgLQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAALgIAJQgJAIgLAAg");
	this.shape_273.setTransform(264.3,306.8,0.48,0.48);

	this.shape_274 = new cjs.Shape();
	this.shape_274.graphics.f("#BAC5C9").s().p("AhOANQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAAAAAgBIAAgVQAAgBAAAAQAAAAAAAAQAAgBABAAQAAAAAAAAICcAAQABAAAAAAQABAAAAABQAAAAAAAAQABAAAAABIAAAVQAAABgBAAQAAAAAAABQAAAAgBAAQAAAAgBAAg");
	this.shape_274.setTransform(266.5,293.2,0.48,0.48);

	this.shape_275 = new cjs.Shape();
	this.shape_275.graphics.f("#BAC5C9").s().p("AhiAhQgBAAgBAAQAAAAgBAAQAAgBAAAAQAAgBAAgBIAAg7QAAgBAAgBQAAAAAAgBQABAAAAAAQABAAABAAIDFAAQABAAABAAQAAAAABAAQAAABAAAAQABABAAABIAAA7QAAABgBABQAAAAAAABQgBAAAAAAQgBAAgBAAg");
	this.shape_275.setTransform(267.6,290.4,0.48,0.48);

	this.shape_276 = new cjs.Shape();
	this.shape_276.graphics.f("#686C6E").s().p("AjlBIIAAhoQAAgQALgLQAMgMAPAAIGkAAIAAA+QAAAhgYAYQgXAYgiAAg");
	this.shape_276.setTransform(271.2,290.9,0.48,0.48);

	this.shape_277 = new cjs.Shape();
	this.shape_277.graphics.f("#5B6163").s().p("Aj4BrQgIAAgGgGQgFgFAAgIIAAiuQAAgIAFgGQAGgGAIAAIHxAAQAIAAAGAGQAFAGAAAIIAACuQAAAIgFAFQgGAGgIAAg");
	this.shape_277.setTransform(273.1,292.6,0.48,0.48);

	this.shape_278 = new cjs.Shape();
	this.shape_278.graphics.f("#3E4345").s().p("Aj4BrQgIAAgGgGQgFgFAAgIIAAiuQAAgIAFgGQAGgGAIAAIHxAAQAIAAAGAGQAFAGAAAIIAACuQAAAIgFAFQgGAGgIAAg");
	this.shape_278.setTransform(274.9,292.6,0.48,0.48);

	this.shape_279 = new cjs.Shape();
	this.shape_279.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgLAAgIgHg");
	this.shape_279.setTransform(283.6,297.2,0.48,0.48);

	this.shape_280 = new cjs.Shape();
	this.shape_280.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgKAIgJQAIgIAMAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_280.setTransform(284.2,300.1,0.48,0.48);

	this.shape_281 = new cjs.Shape();
	this.shape_281.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQAMAAAIAJQAIAIAAALIAAB2QAAAMgIAJQgIAHgMAAQgLAAgIgHg");
	this.shape_281.setTransform(278.7,297.2,0.48,0.48);

	this.shape_282 = new cjs.Shape();
	this.shape_282.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgKAIgJQAIgIAMAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_282.setTransform(279.2,300.1,0.48,0.48);

	this.shape_283 = new cjs.Shape();
	this.shape_283.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAJgJAKAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgKAAgJgHg");
	this.shape_283.setTransform(273.7,297.2,0.48,0.48);

	this.shape_284 = new cjs.Shape();
	this.shape_284.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_284.setTransform(274.3,300.1,0.48,0.48);

	this.shape_285 = new cjs.Shape();
	this.shape_285.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAJgJAKAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgKAAgJgHg");
	this.shape_285.setTransform(268.8,297.2,0.48,0.48);

	this.shape_286 = new cjs.Shape();
	this.shape_286.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_286.setTransform(269.3,300.1,0.48,0.48);

	this.shape_287 = new cjs.Shape();
	this.shape_287.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgLAAgIgHg");
	this.shape_287.setTransform(263.8,297.2,0.48,0.48);

	this.shape_288 = new cjs.Shape();
	this.shape_288.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_288.setTransform(264.3,300.1,0.48,0.48);

	this.shape_289 = new cjs.Shape();
	this.shape_289.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAIgJALAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLAAQgLAAgIgJg");
	this.shape_289.setTransform(283.6,288,0.48,0.48);

	this.shape_290 = new cjs.Shape();
	this.shape_290.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgKAIgJQAIgIAMAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_290.setTransform(284.2,285.1,0.48,0.48);

	this.shape_291 = new cjs.Shape();
	this.shape_291.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAIgJALAAQAMAAAIAJQAIAIAAAMIAAB1QAAAMgIAIQgIAJgMAAQgLAAgIgJg");
	this.shape_291.setTransform(278.7,288,0.48,0.48);

	this.shape_292 = new cjs.Shape();
	this.shape_292.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgKAIgJQAIgIAMAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_292.setTransform(279.2,285.1,0.48,0.48);

	this.shape_293 = new cjs.Shape();
	this.shape_293.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAJgJAKAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLAAQgKAAgJgJg");
	this.shape_293.setTransform(273.7,288,0.48,0.48);

	this.shape_294 = new cjs.Shape();
	this.shape_294.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_294.setTransform(274.3,285.1,0.48,0.48);

	this.shape_295 = new cjs.Shape();
	this.shape_295.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAJgJAKAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLAAQgKAAgJgJg");
	this.shape_295.setTransform(268.8,288,0.48,0.48);

	this.shape_296 = new cjs.Shape();
	this.shape_296.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_296.setTransform(269.3,285.1,0.48,0.48);

	this.shape_297 = new cjs.Shape();
	this.shape_297.graphics.f("#D4DFE2").s().p("AgTBPQgIgIAAgMIAAh1QAAgMAIgIQAIgJALAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAIQgJAJgLAAQgLAAgIgJg");
	this.shape_297.setTransform(263.8,288,0.48,0.48);

	this.shape_298 = new cjs.Shape();
	this.shape_298.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgKAIgJQAJgIALAAIAVAAQALAAAJAIQAIAJAAAKQAAAMgIAIQgJAIgLAAg");
	this.shape_298.setTransform(264.3,285.1,0.48,0.48);

	this.shape_299 = new cjs.Shape();
	this.shape_299.graphics.f("#BAC5C9").s().p("AhOANQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAAAAAgBIAAgVQAAgBAAAAQAAAAAAAAQAAgBABAAQAAAAAAAAICcAAQABAAAAAAQABAAAAABQAAAAAAAAQABAAAAABIAAAVQAAABgBAAQAAAAAAABQAAAAgBAAQAAAAgBAAg");
	this.shape_299.setTransform(266.5,271.6,0.48,0.48);

	this.shape_300 = new cjs.Shape();
	this.shape_300.graphics.f("#BAC5C9").s().p("AhiAiQgBAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAgBIAAg7QAAgBAAgBQAAAAAAgBQABAAAAgBQABAAABAAIDFAAQABAAABAAQAAABABAAQAAABAAAAQABABAAABIAAA7QAAABgBABQAAAAAAABQgBAAAAABQgBAAgBAAg");
	this.shape_300.setTransform(267.6,268.8,0.48,0.48);

	this.shape_301 = new cjs.Shape();
	this.shape_301.graphics.f("#686C6E").s().p("AjlBIIAAhoQAAgQALgLQAMgMAPAAIGkAAIAAA+QAAAhgYAYQgXAYgiAAg");
	this.shape_301.setTransform(271.2,269.3,0.48,0.48);

	this.shape_302 = new cjs.Shape();
	this.shape_302.graphics.f("#5B6163").s().p("Aj4BrQgIAAgGgGQgFgFAAgIIAAivQAAgIAFgFQAGgGAIAAIHxAAQAIAAAGAGQAFAFAAAIIAACvQAAAIgFAFQgGAGgIAAg");
	this.shape_302.setTransform(273.1,271,0.48,0.48);

	this.shape_303 = new cjs.Shape();
	this.shape_303.graphics.f("#3E4345").s().p("Aj4BrQgIAAgGgGQgFgFAAgIIAAivQAAgIAFgFQAGgGAIAAIHxAAQAIAAAGAGQAFAFAAAIIAACvQAAAIgFAFQgGAGgIAAg");
	this.shape_303.setTransform(274.9,271,0.48,0.48);

	this.shape_304 = new cjs.Shape();
	this.shape_304.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgLAAgIgHg");
	this.shape_304.setTransform(283.6,275.6,0.48,0.48);

	this.shape_305 = new cjs.Shape();
	this.shape_305.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_305.setTransform(284.2,278.5,0.48,0.48);

	this.shape_306 = new cjs.Shape();
	this.shape_306.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQAMAAAIAJQAIAIAAALIAAB2QAAAMgIAJQgIAHgMAAQgLAAgIgHg");
	this.shape_306.setTransform(278.7,275.6,0.48,0.48);

	this.shape_307 = new cjs.Shape();
	this.shape_307.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_307.setTransform(279.2,278.5,0.48,0.48);

	this.shape_308 = new cjs.Shape();
	this.shape_308.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAJgJAKAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgKAAgJgHg");
	this.shape_308.setTransform(273.7,275.6,0.48,0.48);

	this.shape_309 = new cjs.Shape();
	this.shape_309.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_309.setTransform(274.3,278.5,0.48,0.48);

	this.shape_310 = new cjs.Shape();
	this.shape_310.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAJgJAKAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgKAAgJgHg");
	this.shape_310.setTransform(268.8,275.6,0.48,0.48);

	this.shape_311 = new cjs.Shape();
	this.shape_311.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_311.setTransform(269.3,278.5,0.48,0.48);

	this.shape_312 = new cjs.Shape();
	this.shape_312.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh2QAAgLAIgIQAIgJALAAQALAAAJAJQAIAIAAALIAAB2QAAAMgIAJQgJAHgLAAQgLAAgIgHg");
	this.shape_312.setTransform(263.8,275.6,0.48,0.48);

	this.shape_313 = new cjs.Shape();
	this.shape_313.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_313.setTransform(264.3,278.5,0.48,0.48);

	this.shape_314 = new cjs.Shape();
	this.shape_314.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh1QAAgMAIgIQAIgJALAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAJQgJAHgLABQgLgBgIgHg");
	this.shape_314.setTransform(283.6,266.4,0.48,0.48);

	this.shape_315 = new cjs.Shape();
	this.shape_315.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_315.setTransform(284.2,263.6,0.48,0.48);

	this.shape_316 = new cjs.Shape();
	this.shape_316.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh1QAAgMAIgIQAIgJALAAQAMAAAIAJQAIAIAAAMIAAB1QAAAMgIAJQgIAHgMABQgLgBgIgHg");
	this.shape_316.setTransform(278.7,266.4,0.48,0.48);

	this.shape_317 = new cjs.Shape();
	this.shape_317.graphics.f("#ACB8BB").s().p("AgKAcQgMAAgIgIQgIgIAAgMQAAgLAIgIQAIgIAMAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_317.setTransform(279.2,263.6,0.48,0.48);

	this.shape_318 = new cjs.Shape();
	this.shape_318.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh1QAAgMAIgIQAJgJAKAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAJQgJAHgLABQgKgBgJgHg");
	this.shape_318.setTransform(273.7,266.4,0.48,0.48);

	this.shape_319 = new cjs.Shape();
	this.shape_319.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_319.setTransform(274.3,263.6,0.48,0.48);

	this.shape_320 = new cjs.Shape();
	this.shape_320.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh1QAAgMAIgIQAJgJAKAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAJQgJAHgLABQgKgBgJgHg");
	this.shape_320.setTransform(268.8,266.4,0.48,0.48);

	this.shape_321 = new cjs.Shape();
	this.shape_321.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_321.setTransform(269.3,263.6,0.48,0.48);

	this.shape_322 = new cjs.Shape();
	this.shape_322.graphics.f("#D4DFE2").s().p("AgTBQQgIgJAAgMIAAh1QAAgMAIgIQAIgJALAAQALAAAJAJQAIAIAAAMIAAB1QAAAMgIAJQgJAHgLABQgLgBgIgHg");
	this.shape_322.setTransform(263.8,266.4,0.48,0.48);

	this.shape_323 = new cjs.Shape();
	this.shape_323.graphics.f("#ACB8BB").s().p("AgKAcQgLAAgJgIQgIgIAAgMQAAgLAIgIQAJgIALAAIAVAAQALAAAJAIQAIAIAAALQAAAMgIAIQgJAIgLAAg");
	this.shape_323.setTransform(264.3,263.6,0.48,0.48);

	this.shape_324 = new cjs.Shape();
	this.shape_324.graphics.f("#FFFFFF").s().p("EgGFAv7QkyAAkYh2QkPh0jRjQQjRjRhzkPQh2kYAAkzMAAAgwsQAAkyB2kYQBzkPDRjQQDRjREPhzQEYh3EyAAIMLAAQEyAAEYB3QEPBzDRDRQDRDQByEPQB3EYAAEyMAAAAwsQAAEzh3EYQhyEPjRDRQjRDQkPB0QkYB2kyAAgEgObgsGQj2Bpi+C9Qi+C+hpD3QhsD/AAEWMAAAAwsQAAEYBsD/QBpD2C+C+QC+C+D2BpQD/BsEXAAIMLAAQEWAAD/hsQD3hpC+i+QC+i+Boj2QBsj/AAkYMAAAgwsQAAkWhsj/Qhoj3i+i+Qi+i9j3hpQj/hskWAAIsLAAQkXAAj/BsgEgGFAhEQjmAAikikQijijAAjnMAAAgwsQAAjmCjijQCkijDmgBIMLAAQDmABCjCjQCkCkAADlMAAAAwsQAADnikCjQijCkjmAAgAqv8/Qh7B8AACtMAAAAwsQAACvB7B7QB8B8CuAAIMLAAQCuAAB7h8QB8h7AAivMAAAgwsQAAith8h8Qh7h8iuAAIsLAAQiuAAh8B8g");
	this.shape_324.setTransform(337.8,232.4,0.48,0.48);

	this.shape_325 = new cjs.Shape();
	this.shape_325.graphics.f("#9CABB3").s().p("AgfAwQgUgUAAgcQAAgbAUgUQANgNASgFQATAFANANQAUAUAAAbQAAAcgUAUQgOAOgSAEQgRgEgOgOg");
	this.shape_325.setTransform(277.9,351.1,0.48,0.48);

	this.shape_326 = new cjs.Shape();
	this.shape_326.graphics.f("#DEE7EB").s().p("AgvAwQgUgUAAgcQAAgbAUgUQAUgUAbAAQAcAAAUAUQAUAUAAAbQAAAcgUAUQgUAUgcAAQgbAAgUgUg");
	this.shape_326.setTransform(277.1,351.1,0.48,0.48);

	this.shape_327 = new cjs.Shape();
	this.shape_327.graphics.f("#FFFFFF").s().p("AAFCkIioioQgCgCAAgDQAAgDACgDICEiEQATgSAZAAQAaAAATASIBZBaQATATAAAaQAAAZgTATIiECEQgDACgCAAQgDAAgCgCg");
	this.shape_327.setTransform(276.3,351.9,0.48,0.48);

	this.shape_328 = new cjs.Shape();
	this.shape_328.graphics.f("#9CABB3").s().p("AgfAwQgUgUAAgcQAAgbAUgUQANgNASgFQAUAFAMANQAUAUAAAbQAAAcgUAUQgNAOgTAEQgRgEgOgOg");
	this.shape_328.setTransform(399.3,351.1,0.48,0.48);

	this.shape_329 = new cjs.Shape();
	this.shape_329.graphics.f("#DEE7EB").s().p("AgvAwQgUgUAAgcQAAgbAUgUQAUgUAbAAQAcAAAUAUQAUAUAAAbQAAAcgUAUQgUAUgcAAQgbAAgUgUg");
	this.shape_329.setTransform(398.6,351.1,0.48,0.48);

	this.shape_330 = new cjs.Shape();
	this.shape_330.graphics.f("#FFFFFF").s().p("AgPCkIiEiEQgSgTAAgZQAAgaASgTIBahaQATgSAaAAQAZAAASASICECEQADADAAADQAAADgDACIinCoQgDACgCAAQgDAAgDgCg");
	this.shape_330.setTransform(399.4,351.9,0.48,0.48);

	this.shape_331 = new cjs.Shape();
	this.shape_331.graphics.f("#9CABB3").s().p("AgfAwQgUgUAAgcQAAgbAUgUQAMgNATgFQAUAFAMANQAUAUAAAbQAAAcgUAUQgNAOgTAEQgRgEgOgOg");
	this.shape_331.setTransform(399.3,113.1,0.48,0.48);

	this.shape_332 = new cjs.Shape();
	this.shape_332.graphics.f("#DEE7EB").s().p("AgvAwQgUgUAAgcQAAgbAUgUQAUgUAbAAQAcAAAUAUQAUAUAAAbQAAAcgUAUQgUAUgcAAQgbAAgUgUg");
	this.shape_332.setTransform(398.6,113.1,0.48,0.48);

	this.shape_333 = new cjs.Shape();
	this.shape_333.graphics.f("#FFFFFF").s().p("Ag5CUIhahaQgSgSAAgbQAAgZASgSICEiFQAGgEAFAEICnCoQAGAGgGAFIiECEQgSASgZAAQgaAAgTgSg");
	this.shape_333.setTransform(399.4,112.2,0.48,0.48);

	this.shape_334 = new cjs.Shape();
	this.shape_334.graphics.f("#9CABB3").s().p("AgfAwQgUgUAAgcQAAgbAUgUQANgNASgFQAUAFAMANQAUAUAAAbQAAAcgUAUQgOAOgSAEQgRgEgOgOg");
	this.shape_334.setTransform(277.9,113.1,0.48,0.48);

	this.shape_335 = new cjs.Shape();
	this.shape_335.graphics.f("#DEE7EB").s().p("AgvAwQgUgUAAgcQAAgbAUgUQAUgUAbAAQAcAAAUAUQAUAUAAAbQAAAcgUAUQgUAUgcAAQgbAAgUgUg");
	this.shape_335.setTransform(277.1,113.1,0.48,0.48);

	this.shape_336 = new cjs.Shape();
	this.shape_336.graphics.f("#FFFFFF").s().p("AgfCUIiEiEQgFgFAFgGICoioQAFgEAFAEICECFQATASAAAZQAAAbgTASIhZBaQgTASgaAAQgZAAgTgSg");
	this.shape_336.setTransform(276.2,112.2,0.48,0.48);

	this.shape_337 = new cjs.Shape();
	this.shape_337.graphics.f("#AFBABD").s().p("AALCTIididQgEgFAAgGQAAgGAEgEIBShSQAlglA0AAQA0AAAlAlQAlAlAAA0QAAA0glAlIhSBSQgEAEgGAAQgGAAgFgEg");
	this.shape_337.setTransform(277.5,352.9,0.48,0.48);

	this.shape_338 = new cjs.Shape();
	this.shape_338.graphics.f("#AFBABD").s().p("AgfCTIhShSQglglAAg0QAAg0AlglQAlglA0AAQA0AAAlAlIBSBSQAEAEAAAGQAAAGgEAFIidCdQgFAEgGAAQgGAAgEgEg");
	this.shape_338.setTransform(401.9,352.9,0.48,0.48);

	this.shape_339 = new cjs.Shape();
	this.shape_339.graphics.f("#AFBABD").s().p("AhxByQglglAAg0QAAg0AlglIBShSQAEgEAGAAQAGAAAFAEICdCdQAEAFAAAGQAAAGgEAEIhSBSQglAlg0AAQg0AAglglg");
	this.shape_339.setTransform(401.9,112.1,0.48,0.48);

	this.shape_340 = new cjs.Shape();
	this.shape_340.graphics.f("#AFBABD").s().p("AhAByIhShSQgEgEAAgGQAAgGAEgFICdidQAFgEAGAAQAGAAAEAEIBSBSQAlAlAAA0QAAA0glAlQglAlg0AAQg0AAglglg");
	this.shape_340.setTransform(277.5,112.1,0.48,0.48);

	this.shape_341 = new cjs.Shape();
	this.shape_341.graphics.f("#AFBABD").s().p("EABnAtGQkBhujIjHQjHjIhukCQhxkMAAklMAAAgwsQAAkkBxkMQBukCDHjIQDIjHEBhuQEMhxElAAIBxAAQkQAHj6BqQkBBujIDHQjHDIhuECQhxEMAAEkMAAAAwsQAAElBxEMQBuECDHDIQDIDHEBBuQD6BqEQAHIhxAAQklAAkMhxg");
	this.shape_341.setTransform(287.3,232.4,0.48,0.48);

	this.shape_342 = new cjs.Shape();
	this.shape_342.graphics.f("#AFBABD").s().p("EgGyAhEQiPAAh+hGQh5hEhNh0QBGBWBhAxQBnAzByAAIMLAAQDKAACPiQQCPiPABjLMAAAgwsQgBjKiPiPQiPiQjKAAIsLAAQhyAAhnAzQhhAxhGBWQBNh0B5hEQB+hGCPAAIMLAAQDfAACiCbQChCbALDeMAAAAxfQgLDeihCbQiiCbjfAAg");
	this.shape_342.setTransform(344,232.4,0.48,0.48);

	this.shape_343 = new cjs.Shape();
	this.shape_343.graphics.f("#C3DB6E").s().p("AgZB6QgKgLAAgPQAAgMAHgKQAIgKAMgDIAAhNIgFAAQgDAAgDgDQgDgCAAgEIAAhhQAAgEADgDQACgCAEAAIAbAAQAEAAACACQADADAAAEIAABhQAAAEgDACQgCADgEAAIgFAAIAABNQAMADAIAKQAHAKAAAMQAAAPgKALQgLAKgPAAQgOAAgLgKgAgMBUQgFAFAAAHQAAAHAFAGQAGAFAGAAQAHAAAFgFQAFgGAAgHQAAgHgFgFQgFgGgHAAQgGAAgGAGg");
	this.shape_343.setTransform(264.9,232.6,0.48,0.48);

	this.shape_344 = new cjs.Shape();
	this.shape_344.graphics.f("#C3DB6E").s().p("AgYB6QgMgLABgPQAAgMAHgKQAIgKAMgDIAAhNIgFAAQgJAAAAgJIAAhhQAAgJAJAAIAaAAQAEAAADACQADADAAAEIAABhQAAADgDADQgDADgEAAIgDAAIAABNQAMADAHAKQAHAKABAMQAAAPgLALQgLAKgPAAQgOAAgKgKgAgMBUQgEAFAAAHQAAAHAEAGQAGAFAGAAQAHAAAFgFQAGgGAAgHQAAgHgGgFQgFgGgHAAQgGAAgGAGg");
	this.shape_344.setTransform(269.6,232.6,0.48,0.48);

	this.shape_345 = new cjs.Shape();
	this.shape_345.graphics.f("#C3DB6E").s().p("AgYB6QgLgLAAgPQAAgMAHgKQAIgKAMgDIAAhNIgFAAQgDAAgDgDQgDgCAAgEIAAhhQAAgJAJAAIAbAAQAEAAACACQADADAAAEIAABhQAAAEgDACQgCADgEAAIgFAAIAABNQAMADAIAKQAHAKAAAMQAAAPgKALQgLAKgPAAQgOAAgKgKgAgLBUQgGAFAAAHQAAAHAGAGQAFAFAGAAQAHAAAGgFQAFgGAAgHQAAgHgFgFQgGgGgHAAQgGAAgFAGg");
	this.shape_345.setTransform(274.5,232.6,0.48,0.48);

	this.shape_346 = new cjs.Shape();
	this.shape_346.graphics.f("#C3DB6E").s().p("AgZB6QgKgLAAgPQAAgMAHgKQAIgKAMgDIAAhNIgFAAQgDAAgDgDQgDgCAAgEIAAhhQAAgEADgDQACgCAEAAIAbAAQAEAAACACQADADAAAEIAABhQAAAEgDACQgCADgEAAIgFAAIAABNQAMADAIAKQAHAKAAAMQAAAPgKALQgLAKgPAAQgOAAgLgKgAgMBUQgFAFAAAHQAAAHAFAGQAGAFAGAAQAHAAAGgFQAFgGAAgHQAAgHgFgFQgGgGgHAAQgGAAgGAGg");
	this.shape_346.setTransform(279.5,232.6,0.48,0.48);

	this.shape_347 = new cjs.Shape();
	this.shape_347.graphics.f("#C3DB6E").s().p("AgZB6QgKgLgBgPQAAgMAIgKQAHgKAMgDIAAhNIgDAAQgKAAAAgJIAAhhQAAgJAKAAIAaAAQADAAADACQADADAAAEIAABhQAAADgDADQgDADgDAAIgFAAIAABNQAMADAIAKQAIAKgBAMQAAAPgKALQgLAKgPAAQgOAAgLgKgAgLBUQgFAFgBAHQABAHAFAGQAEAFAHAAQAHAAAGgFQAEgGAAgHQAAgHgEgFQgGgGgHAAQgHAAgEAGg");
	this.shape_347.setTransform(284.5,232.6,0.48,0.48);

	this.shape_348 = new cjs.Shape();
	this.shape_348.graphics.f("#C3DB6E").s().p("AgYB6QgLgLAAgPQAAgMAHgKQAIgKAMgDIAAhNIgFAAQgDAAgDgDQgDgCAAgEIAAhhQAAgEADgDQACgCAEAAIAbAAQAEAAACACQADADAAAEIAABhQAAAEgDACQgCADgEAAIgFAAIAABNQAMADAIAKQAHAKAAAMQAAAPgKALQgLAKgPAAQgOAAgKgKgAgLBUQgGAFAAAHQAAAHAGAGQAFAFAGAAQAHAAAGgFQAFgGAAgHQAAgHgFgFQgGgGgHAAQgGAAgFAGg");
	this.shape_348.setTransform(289.4,232.6,0.48,0.48);

	this.shape_349 = new cjs.Shape();
	this.shape_349.graphics.f("#2F2F2F").s().p("AlAEFIAAmCQAAhCAHhFII4AAQAbAAAUATQATATAAAbQAAAbgTATQgUATgbAAIh6AAQgbAAgTAUQgUATAAAbQAAAbAUATQATASAbAAIB6AAQAbAAAUATQATATAAAbQAAAbgTATQgUATgbAAIlBAAQgbAAgTAUQgTATAAAbQAAAbgTATQgTATgbAAg");
	this.shape_349.setTransform(268.6,163.7,0.48,0.48);

	this.shape_350 = new cjs.Shape();
	this.shape_350.graphics.f("#008F69").s().p("Ag8AaQgKgKgBgQQABgPAKgKQAMgMAPAAQAVABAMASIA1AAQAHAAAGAGQAFAFAAAHQAAAIgFAFQgGAGgHAAIg1AAQgLATgWAAQgPAAgMgMg");
	this.shape_350.setTransform(420.2,285.7,0.48,0.48);

	this.shape_351 = new cjs.Shape();
	this.shape_351.graphics.f("#008F69").s().p("AgaBxQgLgLABgQQAAgVASgLIAAhrQgSgLAAgVQgBgQALgLQALgLAPAAQAPAAAMALQALALgBAQQABAVgUALIAABrQAUALgBAVQABAQgLALQgMALgPAAQgPAAgLgLg");
	this.shape_351.setTransform(259.7,241.9,0.48,0.48);

	this.shape_352 = new cjs.Shape();
	this.shape_352.graphics.f("#008F69").s().p("ABIR8QgHAAgGgGIn1n2QgFgGAAgHIAA2kQgTgLAAgVQAAgPALgLQALgLAQAAIAIABIA3gzIgCgMQAAgWASgKIAAiUQAAgHAGgGQAFgGAIABQAIgBAFAGQAGAGAAAHIAACTQATALAAAWQAAAPgLAMQgLAKgPABIgHgBIg5AzIACALQAAAWgTAKIAAWcIHqHrIFdAAIAAkUQAAgIAGgGQAFgFAIAAQAIAAAFAFQAGAGAAAIIAAEnQAAAHgGAGQgFAGgIAAg");
	this.shape_352.setTransform(305.3,291.6,0.48,0.48);

	this.shape_353 = new cjs.Shape();
	this.shape_353.graphics.f("#008F69").s().p("AgZELQgLgLAAgQQgBgVAUgLIAAmfQgUgKABgWQAAgQALgKQALgMAOAAQAPAAAMAMQAKAKAAAQQABAVgTALIAAGfQATALgBAVQAAAQgKALQgMALgPgBQgOABgLgLg");
	this.shape_353.setTransform(404.4,182.1,0.48,0.48);

	this.shape_354 = new cjs.Shape();
	this.shape_354.graphics.f("#008F69").s().p("Al+KLQgGgFABgHIAAzJQgUgLAAgWQAAgPAMgLQALgLAPAAQAWAAAKATILWAAQAIAAAFAGQAFAFAAAHQAAAJgFAFQgFAGgIgBIrWAAQgEAJgJAFIAATJQAAAHgGAFQgFAGgIAAQgHAAgGgGg");
	this.shape_354.setTransform(408.2,187.4,0.48,0.48);

	this.shape_355 = new cjs.Shape();
	this.shape_355.graphics.f("#008F69").s().p("AhYIKQgFgFAAgIIAAvGQgTgKAAgWQAAgQALgLQALgLAQAAQAVAAALATICIAAQAIAAAGAGQAFAFAAAIQAAAIgFAFQgGAGgIAAIiIAAQgFAIgIAFIAAPGQgBAIgFAFQgGAGgHAAQgIAAgGgGg");
	this.shape_355.setTransform(422.4,195.9,0.48,0.48);

	this.shape_356 = new cjs.Shape();
	this.shape_356.graphics.f("#008F69").s().p("AjLGYQgHAAgGgGQgFgFgBgHIAAsLQABgHAFgFQAGgGAHAAIGWAAQAJAAAFAGQAFAFAAAHIAAMLQAAAHgFAFQgFAGgJAAgABvlQQAIAAAGAFQAFAFAAAIIAAKxIA3AAIAArlIlxAAIAALlIA3AAIAAqxQAAgIAGgFQAFgFAHAAgAhcFzIC4AAIAAqeIi4AAg");
	this.shape_356.setTransform(404.4,180.5,0.48,0.48);

	this.shape_357 = new cjs.Shape();
	this.shape_357.graphics.f("#008F69").s().p("AAXBeIjHAAQgKATgWAAQgQABgKgLQgMgLAAgQQAAgPAMgMQAKgLAQABQAVAAALASIDHAAQALgSAWAAQAFgBAFACICViUQAFgEAHAAQAJAAAFAEQAFAGAAAIQAAAIgFAFIiVCUQACAEgBAFQABAQgMALQgLALgPgBQgWAAgLgTg");
	this.shape_357.setTransform(359.9,95.4,0.48,0.48);

	this.shape_358 = new cjs.Shape();
	this.shape_358.graphics.f("#008F69").s().p("AgnDJIkcAAQgLATgWAAQgPAAgLgLQgLgLAAgQQAAgPALgLQALgLAPAAQAWAAALASIEcAAQAMgSAVAAIAIABIFolnQAFgGAIAAQAIAAAGAGQAFAFAAAIQAAAIgFAFIloFnIABAKQABAQgLALQgLALgPAAQgVAAgMgTg");
	this.shape_358.setTransform(366.9,102.6,0.48,0.48);

	this.shape_359 = new cjs.Shape();
	this.shape_359.graphics.f("#008F69").s().p("AnJEEQgPgDgJgNQgIgNADgPQAEgQANgIQANgIAPADQAPAEAJANIAAABIGCAAQALgTAUAAQAHAAAEACIG9m8QAFgFAIAAQAIAAAFAFQAGAGAAAIQAAAIgGAFIm9G9IAAAIQAAAPgLALQgLALgPAAQgUAAgLgTImCAAQgFAJgHAEQgJAHgLAAIgIgCg");
	this.shape_359.setTransform(371.4,112.9,0.48,0.48);

	this.shape_360 = new cjs.Shape();
	this.shape_360.graphics.f("#008F69").s().p("ABVSvQgHAAgGgGIpbpcQgGgGAAgIIAA2jQgTgLAAgWQAAgPALgLQALgLAQAAIAIABIA4gyQgDgHAAgGQAAgVASgKIAAiVQAAgHAGgFQAFgGAIAAQAIAAAFAGQAGAFAAAHIAACUQATAKAAAWQAAAQgLALQgLALgPAAIgHgBIg4AzIABALQAAAWgSALIAAWbIJQJSIGqAAIAAl7QAAgHAGgGQAFgFAIgBQAIABAFAFQAGAGAAAHIAAGOQAAAIgGAFQgFAGgIAAg");
	this.shape_360.setTransform(304.7,294.1,0.48,0.48);

	this.shape_361 = new cjs.Shape();
	this.shape_361.graphics.f("#008F69").s().p("AqcUyQgIABgGgGItntoQgGgFAAgJIAA2fQgTgKAAgWQAAgPALgLQALgLAQAAIAIABIA3gzIgCgMQAAgVASgLIAAiUQAAgHAGgGQAFgGAIABQAIgBAFAGQAGAGAAAHIAACTQATALAAAWQAAAPgLAMQgLAKgPABIgHgBIg4AzIABALQAAAVgSALIAAWYINcNdIKRAAIAAiYIgjAAIAABJQAAAJgGAFQgFAGgIAAIpcAAQgIAAgFgGIsHsHQgGgFAAgJIAA2fQgSgLAAgVQAAgPALgLQALgLAPAAIAJABIA3gzIgCgMQAAgWASgKIAAiUQAAgHAFgGQAGgGAIABQAHgBAGAGQAFAGAAAHIAACTQAUALAAAWQAAAPgLAMQgLAKgQABIgHgBIg4AzIACALQAAAWgTAKIAAWYIL8L8IJBAAIAAg3IpCAAQgHABgGgGIqnqnQgFgGAAgHIAA2kQgTgLAAgVQAAgPALgLQALgLAQAAIAIABIA3gzQgCgFAAgHQAAgWASgKIAAiUQAAgHAGgGQAFgGAIABQAIgBAFAGQAGAGAAAHIAACTQATALAAAWQAAAPgLAMQgLAKgPABIgHgBIg5AzIACALQAAAVgTALIAAWcIKcKcII6AAIAAmpQAAgIAGgGQAFgFAIAAQAIAAAFAFQAGAGAAAIIAAGpIAjAAIAAmrQAAgJAEgFQAGgGAHABQAIgBAGAGQAFAFAAAJIAAGrIOnAAII+o/IAA5EIgSAAQgMAOgSABQgSgBgLgOIhWAAQgMAOgSABQgSgBgLgOIhZAAQgMAOgSABQgTgBgKgOIkPAAQgIAAgGgGQgFgFAAgHQAAgJAFgFQAGgGAIABIEJAAQAFgLAJgGQAKgHALAAQAMAAAJAHQAJAGAFALIBPAAQAEgKAJgHQAKgHALAAQAMAAAJAHQAKAHAEAKIBMAAQAEgKAJgHQAKgHALAAQAMAAAJAHQAKAHAEAKIAgAAQAIgBAFAGQAGAFAAAJIAAZeQAAAIgGAGIpJJJQgGAGgHgBIuvAAIAACqQAAAJgFAFQgGAGgIgBg");
	this.shape_361.setTransform(338.8,300.4,0.48,0.48);

	this.shape_362 = new cjs.Shape();
	this.shape_362.graphics.f("#008F69").s().p("AgaBrQgKgLgBgQQAAgVATgLIAAiTQAAgHAGgFQAFgGAHAAQAIAAAGAGQAFAFAAAHIAACTQASALABAVQAAAQgMALQgLALgPAAQgOAAgMgLg");
	this.shape_362.setTransform(264.9,242.2,0.48,0.48);

	this.shape_363 = new cjs.Shape();
	this.shape_363.graphics.f("#008F69").s().p("AhDVHIrCAAQgHAAgFgFQgGgGAAgIIAAoeQAAgIAGgGQAFgFAHAAIIAAAIAAmnIjwjxQgFgFAAgHIAAjEIjpAAQgIAAgFgGQgGgFAAgHQAAgJAGgFQAFgGAIABID7AAQAIgBAFAGQAGAFAAAJIAADOIDxDwQAFAFAAAIIAAGvIBCAAIAAnhIjujtQgFgGAAgHIAAkHIlTAAQgIABgFgGQgGgFAAgJQAAgHAGgFQAFgGAIAAIFmAAQAHAAAGAGQAFAFABAHIAAESIDsDtQAGAGAAAIIAAHoIA1AAQAFgJAIgFIAAohIjajMQgFgFAAgHIAAk/QgIgEgGgJImpAAQgIAAgGgGQgFgFAAgIQAAgHAFgGQAGgGAIABIGpAAQALgUAVAAIAKACIE2k3IAAgGQAAgPALgMQALgKAPgBQAWABALASIEkAAQAGgIAIgFIAAhVIkyAAQgLAUgWAAQgJgBgJgFIktEvIAAADQAAAPgLALQgLALgQAAQgQAAgKgLImQAAQgHAAgGgGQgFgFgBgHQABgJAFgFQAGgGAHABIGHAAQAEgMAJgHQAKgIAMAAQAHAAAJADIEwkxQABgPAKgKQALgLAPAAQAWAAALATIEyAAIAAhWQgHgEgHgKIkkAAQgLAUgWgBIgJgBIk2E3IAAAGQAAAPgLALQgLAMgQAAQgVAAgLgUImpAAQgIABgGgGQgFgFAAgIQAAgIAFgFQAGgGAIAAIGpAAQALgTAVAAQAHABAHACIEzk1QgBgEAAgFQAAgQALgLQALgLAPAAQAWAAALATIEkAAQAHgKAHgDIAAhIIkyAAQgLASgWAAQgJAAgJgFIktEvIAAACQAAAQgLALQgLALgQAAQgPAAgLgLImQAAQgHAAgGgGQgFgFgBgIQABgIAFgFQAGgGAHABIGHAAQAEgMAJgHQAKgIAMAAQAJAAAHADIEwkxQABgPAKgLQALgKAPAAQAWAAALATIEyAAIAAhGQgIgGgGgJIkkAAQgLATgWAAQgPABgLgLQgLgLAAgQQAAgFABgEIhlhnQgGgFAAgJQAAgHAGgFQAGgGAHAAQAIAAAGAGIBlBmQAFgCAEABQAWAAALASIEkAAQAMgSAVAAQAVAAALASIEHAAQAHAAAFAFQAGAGAAAIQAAAIgGAFQgFAFgHAAIkHAAQgEAJgJAGIAAC0QAIADAFAKIEdAAQAIAAAGAGQAFAFAAAIQAAAIgFAFQgGAGgIgBIkdAAQgFAKgIAEIAADQQAJAFAEAIIEdAAQAIAAAGAGQAFAFAAAIQAAAIgFAGQgGAFgIAAIkdAAQgLASgVABQgVgBgMgSIkkAAQgLASgWABQgFAAgIgDIk0E1QACAEAAAFQAAAWgSAKIAAE3IDZDKQAFAFAAAJIAAIpQATALgBAWQABAVgTALIAAHeQATALgBAVQAAAQgKALQgLALgPAAQgWAAgKgTgAryUhIKvAAQAFgHAIgGIAAneQgIgEgFgKIg1AAIAAA1QATAKAAAWQAAAVgTALIAAEQQATALAAAWQAAAPgLALQgLALgPAAQgWAAgLgTIpHAAgAryS7IJHAAQAGgKAIgEIAAkQQgJgEgFgKIg0AAIAAAiQASALAAAWQAAAUgSALIAABoQASAKAAAWQAAAQgLAKQgLAMgPAAQgVAAgLgUIngAAgAryRmIHgAAQAFgIAIgFIAAhoQgIgDgFgKIngAAIAAAuIFvAAQALgSAWAAQAPgBALALQALALAAAQQAAAQgLAKQgLAMgPgBQgWAAgLgSIlvAAgAryO/IHgAAQAFgKAIgEIAAgiIntAAgAjfNqIA0AAQAFgIAJgFIAAg1IhCAAgAryNqIHtAAIAAhCIntAAg");
	this.shape_363.setTransform(291.2,157.9,0.48,0.48);

	this.shape_364 = new cjs.Shape();
	this.shape_364.graphics.f("#008F69").s().p("AqaP/QgIgBgFgFQgGgGAAgHIAAlgQAAgIAGgFQAFgGAIABICEAAQAIgBAFAGQAGAFAAAIIAADTIJCAAIG3m3IAAzxIk2AAIAACnIDFAAQAIAAAGAFQAFAFAAAIIAAPmQAAAJgFAFIl+F+QgGAFgIAAIkEAAQgIAAgFgFQgFgGAAgHIAAhSQAAgIAFgGQAFgFAIAAQAIAAAGAFQAFAGAAAIIAAA/IDqAAIFzlzIAAvLIjGAAQgIAAgFgGQgGgFAAgJIAAjLQAAgJAGgFQAFgGAIABIFcAAQAIgBAFAGQAGAFAAAJIAAUKQAAAJgGAFInCHCQgGAGgHgBIpdAAQgIABgFgGQgGgGAAgHIAAjTIheAAIAAE6IMKAAIIFoFIAA2sInbAAQgIAAgFgGQgGgFAAgHQAAgJAGgFQAFgGAIABIHuAAQAIgBAFAGQAGAFAAAJIAAXFQAAAJgGAFIoQIQQgGAFgHABg");
	this.shape_364.setTransform(376.6,300.8,0.48,0.48);

	this.shape_365 = new cjs.Shape();
	this.shape_365.graphics.f("#008F69").s().p("AhDLlQgHAAgFgFQgGgGAAgIIAAn/QAAgHAGgGQAFgFAHAAICDAAIAAjHIiBAAQgHAAgGgFQgGgGAAgHIAAqFQgUgLAAgXQAAgPALgLQALgLAPAAQAQAAALALQALALAAAPQAAAVgRALIAAJ0ICBAAQAIAAAGAFQAFAGAAAIIAADrQAAAIgFAGQgGAFgIAAIiDAAIAAHaICGAAQAIAAAGAFQAFAGAAAHQAAAIgFAGQgGAFgIAAg");
	this.shape_365.setTransform(421,281.4,0.48,0.48);

	this.shape_366 = new cjs.Shape();
	this.shape_366.graphics.f("#008F69").s().p("AByAyQgLgLAAgPQAAgMAHgKQAHgJALgEIAAgMIhxAAIAAAVQAMAKAAAQQAAAPgLALQgLALgPAAQgPAAgLgLQgLgLAAgPQAAgMAHgKQAHgJAMgEIAAgMIhxAAIAAARQARAJAAAVQAAAPgLALQgLALgQAAQgPAAgLgLQgLgLAAgPQAAgYAVgJIAAgOIhxAAIAAAPQATAKAAAWQAAAPgLALQgLALgQAAQgPAAgLgLQgLgLAAgPQAAgWASgKIAAghQAAgIAGgGQAFgFAIAAIJxAAQAIAAAGAFQAFAGAAAIQAAAHgFAGQgGAFgIAAIicAAIAAAUQAMAKAAARQAAAPgLALQgLALgQAAQgPAAgLgLg");
	this.shape_366.setTransform(411,226.8,0.48,0.48);

	this.shape_367 = new cjs.Shape();
	this.shape_367.graphics.f("#50B961").s().p("EgUTAn4IFRlRIk1k1InQAAQgyAAgkgkQgjgkAAgyIAAoqQAAgyAjgkQAkgkAyAAIGlAAIF5l5ICsCtImdGcQgkAkgyAAIldAAIAAE2IGJAAQAzAAAjAkIGvGvQAkAjAAAzQAAAzgkAjImoGogEgEQApGQgyAAgkgkQgkgkAAgyIAAnsID0AAIAAFyIK9AAIAAm7ID0AAIAAI1QAAAygjAkQgkAkgzAAgEARUAgXQgjglAAgxIAArdQAAgyAjgkQAkgkAzAAIKWAAIAAD0IocAAIAAIwIFfFgIisCsgAPOPeIAAj0IInAAIAApvIonAAIAAjzIKhAAQAzAAAkAkQAjAkAAAxIAANjQAAAzgjAjQgkAkgzAAgA7HA/QgyAAgkgjQgjgjAAgzIAAv3IB5AAIAAh6IDDAAIEKkLIAAleQAAgyAkgkIEJkKImDmDICsitIGEGEIE5k5QAkgkAyAAISNAAQAzAAAkAkIHCHCIHVAAIAAD0IoIAAQgxAAglgjInCnDIwpAAIqnKoIAAFeQAAAzgkAjIlSFSQgkAkgyAAIh7AAIAAMEILpAAIAADyg");
	this.shape_367.setTransform(336.6,234,0.48,0.48);

	this.shape_368 = new cjs.Shape();
	this.shape_368.graphics.f("#00A27D").s().p("EgGEAu3QklAAkMhxQkChujIjHQjHjIhukCQhykMAAklMAAAgwsQAAkkBykMQBukCDHjIQDIjHEChuQEMhxElAAIMKAAQEkAAEMBxQECBuDIDHQDHDIBuECQBxEMAAEkMAAAAwsQABElhyEMQhuECjHDIQjIDHkCBuQkMBxkkAAgArf9vQiPCPAADKMAAAAwsQAADLCPCPQCQCQDLAAIMKAAQDKAACQiQQCPiPAAjLMAAAgwsQAAjKiPiPQiQiQjKAAIsKAAQjLAAiQCQg");
	this.shape_368.setTransform(337.8,232.4,0.48,0.48);

	this.shape_369 = new cjs.Shape();
	this.shape_369.graphics.f("#95A9AF").s().p("EgMkAv7QEggHEIhvQEOh0DRjQQDRjRBzkPQB2kYAAkzMAAAgwsQAAkyh2kYQhzkPjRjQQjRjRkOhzQkIhwkggHIBmAAQEyAAEYB3QEOBzDRDRQDRDQBzEPQB2EYAAEyMAAAAwsQAAEzh2EYQhzEPjRDRQjRDQkOB0QkYB2kyAAg");
	this.shape_369.setTransform(409.1,232.4,0.48,0.48);

	this.shape_370 = new cjs.Shape();
	this.shape_370.graphics.f("#95A9AF").s().p("ACTe8QitAAh8h8Qh7h7AAivMAAAgwsQAAiuB7h7QB8h8CtAAIB/AAQioADh4B5Qh7B7AACuMAAAAwsQAACvB7B7QB4B5CoADg");
	this.shape_370.setTransform(324.4,232.4,0.48,0.48);

	this.shape_371 = new cjs.Shape();
	this.shape_371.graphics.f("#AFBABD").s().p("EgGFAv7QkyAAkYh2QkPh0jRjQQjRjRhzkPQh2kYAAkzMAAAgwsQAAkyB2kYQBzkPDRjQQDRjREPhzQEYh3EyAAIMLAAQEyAAEYB3QEPBzDRDRQDRDQBzEPQB2EYAAEyMAAAAwsQAAEzh2EYQhzEPjRDRQjRDQkPB0QkYB2kyAAgAqu8/Qh8B8AACtMAAAAwsQAACvB8B7QB7B8CuAAIMLAAQCuAAB7h8QB8h7AAivMAAAgwsQAAith8h8Qh7h8iuAAIsLAAQiuAAh7B8g");
	this.shape_371.setTransform(356.7,232.4,0.48,0.48);

	this.shape_372 = new cjs.Shape();
	this.shape_372.graphics.f("#D6853A").s().p("AA7BtIioinQgFgGAAgHQAAgHAFgFIAagaQAFgFAHAAQAIAAAFAFICnCoQAGAFAAAHQAAAIgGAFIgZAZQgFAGgHAAQgIAAgFgGg");
	this.shape_372.setTransform(335.9,325.7,0.48,0.48);

	this.shape_373 = new cjs.Shape();
	this.shape_373.graphics.f("#D6853A").s().p("AA7BtIioinQgFgGAAgHQAAgHAFgFIAagaQAFgFAHAAQAIAAAFAFICnCoQAGAFAAAHQAAAIgGAFIgZAZQgFAGgHAAQgIAAgFgGg");
	this.shape_373.setTransform(342.5,325.7,0.48,0.48);

	this.shape_374 = new cjs.Shape();
	this.shape_374.graphics.f("#D6853A").s().p("AA7BtIioinQgFgGAAgHQAAgHAFgFIAagaQAFgFAHAAQAIAAAFAFICnCoQAGAFAAAHQAAAIgGAFIgZAZQgFAGgHAAQgIAAgFgGg");
	this.shape_374.setTransform(349.1,325.7,0.48,0.48);

	this.shape_375 = new cjs.Shape();
	this.shape_375.graphics.f("#D6853A").s().p("AA7BtIioinQgFgGAAgHQAAgHAFgFIAagaQAFgFAHAAQAIAAAFAFICnCoQAGAFAAAHQAAAIgGAFIgZAZQgFAGgHAAQgIAAgFgGg");
	this.shape_375.setTransform(355.7,325.7,0.48,0.48);

	this.shape_376 = new cjs.Shape();
	this.shape_376.graphics.f("#FFFFFF").s().p("EgGFAv7QkyAAkYh2QkPh0jRjQQjRjRhzkPQh2kYAAkzMAAAgwsQAAkyB2kYQBzkPDRjQQDRjREPhzQEYh3EyAAIMLAAQEyAAEYB3QEPBzDRDRQDRDQByEPQB3EYAAEyMAAAAwsQAAEzh3EYQhyEPjRDRQjRDQkPB0QkYB2kyAAgEgObgsGQj2Bpi+C9Qi+C+hpD3QhsD/AAEWMAAAAwsQAAEYBsD/QBpD2C+C+QC+C+D2BpQD/BsEXAAIMLAAQEWAAD/hsQD3hpC+i+QC+i+Boj2QBsj/AAkYMAAAgwsQAAkWhsj/Qhoj3i+i+Qi+i9j3hpQj/hskWAAIsLAAQkXAAj/BsgEgGFAhEQjmAAikikQijijAAjnMAAAgwsQAAjmCjijQCkijDmgBIMLAAQDmABCjCjQCkCkAADlMAAAAwsQAADnikCjQijCkjmAAgAqv8/Qh7B8AACtMAAAAwsQAACvB7B7QB8B8CuAAIMLAAQCuAAB7h8QB8h7AAivMAAAgwsQAAith8h8Qh7h8iuAAIsLAAQiuAAh8B8g");
	this.shape_376.setTransform(337.8,232.4,0.48,0.48);

	this.shape_377 = new cjs.Shape();
	this.shape_377.graphics.f("#DEE7EB").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAJAPgEAQQgBAIgFAHQgNATgWAAQgEAAgFgCg");
	this.shape_377.setTransform(140.7,108,0.48,0.48);

	this.shape_378 = new cjs.Shape();
	this.shape_378.graphics.f("#74C050").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgPAMgKQAMgJAOABIAHAAIABABIABAAQARAEAJAPQAJAPgEAQQgBAHgFAIQgNASgWAAIgJgBg");
	this.shape_378.setTransform(138,119.5,0.48,0.48);

	this.shape_379 = new cjs.Shape();
	this.shape_379.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOABIAHAAIABABIABAAQARAEAJAPQAJAPgEAQQgBAHgFAIQgNASgWAAIgJgBg");
	this.shape_379.setTransform(135.3,131,0.48,0.48);

	this.shape_380 = new cjs.Shape();
	this.shape_380.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgKgQAEgQQAEgPAMgJQAMgJAOAAIAHABIABABIABAAQARAEAJAPQAJAPgEAQQgBAHgFAIQgNASgWAAIgJgBg");
	this.shape_380.setTransform(133.9,136.7,0.48,0.48);

	this.shape_381 = new cjs.Shape();
	this.shape_381.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIABgJQAEgRAPgJQAPgJAQAEIACAAQAQAEAJAPQAJAPgEAQQgCAIgFAHQgMASgWAAIgJgBg");
	this.shape_381.setTransform(136.6,125.2,0.48,0.48);

	this.shape_382 = new cjs.Shape();
	this.shape_382.graphics.f("#A0CD48").s().p("AgJAqQgRgEgJgPQgKgPAFgQQAEgSAPgJQAPgJAPAEQASAEAJAPQAJAPgDAQQgEAPgMAJQgLAJgPAAIgJgBg");
	this.shape_382.setTransform(139.3,113.7,0.48,0.48);

	this.shape_383 = new cjs.Shape();
	this.shape_383.graphics.f("#DEE7EB").s().p("AgJApIgIgCIAAgBQgHgDgGgFQgMgNAAgRQAAgRAMgNQAHgGAJgDIAFgCIABAAQAIgCAKACQARAEAJAPQAKAPgEAQQgEAPgLAKQgMAJgPAAg");
	this.shape_383.setTransform(142,102.2,0.48,0.48);

	this.shape_384 = new cjs.Shape();
	this.shape_384.graphics.f("#DEE7EB").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAPgEAQQgCAJgFAGQgNATgWAAQgEAAgFgCg");
	this.shape_384.setTransform(134.6,108,0.48,0.48);

	this.shape_385 = new cjs.Shape();
	this.shape_385.graphics.f("#DEE7EB").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgPAMgKQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_385.setTransform(131.9,119.5,0.48,0.48);

	this.shape_386 = new cjs.Shape();
	this.shape_386.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_386.setTransform(129.2,131,0.48,0.48);

	this.shape_387 = new cjs.Shape();
	this.shape_387.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgKgQAEgQQAEgPAMgJQAMgJAOAAIAHABIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_387.setTransform(127.9,136.7,0.48,0.48);

	this.shape_388 = new cjs.Shape();
	this.shape_388.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIABgJQAEgRAPgJQAQgJAQAEIABAAQAQAEAJAPQAJAPgEAQQgBAGgGAJQgMASgWAAIgJgBg");
	this.shape_388.setTransform(130.5,125.2,0.48,0.48);

	this.shape_389 = new cjs.Shape();
	this.shape_389.graphics.f("#DEE7EB").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgSAPgJQAQgJAQAEQARAEAJAPQAJAPgEAQQgDAPgMAJQgLAJgPAAIgJgBg");
	this.shape_389.setTransform(133.2,113.7,0.48,0.48);

	this.shape_390 = new cjs.Shape();
	this.shape_390.graphics.f("#DEE7EB").s().p("AgJApIgIgCIAAgBQgHgDgGgFQgMgNAAgRQAAgRAMgNQAGgGAKgDIAFgCIABAAQAIgCAKACQARAEAJAPQAKAPgEAQQgEAPgLAKQgMAJgPAAg");
	this.shape_390.setTransform(135.9,102.2,0.48,0.48);

	this.shape_391 = new cjs.Shape();
	this.shape_391.graphics.f("#DEE7EB").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAPgEAQQgCAJgFAGQgNATgWAAIgJgCg");
	this.shape_391.setTransform(128.5,108,0.48,0.48);

	this.shape_392 = new cjs.Shape();
	this.shape_392.graphics.f("#74C050").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgPAMgKQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_392.setTransform(125.8,119.5,0.48,0.48);

	this.shape_393 = new cjs.Shape();
	this.shape_393.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_393.setTransform(123.1,131,0.48,0.48);

	this.shape_394 = new cjs.Shape();
	this.shape_394.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgKgQAEgQQAEgPAMgJQAMgJAOAAIAHABIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_394.setTransform(121.8,136.7,0.48,0.48);

	this.shape_395 = new cjs.Shape();
	this.shape_395.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIABgJQAEgRAPgJQAQgJAQAEIABAAQARAEAJAPQAJAPgEAQQgCAIgGAHQgMASgWAAIgJgBg");
	this.shape_395.setTransform(124.5,125.2,0.48,0.48);

	this.shape_396 = new cjs.Shape();
	this.shape_396.graphics.f("#DEE7EB").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgSAPgJQAQgJAQAEQARADAJAQQAKAPgEAQQgEAPgMAJQgLAJgPAAIgJgBg");
	this.shape_396.setTransform(127.1,113.7,0.48,0.48);

	this.shape_397 = new cjs.Shape();
	this.shape_397.graphics.f("#DEE7EB").s().p("AgIApIgIgCIgBgBQgHgDgGgFQgMgNAAgRQAAgRAMgNQAGgGAKgDIAFgCIABAAQAJgCAJACQARAEAJAPQAKAPgEAQQgEAPgLAKQgMAJgPAAQgEAAgEgCg");
	this.shape_397.setTransform(129.8,102.2,0.48,0.48);

	this.shape_398 = new cjs.Shape();
	this.shape_398.graphics.f("#DEE7EB").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAPgEAQQgCAJgFAGQgNATgWAAg");
	this.shape_398.setTransform(122.4,108,0.48,0.48);

	this.shape_399 = new cjs.Shape();
	this.shape_399.graphics.f("#74C050").s().p("AgJAqQgRgEgJgPQgJgPADgQQAEgPAMgKQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_399.setTransform(119.7,119.5,0.48,0.48);

	this.shape_400 = new cjs.Shape();
	this.shape_400.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgJgPADgRQAEgPAMgJQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_400.setTransform(117,131,0.48,0.48);

	this.shape_401 = new cjs.Shape();
	this.shape_401.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgJgPADgRQAEgPAMgJQAMgJAOAAIAHABIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_401.setTransform(115.7,136.7,0.48,0.48);

	this.shape_402 = new cjs.Shape();
	this.shape_402.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIABgJIABAAQAEgRAPgJQAOgJARAEIABAAQARAEAJAPQAJAPgEAQQgCAIgGAHQgMASgWAAIgJgBg");
	this.shape_402.setTransform(118.4,125.2,0.48,0.48);

	this.shape_403 = new cjs.Shape();
	this.shape_403.graphics.f("#A0CD48").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgSAPgJQAQgJAQAEQARADAJAQQAKAPgEAQQgEAOgMAKQgLAJgPAAIgJgBg");
	this.shape_403.setTransform(121,113.7,0.48,0.48);

	this.shape_404 = new cjs.Shape();
	this.shape_404.graphics.f("#DEE7EB").s().p("AgIApIgIgCIgBgBQgGgCgHgGQgMgNAAgRQAAgRAMgNQAHgGAJgDIAGgCIAAAAQAIgCAKACQARAEAKAPQAJAPgEAQQgEAPgLAKQgMAJgPAAg");
	this.shape_404.setTransform(123.7,102.2,0.48,0.48);

	this.shape_405 = new cjs.Shape();
	this.shape_405.graphics.f("#CADB3C").s().p("AgJApQgRgDgKgPQgIgPAEgRQADgPAMgJQAMgJAOAAIAHABIACAAQARAEAKAPQAIAPgEAQQgBAJgGAGQgLATgXAAg");
	this.shape_405.setTransform(116.3,108,0.48,0.48);

	this.shape_406 = new cjs.Shape();
	this.shape_406.graphics.f("#74C050").s().p("AgJAqQgSgEgJgPQgIgPAEgQQADgPAMgKQAMgJAOABIAHAAIABABIABAAQARAEAJAPQAJAPgDAQQgCAIgGAHQgLASgXAAIgJgBg");
	this.shape_406.setTransform(113.6,119.5,0.48,0.48);

	this.shape_407 = new cjs.Shape();
	this.shape_407.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOABIAHAAIABABIABAAQARAEAJAPQAKAPgEAQQgCAIgFAHQgNASgWAAIgJgBg");
	this.shape_407.setTransform(110.9,131,0.48,0.48);

	this.shape_408 = new cjs.Shape();
	this.shape_408.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIABABIABAAQARAEAKAPQAJAPgEAQQgCAIgFAHQgNASgWAAIgJgBg");
	this.shape_408.setTransform(109.6,136.7,0.48,0.48);

	this.shape_409 = new cjs.Shape();
	this.shape_409.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIACgJQAEgRAPgJQAPgJAQAEIABAAQARAEAJAPQAJAPgEAQQgCAIgGAHQgMASgWAAIgJgBg");
	this.shape_409.setTransform(112.3,125.2,0.48,0.48);

	this.shape_410 = new cjs.Shape();
	this.shape_410.graphics.f("#A0CD48").s().p("AgJAqQgRgEgJgPQgJgPAEgQQAEgRAPgKQAPgJAQAEQARAEAJAPQAKAPgEAQQgEAPgLAJQgMAJgPAAIgJgBg");
	this.shape_410.setTransform(115,113.7,0.48,0.48);

	this.shape_411 = new cjs.Shape();
	this.shape_411.graphics.f("#F8EE59").s().p("AgJApIgIgCIgBgBQgGgDgGgFQgMgNAAgRQAAgRAMgNQAGgGAKgDIAFgCIABAAQAIgCAKACQARAEAJAPQAKAPgEAQQgEAPgMAKQgLAJgPAAg");
	this.shape_411.setTransform(117.7,102.2,0.48,0.48);

	this.shape_412 = new cjs.Shape();
	this.shape_412.graphics.f("#DEE7EB").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAJAPgEAQQgBAIgFAHQgNATgWAAQgEAAgFgCg");
	this.shape_412.setTransform(110.2,108,0.48,0.48);

	this.shape_413 = new cjs.Shape();
	this.shape_413.graphics.f("#74C050").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgPAMgKQAMgJAOABIAHAAIABABIABAAQARAEAJAPQAJAPgEAQQgBAHgFAIQgNASgWAAIgJgBg");
	this.shape_413.setTransform(107.5,119.5,0.48,0.48);

	this.shape_414 = new cjs.Shape();
	this.shape_414.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOABIAHAAIABABIABAAQARAEAJAPQAJAPgEAQQgBAHgFAIQgNASgWAAIgJgBg");
	this.shape_414.setTransform(104.8,131,0.48,0.48);

	this.shape_415 = new cjs.Shape();
	this.shape_415.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgKgQAEgQQAEgPAMgJQAMgJAOAAIAHABIABABIABAAQARAEAJAPQAJAPgEAQQgBAHgFAIQgNASgWAAIgJgBg");
	this.shape_415.setTransform(103.5,136.7,0.48,0.48);

	this.shape_416 = new cjs.Shape();
	this.shape_416.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIABgJQAEgRAPgJQAPgJAQAEIACAAQAQAEAJAPQAJAPgEAQQgCAIgFAHQgMASgWAAIgJgBg");
	this.shape_416.setTransform(106.2,125.2,0.48,0.48);

	this.shape_417 = new cjs.Shape();
	this.shape_417.graphics.f("#A0CD48").s().p("AgJAqQgRgEgJgPQgKgPAFgQQAEgSAPgJQAPgJAPAEQASAEAJAPQAJAPgDAQQgEAPgMAJQgLAJgPAAIgJgBg");
	this.shape_417.setTransform(108.9,113.7,0.48,0.48);

	this.shape_418 = new cjs.Shape();
	this.shape_418.graphics.f("#DEE7EB").s().p("AgJApIgIgCIAAgBQgHgDgGgFQgMgNAAgRQAAgRAMgNQAHgGAJgDIAFgCIABAAQAIgCAKACQARAEAJAPQAKAPgEAQQgEAPgLAKQgMAJgPAAIgJgCg");
	this.shape_418.setTransform(111.6,102.2,0.48,0.48);

	this.shape_419 = new cjs.Shape();
	this.shape_419.graphics.f("#DEE7EB").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAPgEAQQgCAJgFAGQgNATgWAAQgEAAgFgCg");
	this.shape_419.setTransform(104.1,108,0.48,0.48);

	this.shape_420 = new cjs.Shape();
	this.shape_420.graphics.f("#DEE7EB").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgPAMgKQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_420.setTransform(101.4,119.5,0.48,0.48);

	this.shape_421 = new cjs.Shape();
	this.shape_421.graphics.f("#00AC58").s().p("AgJAqQgRgEgJgPQgKgPAEgRQAEgPAMgJQAMgJAOABIAHAAIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_421.setTransform(98.8,131,0.48,0.48);

	this.shape_422 = new cjs.Shape();
	this.shape_422.graphics.f("#00A559").s().p("AgJAqQgRgEgJgPQgKgQAEgQQAEgPAMgJQAMgJAOAAIAHABIACABIAAAAQARAEAJAPQAKAPgEAQQgCAHgFAIQgNASgWAAIgJgBg");
	this.shape_422.setTransform(97.4,136.7,0.48,0.48);

	this.shape_423 = new cjs.Shape();
	this.shape_423.graphics.f("#31B455").s().p("AgJAqQgPgEgJgMQgJgMAAgOIABgJQAEgRAPgJQAQgJAQAEIABAAQAQAEAJAPQAJAPgEAQQgBAGgGAJQgMASgWAAIgJgBg");
	this.shape_423.setTransform(100.1,125.2,0.48,0.48);

	this.shape_424 = new cjs.Shape();
	this.shape_424.graphics.f("#DEE7EB").s().p("AgJAqQgRgEgJgPQgKgPAEgQQAEgSAPgJQAQgJAQAEQARAEAJAPQAJAPgEAQQgDAPgMAJQgLAJgPAAIgJgBg");
	this.shape_424.setTransform(102.8,113.7,0.48,0.48);

	this.shape_425 = new cjs.Shape();
	this.shape_425.graphics.f("#DEE7EB").s().p("AgJApIgIgCIAAgBQgHgDgGgFQgMgNAAgRQAAgRAMgNQAGgGAKgDIAFgCIABAAQAJgCAJACQARAEAJAPQAKAPgEAQQgEAPgLAKQgMAJgPAAg");
	this.shape_425.setTransform(105.5,102.2,0.48,0.48);

	this.shape_426 = new cjs.Shape();
	this.shape_426.graphics.f("#DEE7EB").s().p("Ah+AsQgOAAgJgLQgIgLADgNIADgLQADgSAPgLQAPgMASAAIDjAAQAOAAAIALQAJALgDANIgCALQgFASgOALQgOAMgTAAg");
	this.shape_426.setTransform(121.2,151,0.48,0.48);

	this.shape_427 = new cjs.Shape();
	this.shape_427.graphics.f("#AFBABD").s().p("AiTA5QgOAAgIgLQgJgLADgOIAJglQAEgSAOgLQAOgLASAAIEIAAQAOAAAIALQAJALgDAOIgJAlQgEASgOALQgOALgSAAg");
	this.shape_427.setTransform(121.8,151.6,0.48,0.48);

	this.shape_428 = new cjs.Shape();
	this.shape_428.graphics.f("#635F5A").s().p("AiTA5QgOAAgIgLQgJgLADgOIAJglQAEgSAOgLQAOgLASAAIEIAAQAOAAAIALQAJALgDAOIgJAlQgEASgOALQgOALgSAAg");
	this.shape_428.setTransform(121.8,152.8,0.48,0.48);

	this.shape_429 = new cjs.Shape();
	this.shape_429.graphics.f("#5B6163").s().p("AhnG8QgQgDgJgPQgJgOAEgRIC7soQAEgQAPgJQAOgJAQAEQARAEAJAOQAJAOgEAQIi8MpQgDAOgLAJQgLAIgOAAg");
	this.shape_429.setTransform(118.4,166.2,0.48,0.48);

	this.shape_430 = new cjs.Shape();
	this.shape_430.graphics.f("#6E7D83").s().p("AggCgIgigHIBFk6IAiAIQAQAEAJANQAIANgEAQIg1DuQgEAQgMAIQgKAHgLAAIgIgCg");
	this.shape_430.setTransform(166.6,147.7,0.48,0.48);

	this.shape_431 = new cjs.Shape();
	this.shape_431.graphics.f("#7B898F").s().p("AAQCoIhlgWQgQgEgIgNQgJgOAEgPIA2jvQADgPAOgIQANgJAPADIBlAYQAQADAJANQAIANgEAQIg1DuQgEAQgNAJQgKAGgKAAIgJgCg");
	this.shape_431.setTransform(164.3,147.3,0.48,0.48);

	this.shape_432 = new cjs.Shape();
	this.shape_432.graphics.f("#00B4D1").s().p("AjPJkQgVAAgQgQQgPgPAAgWIBEAAQBUAABBg0QBAg1AThRICirVQARhPgyg/QgzhAhRAAIg0AAQAAgVAOgQQAQgQAWAAQAzAAAtAWQAuAWAgAoQAfAnAMAxQAKAxgKAyIijLUQgXBlhOA/QhPBAhnAAg");
	this.shape_432.setTransform(160.7,136.6,0.48,0.48);

	this.shape_433 = new cjs.Shape();
	this.shape_433.graphics.f("#48C3E0").s().p("AjPJkQgVAAgQgQQgPgPAAgWQAAgWAPgQQAQgPAVAAIAQAAQBCAAAygpQAzgoANhAICirUQAGgagGgaQgFgagRgUQgjgsg4AAQgWAAgQgPQgOgQAAgWQAAgVAOgQQAQgQAWAAQAzAAAtAWQAuAWAgAoQAfAnAMAxQAKAxgKAyIijLUQgXBlhOA/QhPBAhnAAg");
	this.shape_433.setTransform(160.7,136.6,0.48,0.48);

	this.shape_434 = new cjs.Shape();
	this.shape_434.graphics.f("#65777E").s().p("AgDBMQggAAgVgXQgXgWAAgfQAAgeAXgXQAVgVAgAAIAHAAQAfAAAWAVQAXAXAAAeQAAAfgXAWQgWAXgfAAg");
	this.shape_434.setTransform(162.3,109.7,0.48,0.48);

	this.shape_435 = new cjs.Shape();
	this.shape_435.graphics.f("#65777E").s().p("AgDBLQgfAAgXgVQgWgWAAggQAAgeAWgWQAXgXAfAAIAHAAQAfAAAXAXQAWAWAAAeQAAAggWAWQgXAVgfAAg");
	this.shape_435.setTransform(150.6,163.4,0.48,0.48);

	this.shape_436 = new cjs.Shape();
	this.shape_436.graphics.f("#6D7D83").s().p("AhXATQgUAAgSgKQgRgJgKgSIExAAQgKASgRAJQgSAKgUAAg");
	this.shape_436.setTransform(158.3,112.4,0.48,0.48);

	this.shape_437 = new cjs.Shape();
	this.shape_437.graphics.f("#6D7D83").s().p("AhWATQgVAAgRgKQgSgKgKgRIExAAQgKARgRAKQgSAKgVAAg");
	this.shape_437.setTransform(146.5,166.1,0.48,0.48);

	this.shape_438 = new cjs.Shape();
	this.shape_438.graphics.f("#7B898F").s().p("AhXBLQgfAAgWgVQgWgWAAggQAAgeAWgWQAWgXAfAAICuAAQAgAAAWAXQAWAWAAAeQAAAggWAWQgWAVggAAg");
	this.shape_438.setTransform(146.6,163.4,0.48,0.48);

	this.shape_439 = new cjs.Shape();
	this.shape_439.graphics.f("#7B898F").s().p("AhXBMQgfAAgWgXQgWgWAAgfQAAgeAWgXQAWgVAfAAICvAAQAfAAAWAVQAWAXAAAeQAAAfgWAWQgWAXgfAAg");
	this.shape_439.setTransform(158.3,109.7,0.48,0.48);

	this.shape_440 = new cjs.Shape();
	this.shape_440.graphics.f("#6E7D83").s().p("AggCgIgjgHIBGk6IAiAIQAQAEAIANQAJANgEAQIg2DuQgDAQgMAIQgKAHgKAAIgJgCg");
	this.shape_440.setTransform(171.8,155.3,0.48,0.48);

	this.shape_441 = new cjs.Shape();
	this.shape_441.graphics.f("#7B898F").s().p("AAQCpIhlgYQgQgDgJgNQgIgNAEgQIA2jvQADgPAOgIQAMgJAQADIBlAYQAQADAJAOQAIAMgEAQIg2DuQgDAQgNAJQgKAGgKAAIgJgBg");
	this.shape_441.setTransform(169.4,154.9,0.48,0.48);

	this.shape_442 = new cjs.Shape();
	this.shape_442.graphics.f("#F47939").s().p("AjOJjQgWAAgQgPQgPgQAAgVIBEAAQBUAABBg0QBAg1AThRICirVQARhPgyhAQgzg/hRAAIg0AAQAAgWAOgPQAQgPAWAAQAzAAAtAVQAtAWAhAoQAfAoAMAwQAKAxgKAyIijLUQgXBlhOA/QhPBAhngBg");
	this.shape_442.setTransform(165.5,146.2,0.48,0.48);

	this.shape_443 = new cjs.Shape();
	this.shape_443.graphics.f("#F68F4B").s().p("AjOJjQgWAAgQgPQgPgQAAgVQAAgWAPgQQAQgPAWAAIAPAAQBCAAAygpQAzgoAOhAIChrVQAGgZgGgaQgFgZgRgWQgRgUgYgLQgYgMgaAAQgWAAgQgPQgOgQAAgWQAAgWAOgPQAQgPAWAAQAzAAAtAVQAtAWAhAoQAfAoAMAwQAKAxgKAyIijLUQgXBlhOA/QhPBAhngBg");
	this.shape_443.setTransform(165.5,146.2,0.48,0.48);

	this.shape_444 = new cjs.Shape();
	this.shape_444.graphics.f("#65777E").s().p("AgDBMQgfAAgXgWQgWgXAAgfQAAgeAWgXQAXgWAfAAIAHAAQAfAAAXAWQAWAXAAAeQAAAfgWAXQgXAWgfAAg");
	this.shape_444.setTransform(155.3,173,0.48,0.48);

	this.shape_445 = new cjs.Shape();
	this.shape_445.graphics.f("#6D7D83").s().p("AhXATQgUAAgSgLQgRgIgKgSIExAAQgKARgRAJQgSALgUAAg");
	this.shape_445.setTransform(151.3,175.7,0.48,0.48);

	this.shape_446 = new cjs.Shape();
	this.shape_446.graphics.f("#7B898F").s().p("AhXBMQgfAAgWgWQgWgXAAgfQAAgeAWgXQAWgWAfAAICvAAQAfAAAWAWQAWAXAAAeQAAAfgWAXQgWAWgfAAg");
	this.shape_446.setTransform(151.3,173,0.48,0.48);

	this.shape_447 = new cjs.Shape();
	this.shape_447.graphics.f("#65777E").s().p("AgDBMQggAAgVgXQgXgVAAggQAAgeAXgXQAVgVAggBIAHAAQAgABAVAVQAXAXAAAeQAAAggXAVQgVAXggAAg");
	this.shape_447.setTransform(167.1,119.3,0.48,0.48);

	this.shape_448 = new cjs.Shape();
	this.shape_448.graphics.f("#6D7D83").s().p("AhXATQgUAAgSgLQgRgJgKgRIExAAQgKARgRAJQgSALgUAAg");
	this.shape_448.setTransform(163.1,122.1,0.48,0.48);

	this.shape_449 = new cjs.Shape();
	this.shape_449.graphics.f("#7B898F").s().p("AhXBMQgfAAgWgXQgWgVAAggQAAgeAWgXQAWgVAfgBICvAAQAfABAWAVQAWAXAAAeQAAAggWAVQgWAXgfAAg");
	this.shape_449.setTransform(163.1,119.3,0.48,0.48);

	this.shape_450 = new cjs.Shape();
	this.shape_450.graphics.f("#48C3E0").s().p("AgUCKQgJgIAAgNIAAjpQAAgNAJgIQAIgJAMAAQAMAAAJAJQAJAIAAANIAADpQAAANgJAIQgJAJgMAAQgMAAgIgJg");
	this.shape_450.setTransform(174.8,260.4,0.48,0.48);

	this.shape_451 = new cjs.Shape();
	this.shape_451.graphics.f("#48C3E0").s().p("AiTCFQg9g9AAhWQAAg0AZguQAYguArgdQAKgHANACQAMADAHAKQAHAKgCANQgDAMgKAHQgfAVgRAhQgSAgAAAlQAAA9AsArQAsAsA8AAQA9AAAsgsQArgrAAg9QAAgmgRghQgSghgggUQgKgHgDgMQgCgNAGgKQAHgKAMgDQANgCAKAGQAtAeAZAuQAZAuAAA1QAABWg9A9Qg+A9hWAAQhVAAg+g9g");
	this.shape_451.setTransform(174.8,265.3,0.48,0.48);

	this.shape_452 = new cjs.Shape();
	this.shape_452.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQAEgMAMAAIACABIABAAQAGABAEAGQADAFgBAGIgDAGQgFAGgIAAg");
	this.shape_452.setTransform(137.7,251.4,0.48,0.48);

	this.shape_453 = new cjs.Shape();
	this.shape_453.graphics.f("#00AC58").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAKAPQAJAQgFAQQgBAIgFAGQgMATgXAAg");
	this.shape_453.setTransform(138.5,252.2,0.48,0.48);

	this.shape_454 = new cjs.Shape();
	this.shape_454.graphics.f("#00AC58").s().p("AgcArIAAhVIAjAAQAJAAAGAHQAHAGAAAJIAAApQAAAJgHAHQgGAGgJAAg");
	this.shape_454.setTransform(139.9,252.2,0.48,0.48);

	this.shape_455 = new cjs.Shape();
	this.shape_455.graphics.f("#19B256").s().p("AgLA1QgWgFgMgTQgLgTAFgVQAEgTAPgLQAPgMASAAIAKACIABAAIABAAQAVAGAMASQAMATgFAVQgDAKgGAIQgQAXgcAAQgFAAgGgBg");
	this.shape_455.setTransform(139.2,252.2,0.48,0.48);

	this.shape_456 = new cjs.Shape();
	this.shape_456.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQAEgMALAAIADABIABAAQAGABAEAGQADAFgBAGIgDAGQgFAGgIAAg");
	this.shape_456.setTransform(128.2,251.4,0.48,0.48);

	this.shape_457 = new cjs.Shape();
	this.shape_457.graphics.f("#00AC58").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAQgEAQQgCAIgFAGQgNATgWAAg");
	this.shape_457.setTransform(129,252.2,0.48,0.48);

	this.shape_458 = new cjs.Shape();
	this.shape_458.graphics.f("#00AC58").s().p("AgcArIAAhVIAjAAQAJAAAHAHQAFAGAAAJIAAApQAAAJgFAHQgHAGgJAAg");
	this.shape_458.setTransform(130.4,252.2,0.48,0.48);

	this.shape_459 = new cjs.Shape();
	this.shape_459.graphics.f("#19B256").s().p("AgLA1QgWgFgMgTQgMgTAFgVQAFgTAPgLQAPgMASAAIAJACIACAAIABAAQAVAGAMASQAMATgFAVQgDAKgGAIQgQAXgcAAQgFAAgGgBg");
	this.shape_459.setTransform(129.7,252.2,0.48,0.48);

	this.shape_460 = new cjs.Shape();
	this.shape_460.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQAEgMALAAIADABIABAAQAGABAEAGQADAFgBAGIgDAGQgFAGgIAAg");
	this.shape_460.setTransform(118.7,251.4,0.48,0.48);

	this.shape_461 = new cjs.Shape();
	this.shape_461.graphics.f("#00AC58").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAQgEAQQgCAIgFAGQgNATgWAAg");
	this.shape_461.setTransform(119.5,252.2,0.48,0.48);

	this.shape_462 = new cjs.Shape();
	this.shape_462.graphics.f("#00AC58").s().p("AgbArIAAhVIAiAAQAJAAAGAHQAHAGAAAJIAAApQAAAJgHAHQgGAGgJAAg");
	this.shape_462.setTransform(120.9,252.2,0.48,0.48);

	this.shape_463 = new cjs.Shape();
	this.shape_463.graphics.f("#19B256").s().p("AgLA1QgWgFgMgTQgMgTAFgVQAFgTAPgLQAPgMASAAIAJACIACAAIABAAQAVAGAMASQALATgFAVQgCAJgGAJQgQAXgcAAIgLgBg");
	this.shape_463.setTransform(120.2,252.2,0.48,0.48);

	this.shape_464 = new cjs.Shape();
	this.shape_464.graphics.f("#E5F2DF").s().p("AgCAPQgHgBgDgFQgEgGABgGQACgFAEgEQAFgDAEAAIADABIABAAQAGABAEAGQADAFgBAGQgBADgCADQgFAGgIAAg");
	this.shape_464.setTransform(109.3,251.4,0.48,0.48);

	this.shape_465 = new cjs.Shape();
	this.shape_465.graphics.f("#00AC58").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAJAQgEAQQgBAHgFAHQgNATgWAAQgEAAgFgCg");
	this.shape_465.setTransform(110,252.2,0.48,0.48);

	this.shape_466 = new cjs.Shape();
	this.shape_466.graphics.f("#00AC58").s().p("AgbArIAAhVIAjAAQAIAAAGAHQAHAGAAAJIAAApQAAAJgHAHQgGAGgIAAg");
	this.shape_466.setTransform(111.4,252.2,0.48,0.48);

	this.shape_467 = new cjs.Shape();
	this.shape_467.graphics.f("#19B256").s().p("AgLA1QgWgFgMgTQgLgTAEgVQAFgTAQgLQAPgMARAAIAJACIACAAIABAAQAWAGALASQALATgFAVQgCAJgGAJQgQAXgcAAIgLgBg");
	this.shape_467.setTransform(110.8,252.2,0.48,0.48);

	this.shape_468 = new cjs.Shape();
	this.shape_468.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQABgFAGgEQAEgDAFAAIACABIABAAQAGABADAGQAEAFgCAGIgCAGQgFAGgIAAg");
	this.shape_468.setTransform(99.8,251.4,0.48,0.48);

	this.shape_469 = new cjs.Shape();
	this.shape_469.graphics.f("#00AC58").s().p("AgJApQgRgDgKgPQgIgPAEgRQADgPAMgJQAMgJAOAAIAHABIACAAQARAEAKAPQAIAQgEAQQgBAIgGAGQgMATgWAAQgEAAgFgCg");
	this.shape_469.setTransform(100.5,252.2,0.48,0.48);

	this.shape_470 = new cjs.Shape();
	this.shape_470.graphics.f("#00AC58").s().p("AgcArIAAhVIAjAAQAJAAAHAHQAFAGAAAJIAAApQAAAJgFAHQgHAGgJAAg");
	this.shape_470.setTransform(102,252.2,0.48,0.48);

	this.shape_471 = new cjs.Shape();
	this.shape_471.graphics.f("#19B256").s().p("AgMA1QgVgFgMgTQgMgTAGgVQAEgTAPgLQAPgMATAAIAJACIABAAIABAAQAVAGAMASQALATgEAVQgDAIgGAKQgQAXgcAAIgMgBg");
	this.shape_471.setTransform(101.3,252.2,0.48,0.48);

	this.shape_472 = new cjs.Shape();
	this.shape_472.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQAEgMALAAIADABIABAAQAGABAEAGQADAFgBAGIgDAGQgFAGgIAAg");
	this.shape_472.setTransform(90.3,251.4,0.48,0.48);

	this.shape_473 = new cjs.Shape();
	this.shape_473.graphics.f("#00AC58").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAQgEAQQgDAJgEAFQgNATgWAAIgJgCg");
	this.shape_473.setTransform(91.1,252.2,0.48,0.48);

	this.shape_474 = new cjs.Shape();
	this.shape_474.graphics.f("#00AC58").s().p("AgbArIAAhVIAiAAQAJAAAGAHQAHAGgBAJIAAApQABAJgHAHQgGAGgJAAg");
	this.shape_474.setTransform(92.5,252.2,0.48,0.48);

	this.shape_475 = new cjs.Shape();
	this.shape_475.graphics.f("#19B256").s().p("AgLA1QgWgFgMgTQgMgTAFgVQAFgTAPgLQAPgMASAAIAJACIACAAIABAAQAVAGAMASQAMATgFAVQgDAKgGAIQgQAXgcAAQgFAAgGgBg");
	this.shape_475.setTransform(91.8,252.2,0.48,0.48);

	this.shape_476 = new cjs.Shape();
	this.shape_476.graphics.f("#E5F2DF").s().p("AgDAPQgGgBgEgFQgDgGABgGQAEgMALAAIADABIABAAQAGABAEAGQADAFgBAGIgDAGQgFAGgIAAg");
	this.shape_476.setTransform(80.8,251.4,0.48,0.48);

	this.shape_477 = new cjs.Shape();
	this.shape_477.graphics.f("#00AC58").s().p("AgJApQgRgDgJgPQgKgPAEgRQAEgPAMgJQAMgJAOAAIAHABIACAAQARAEAJAPQAKAQgEAQQgCAIgFAGQgNATgWAAg");
	this.shape_477.setTransform(81.6,252.2,0.48,0.48);

	this.shape_478 = new cjs.Shape();
	this.shape_478.graphics.f("#00AC58").s().p("AgcArIAAhVIAjAAQAJAAAHAHQAFAGABAJIAAApQgBAJgFAHQgHAGgJAAg");
	this.shape_478.setTransform(83,252.2,0.48,0.48);

	this.shape_479 = new cjs.Shape();
	this.shape_479.graphics.f("#19B256").s().p("AgLA1QgWgFgMgTQgMgTAFgVQAFgTAPgLQAPgMASAAIAJACIACAAIABAAQAVAGAMASQALATgFAVQgCAJgGAJQgQAXgcAAIgLgBg");
	this.shape_479.setTransform(82.3,252.2,0.48,0.48);

	this.shape_480 = new cjs.Shape();
	this.shape_480.graphics.f("#FEFAD4").s().p("Aj/APQgHAAAAgIIAAgOQAAgHAHAAIH/AAQADAAACADQACABAAADIAAAOQAAADgCADQgCACgDAAg");
	this.shape_480.setTransform(200.3,202.2,0.48,0.48);

	this.shape_481 = new cjs.Shape();
	this.shape_481.graphics.f("#FCCDB3").s().p("AgGAcQgHgCgEgHQgEgGABgIIAFgSQACgIAGgEQAHgEAGACQAIACAEAGQAEAHgCAIIgEASQgCAGgFAEQgFAEgFAAg");
	this.shape_481.setTransform(97,166.7,0.48,0.48);

	this.shape_482 = new cjs.Shape();
	this.shape_482.graphics.f("#FCCDB3").s().p("AgZBvQgIgCgEgGQgEgHACgIIAqi4QACgIAHgEQAGgEAIACQAHACAEAGQAFAHgCAIIgqC4QgEAOgPAAg");
	this.shape_482.setTransform(95.2,174.7,0.48,0.48);

	this.shape_483 = new cjs.Shape();
	this.shape_483.graphics.f("#FFD93E").s().p("AhkE2QBGgKAug1QAwg2gBhIIAAjwQABhJgwg1Qgug2hGgKQAGgCAFAAQBPAAA3A4QA4A4AABQIAADwQAABPg4A4Qg3A4hPAAQgHAAgEgCg");
	this.shape_483.setTransform(220.3,216.2,0.48,0.48);

	this.shape_484 = new cjs.Shape();
	this.shape_484.graphics.f("#FBF064").s().p("AhnEtQgLgLAAgPQAAgQALgLQAMgMAPAAQAwABAhgiQAigiAAgwIAAjwQAAgxgighQghgjgwABQgPgBgMgKQgLgLAAgQQAAgQALgLQAMgLAPAAQBOAAA5A4QA4A4AABQIAADwQAABPg4A4Qg5A4hOAAQgQAAgLgLg");
	this.shape_484.setTransform(219.6,216.2,0.48,0.48);

	this.shape_485 = new cjs.Shape();
	this.shape_485.graphics.f("#DEE7EB").s().p("AABAwIgagwIAagvIAZAAIgaAvIAaAwg");
	this.shape_485.setTransform(139.8,94.6,0.48,0.48);

	this.shape_486 = new cjs.Shape();
	this.shape_486.graphics.f("#DEE7EB").s().p("AABAwIgbgwIAbgvIAZAAIgbAvIAbAwg");
	this.shape_486.setTransform(108.2,94.6,0.48,0.48);

	this.shape_487 = new cjs.Shape();
	this.shape_487.graphics.f("#697579").s().p("AEuAwIgcgwIAcgvIA3AAIAcAvIgcAwgAlkAwIgcgwIAcgvIA3AAIAcAvIgcAwg");
	this.shape_487.setTransform(125.4,94.6,0.48,0.48);

	this.shape_488 = new cjs.Shape();
	this.shape_488.graphics.f("#DEE7EB").s().p("AgDFtQgWgBgPgPQgPgPAAgVIAAgaQAAgVAPgPQAPgPAWAAIA7AAQgVAAgOAPQgPAPAAAVIAAAaQAAAVAPAPQAOAPAVABgAgDClQgWgBgPgPQgPgPAAgVIAAgaQAAgVAPgPQAPgPAWAAIA7AAQgVAAgOAPQgPAPAAAVIAAAaQAAAVAPAPQAOAPAVABgAgDgjQgWAAgPgPQgPgPAAgVIAAgZQAAgWAPgPQAPgPAWAAIA7AAQgVAAgOAPQgPAPAAAWIAAAZQAAAVAPAPQAOAPAVAAgAgDjrQgWAAgPgPQgPgPAAgWIAAgYQAAgWAPgPQAPgPAWAAIA7AAQgVAAgOAPQgPAPAAAWIAAAYQAAAWAPAPQAOAPAVAAg");
	this.shape_488.setTransform(163.6,349.1,0.48,0.48);

	this.shape_489 = new cjs.Shape();
	this.shape_489.graphics.f("#95A9AF").s().p("AkGFtQgLAAgHgIQgIgHAAgLIAAhNQAAgLAIgIQAHgHALAAIINAAQALAAAHAHQAIAIAAALIAABNQAAALgIAHQgHAIgLAAgAkGClQgLAAgHgIQgIgIAAgKIAAhOQAAgKAIgIQAHgHALAAIINAAQALAAAHAHQAIAIAAAKIAABOQAAAKgIAIQgHAIgLAAgAkGgjQgLAAgHgIQgIgHAAgLIAAhMQAAgLAIgHQAHgIALAAIINAAQALAAAHAIQAIAHAAALIAABMQAAALgIAHQgHAIgLAAgAkGjrQgLAAgHgIQgIgHAAgLIAAhMQAAgLAIgIQAHgHALAAIINAAQALAAAHAHQAIAIAAALIAABMQAAALgIAHQgHAIgLAAg");
	this.shape_489.setTransform(174.8,349.1,0.48,0.48);

	this.shape_490 = new cjs.Shape();
	this.shape_490.graphics.f("#FFFFFF").s().p("EADnAsxQgLgLAAgQIAAoiQAAgQALgLQALgLAQAAQAPAAALALQALALAAAQIAAIiQAAAQgLALQgLALgPAAQgQAAgLgLgA5XOiQgPgEgIgNQgJgNAEgPIAgiJQADgPANgIQANgIAQADQAPAEAIANQAIANgDAPIggCJQgDAMgLAJQgKAIgNAAgA3+IlQgQgEgIgNQgIgNAEgPIBnm+QAEgPANgIQANgIAPADQAPAEAIANQAJANgEAPIhnG+QgDAMgLAJQgKAIgNAAgAY8GkQgqgagxAAIg/AAQgPAAgLgLQgLgLAAgQQAAgPALgLQALgLAPAAIA/AAQBHAAA8AlQANAJADAPQAEAPgIANQgLARgVAAQgLAAgJgFgADnCXQgLgLAAgPIAAhYQAAhnBKhKQBKhKBoAAIAoAAQAQAAALALQALALAAAPQAAAQgLALQgLALgQAAIgoAAQhJAAg0A0Qg0A0AABIIAABYQAAAPgLALQgLALgPAAQgQAAgLgLgA0amvQgPgEgIgNQgJgNAEgPIAzjaQAIgjAcgXQAdgWAkAAQAQAAALALQALALAAAPQAAAQgLALQgLALgQAAQgKAAgIAGQgIAGgCAKIgzDaQgDANgKAIQgLAIgNAAIgIgBgAwlq7QgPAAgLgLQgLgLAAgQQAAgPALgLQALgLAPAAIAnAAQAQAAALALQALALAAAPQAAAQgLALQgLALgQAAgAsOtYQgPgEgIgNQgIgNADgPIAOg9QAEgPANgIQANgIAPADQAQAEAIANQAIANgEAPIgOA9QgDANgKAIQgKAIgNAAIgJgBgArtvkQgPgEgIgNQgJgNAEgPIAeiBQAEgPANgIQANgJAPAEQAPAEAIANQAJANgEAPIgeCBQgDANgKAIQgLAIgMAAgAv16TQgOgTgGgXQgFgXAGgYIAShQQAEgPANgIQANgJAPAEQAPAEAJANQAIANgEAPIgSBQQgDAOAIALQAKAMgCAQQgCAPgMAKQgKAIgNAAQgTAAgLgOgEgNhgkXQgPgEgIgNQgIgNADgPIAEgSQAEgPANgIQANgIAQADQAPAEAIANQAIANgDAPIgFASQgDANgKAIQgKAIgNAAgEgNCgmZQgQgEgIgNQgIgNAEgPIAOg8QAgiKBuhXQBuhYCNAAIBnAAQAQAAALALQALALAAAQQAAAQgLAKQgLALgQAAIhnAAQhzAAhaBIQhZBHgaBwIgOA8QgDANgLAIQgKAIgNAAg");
	this.shape_490.setTransform(138.1,223.2,0.48,0.48);

	this.shape_491 = new cjs.Shape();
	this.shape_491.graphics.f("#DEE7EB").s().p("EAHEAv7QhoAAhKhJQhKhKAAhpIAA5BI6UAAQh2AAhKhcQhJhdAbhzIGj8HQAIgkAcgWQAdgXAkABIEGAAQAjAAAcgXQAcgWAIgiICbqaQALgwgegnQgfgmgxAAIimAAQgzAAgfgnQgfgoAMgxIC4sWQAgiKBuhXQBuhYCNAAIHZAAQB7AABNBhQBNBhgcB4MgKeAs/IJvAAIAAkZQAAhoBKhKQBKhJBogBIJIAAQBoABBKBJQBKBLAABnIAAEZIDFAAQBmAABIBIQBIBIAABmIAAJkQAABfhEBDQhDBDhgAAIjUAAIAAZBQAABohKBLQhKBJhoAAgAzEt0QgHAGgDAKImjcHQgKArANArQAMArAhAgQAxAvBKAAIa5AAQAOAAAJAKQAKAKAAANIAAZrQAABJAzA0QA0A0BJAAIJIAAQBJAAA0g0QAzg0AAhJIAA5rQAAgNAKgKQAJgKAOAAID/AAQBAAAAugtQAtguAAg/IAApkQAAhHgxgyQgygxhHAAIjwAAQgOAAgJgJQgKgKAAgOIAAlEQAAhIgzg1Qg0gzhJAAIpIAAQhJAAg0AzQgzA1AABIIAAFEQAAAOgKAKQgJAJgOAAIrXAAQgNAAgIgKQgIgKADgNMAKqgt1QAJgmgGgkQgFgmgUgfQgZgogpgXQgogVguAAInZAAQhyAAhaBHQhaBHgaBwIi4MXQgDANAJALQAIAKAOABICmAAQAuAAAnAVQAoAWAZAnQATAfAGAlQAFAkgJAkIiZKVQgOA8gxAnQgwAmg+AAIkGAAQgKAAgIAGg");
	this.shape_491.setTransform(139.1,232.4,0.48,0.48);

	this.shape_492 = new cjs.Shape();
	this.shape_492.graphics.f("#AFBABD").s().p("AAxBPQgbAAgSgTIhjhiQgJgKgOAAIiFAAQgGABgEgFQgFgFAAgGQAAgGAFgFQAEgEAGAAICFAAQAaAAATATIBiBiQAKAKAOAAIDLAAQAGAAAEAFQAFAEAAAGQAAAHgFAEQgEAEgGAAg");
	this.shape_492.setTransform(162.7,244.5,0.48,0.48);

	this.shape_493 = new cjs.Shape();
	this.shape_493.graphics.f("#AFBABD").s().p("Aj7BPQgGAAgEgEQgFgEAAgHQAAgGAFgEQAEgFAGAAIDLAAQAPAAAJgKIBihiQAUgTAZAAICFAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAFgGgBIiFAAQgOAAgJAKIhjBiQgSATgbAAg");
	this.shape_493.setTransform(186.8,244.5,0.48,0.48);

	this.shape_494 = new cjs.Shape();
	this.shape_494.graphics.f("#AFBABD").s().p("AB3BPQgaAAgTgTIhihiQgKgKgOAAIjLAAQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAIDLAAQAaAAATATIBjBiQAJAKAOAAICFAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAg");
	this.shape_494.setTransform(186.8,284.8,0.48,0.48);

	this.shape_495 = new cjs.Shape();
	this.shape_495.graphics.f("#AFBABD").s().p("Aj7BPQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAICFAAQANAAAKgKIBjhiQATgTAaAAIDLAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAIjLAAQgNAAgLAKIhiBiQgUATgZAAg");
	this.shape_495.setTransform(162.7,284.8,0.48,0.48);

	this.shape_496 = new cjs.Shape();
	this.shape_496.graphics.f("#AFBABD").s().p("AB3BPQgaAAgTgTIhihiQgKgKgOAAIjLAAQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAIDLAAQAbAAASATIBjBiQAJAKAOAAICFAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAg");
	this.shape_496.setTransform(186.8,322.7,0.48,0.48);

	this.shape_497 = new cjs.Shape();
	this.shape_497.graphics.f("#AFBABD").s().p("Aj7BPQgGAAgEgEQgFgFAAgGQAAgGAFgFQAEgEAGAAICFAAQANAAAKgKIBjhiQASgTAbAAIDLAAQAGAAAEAEQAFAFAAAGQAAAGgFAFQgEAEgGAAIjLAAQgNAAgLAKIhiBiQgUATgZAAg");
	this.shape_497.setTransform(162.7,322.7,0.48,0.48);

	this.shape_498 = new cjs.Shape();
	this.shape_498.graphics.f("#DEE7EB").s().p("AABAwIgagwIAagvIAZAAIgbAvIAbAwg");
	this.shape_498.setTransform(188.9,223,0.48,0.48);

	this.shape_499 = new cjs.Shape();
	this.shape_499.graphics.f("#DEE7EB").s().p("AABAwIgbgwIAbgvIAZAAIgaAvIAaAwg");
	this.shape_499.setTransform(157.3,223,0.48,0.48);

	this.shape_500 = new cjs.Shape();
	this.shape_500.graphics.f("#697579").s().p("AEuAwIgcgwIAcgvIA3AAIAcAvIgcAwgAlkAwIgcgwIAcgvIA3AAIAcAvIgcAwg");
	this.shape_500.setTransform(174.4,223,0.48,0.48);

	this.shape_501 = new cjs.Shape();
	this.shape_501.graphics.f("#FFFFFF").s().p("EAHEAv7QhoAAhKhJQhKhKAAhpIAA5BI6UAAQh2AAhKhcQhJhdAbhzIGj8HQAIgkAcgWQAdgXAkABIEGAAQAjAAAcgXQAcgWAIgiICbqaQALgwgegnQgfgmgxAAIimAAQgzAAgfgnQgfgoAMgxIC4sWQAgiKBuhXQBuhYCNAAIHZAAQB7AABNBhQBNBhgcB4MgKeAs/IJvAAIAAkZQAAhoBKhKQBKhJBogBIJIAAQBoABBKBJQBKBLAABnIAAEZIDFAAQBmAABIBIQBIBIAABmIAAJkQAABfhEBDQhDBDhgAAIjUAAIAAZBQAABohKBLQhKBJhoAAg");
	this.shape_501.setTransform(139.1,232.4,0.48,0.48);

	this.shape_502 = new cjs.Shape();
	this.shape_502.graphics.f("#6D7D83").s().p("Ag5ARQgSAAgPgKQgNgIgIgPIDfAAQgHAPgPAIQgPAKgQAAg");
	this.shape_502.setTransform(213.1,231.4,0.48,0.48);

	this.shape_503 = new cjs.Shape();
	this.shape_503.graphics.f("#65777E").s().p("AAAA9QgYAAgSgSQgSgSAAgZQAAgYASgSQASgSAYAAIABAAQAZAAARASQASASAAAYQAAAZgSASQgRASgZAAg");
	this.shape_503.setTransform(215.9,229.3,0.48,0.48);

	this.shape_504 = new cjs.Shape();
	this.shape_504.graphics.f("#7B898F").s().p("Ag5A9QgaAAgRgSQgSgSAAgZQAAgYASgSQARgSAaAAIB0AAQAZAAARASQASASAAAYQAAAZgSASQgRASgZAAg");
	this.shape_504.setTransform(213.1,229.3,0.48,0.48);

	this.shape_505 = new cjs.Shape();
	this.shape_505.graphics.f("#C4CED0").s().p("AouCUQAliDBshRQBshTCIABIHYAAQB2gBBNBbQBMBYgSB0g");
	this.shape_505.setTransform(143.2,92.3,0.48,0.48);

	this.shape_506 = new cjs.Shape();
	this.shape_506.graphics.f("#95A9AF").s().p("Ai4OeQBkgDBGhGQBJhKAAhoIAA5AIB+AAIAAZAQAABohKBKQhJBJhoAAg");
	this.shape_506.setTransform(210.8,335.2,0.48,0.48);

	this.shape_507 = new cjs.Shape();
	this.shape_507.graphics.f("#95A9AF").s().p("AilIfQBagCBAhBQBDhDAAhfIAApjQgBhmhGhIQhFhFhhgDIB2AAQBlAABIBIQBIBIAABmIAAJjQAABfhEBDQhDBDhfAAg");
	this.shape_507.setTransform(232.2,264.6,0.48,0.48);

	this.shape_508 = new cjs.Shape();
	this.shape_508.graphics.f("#95A9AF").s().p("AA7ELIAAkZQAAhohJhKQhHhHhjgDIB2AAQBnAABKBKQBKBKAABoIAAEZg");
	this.shape_508.setTransform(210.8,225.7,0.48,0.48);

	this.shape_509 = new cjs.Shape();
	this.shape_509.graphics.f("#95A9AF").s().p("AiGAZIAjhbIDqAkIgXBhg");
	this.shape_509.setTransform(160,112.1,0.48,0.48);

	this.shape_510 = new cjs.Shape();
	this.shape_510.graphics.f("#95A9AF").s().p("AiGAZIAjhbIDqAkIgWBhg");
	this.shape_510.setTransform(148.3,165.8,0.48,0.48);

	this.shape_511 = new cjs.Shape();
	this.shape_511.graphics.f("#95A9AF").s().p("AmRY9MAKegs/QAch4hNhhQhLheh2gDIB2AAQB8AABNBhQBNBhgcB4MgKeAs/g");
	this.shape_511.setTransform(150.8,161.9,0.48,0.48);

	this.shape_512 = new cjs.Shape();
	this.shape_512.graphics.f("#AFBABD").s().p("EAHEAv7QhoAAhKhJQhKhLAAhoIAA5BI6TAAQh3AAhJhcQhKhdAbhzIG29XIAgAAIDLtmIghAAIDWuWQAgiKBuhXQBvhYCNAAIHYAAQB7AABNBhQBNBhgcB4MgKeAs/IJvAAIAAkZQAAhnBKhLQBKhJBogBIJIAAQBoABBKBJQBKBKAABoIAAEZIDGAAQBlAABIBIQBIBIAABmIAAJkQAABfhEBDQhDBDhfAAIjVAAIAAZBQAABphKBKQhJBJhpAAg");
	this.shape_512.setTransform(157.9,232.4,0.48,0.48);

	this.shape_513 = new cjs.Shape();
	this.shape_513.graphics.f("#F26A36").s().p("AiKIeID9xDQAEgQAOgLQAKARgEASIj+RDQgDAQgOAKQgKgQAEgSg");
	this.shape_513.setTransform(99.8,165.3,0.48,0.48);

	this.shape_514 = new cjs.Shape();
	this.shape_514.graphics.f("#F47939").s().p("AiJJOQgSgEgKgQQgKgQAFgSID9xDQAEgTAQgJQAQgKASAEQATAEAKAQQAJAQgEASIj9RDQgEAQgMAKQgNAJgPAAIgLgBg");
	this.shape_514.setTransform(98.3,165,0.48,0.48);

	this.shape_515 = new cjs.Shape();
	this.shape_515.graphics.f("#A7DDE9").s().p("AgTBVQgHgCgEgGQgFgHACgHIAfiFQACgHAGgEQAGgFAIACQAHACAEAHQAFAGgCAIIgfCEQgCAHgEAEQgFAEgGAAg");
	this.shape_515.setTransform(86.9,176.8,0.48,0.48);

	this.shape_516 = new cjs.Shape();
	this.shape_516.graphics.f("#009FB7").s().p("AiKIeID+xEQADgQAOgKQAKARgEARIj9REQgEAQgOALQgKgQAEgTg");
	this.shape_516.setTransform(91.9,166.2,0.48,0.48);

	this.shape_517 = new cjs.Shape();
	this.shape_517.graphics.f("#00B4D1").s().p("AiJJOQgSgEgKgQQgKgQAEgSID+xEQAEgSAQgKQAQgKASAFQATAEAKAQQAJAQgEASIj9RDQgEAQgMAKQgNAJgPAAg");
	this.shape_517.setTransform(90.3,165.9,0.48,0.48);

	this.shape_518 = new cjs.Shape();
	this.shape_518.graphics.f("#95A9AF").s().p("AiJJOQgSgEgKgQQgKgQAFgSID9xDQAEgTAQgJQAQgKASAEQATAEAKAQQAJAQgEASIj9RDQgEAQgMAKQgNAJgPAAIgLgBg");
	this.shape_518.setTransform(99.8,165,0.48,0.48);

	this.shape_519 = new cjs.Shape();
	this.shape_519.graphics.f("#95A9AF").s().p("AiIJOQgTgEgJgQQgKgQAEgSID9xDQAEgTAQgJQAQgKASAEQATAEAKAQQAKAQgFASIj9RDQgDAQgNAKQgMAJgQAAIgKgBg");
	this.shape_519.setTransform(92.9,165,0.48,0.48);

	this.shape_520 = new cjs.Shape();
	this.shape_520.graphics.f("#6A787E").s().p("AgWCEIAAkHIAXAAQAJAAAHAGQAGAGAAAJIAADdQAAAJgGAGQgHAGgJAAg");
	this.shape_520.setTransform(182.6,216.1,0.48,0.48);

	this.shape_521 = new cjs.Shape();
	this.shape_521.graphics.f("#7B898F").s().p("AgmCEQgJAAgHgGQgFgGgBgJIAAjdQABgJAFgGQAHgGAJAAIBNAAQAJAAAGAGQAHAGAAAJIAADdQAAAJgHAGQgGAGgJAAg");
	this.shape_521.setTransform(180.7,216.1,0.48,0.48);

	this.shape_522 = new cjs.Shape();
	this.shape_522.graphics.f("#FFD93E").s().p("AhLCQQATgLAAgWIAAiOQAAgwAigiQAhgiAwAAIARAAQgvABggAhQgiAiAAAwIAACOQAAAOgIAKQgIAKgMADIgKgEg");
	this.shape_522.setTransform(184.4,211.9,0.48,0.48);

	this.shape_523 = new cjs.Shape();
	this.shape_523.graphics.f("#FBF064").s().p("AmICvQgMgLAAgQIAAiPQAAhOA5g4QA4g4BPAAIJDAAQAPAAALALQALALAAAPQAAAQgLALQgLALgPAAIpDAAQgwAAgiAiQgiAiAAAvIAACPQAAAQgLALQgLALgPAAQgQAAgLgLg");
	this.shape_523.setTransform(198.3,210.1,0.48,0.48);

	this.shape_524 = new cjs.Shape();
	this.shape_524.graphics.f("#00858D").s().p("AheBGQgdAAgVgVQgUgUAAgdQAAgcAUgVQAVgUAdAAIC9AAQAeAAAUAUQAUAVAAAcQAAAdgUAUQgVAVgdAAg");
	this.shape_524.setTransform(521.8,406.4,0.48,0.48);

	this.shape_525 = new cjs.Shape();
	this.shape_525.graphics.f("#00858D").s().p("AibBGQgdAAgUgVQgVgUAAgdQAAgcAVgVQAUgUAdAAIE3AAQAdAAAUAUQAVAVAAAcQAAAdgVAUQgUAVgdAAg");
	this.shape_525.setTransform(540.7,401.4,0.48,0.48);

	this.shape_526 = new cjs.Shape();
	this.shape_526.graphics.f("#00858D").s().p("AibBGQgdAAgVgUQgUgVAAgdQAAgcAUgVQAVgUAdAAIE3AAQAdAAAUAUQAVAVAAAcQAAAdgVAVQgUAUgdAAg");
	this.shape_526.setTransform(337.8,396.9,0.48,0.48);

	this.shape_527 = new cjs.Shape();
	this.shape_527.graphics.f("#00858D").s().p("EgnsABlQgpAAgegeQgdgdAAgqQAAgpAdgdQAegeApAAMBPZAAAQApAAAeAeQAdAdAAApQAAAqgdAdQgeAegpAAg");
	this.shape_527.setTransform(174.8,403.1,0.48,0.48);

	this.shape_528 = new cjs.Shape();
	this.shape_528.graphics.f("#00858D").s().p("AijBlQgqAAgdgeQgdgdgBgqQABgpAdgdQAdgeAqAAIFHAAQApAAAeAeQAdAdAAApQAAAqgdAdQgeAegpAAg");
	this.shape_528.setTransform(66.9,379.5,0.48,0.48);

	this.shape_529 = new cjs.Shape();
	this.shape_529.graphics.f("#00858D").s().p("Egx7ABlQgqAAgegeQgdgdAAgqQAAgpAdgdQAegeAqAAMBj4AAAQApAAAeAeQAdAdAAApQAAAqgdAdQgeAegpAAg");
	this.shape_529.setTransform(244.5,379.5,0.48,0.48);

	this.shape_530 = new cjs.Shape();
	this.shape_530.graphics.f("#00858D").s().p("AhgBlQgqAAgegeQgdgdAAgqQAAgpAdgdQAegeAqAAIDCAAQApAAAdAeQAeAdAAApQAAAqgeAdQgdAegpAAg");
	this.shape_530.setTransform(420.9,379.5,0.48,0.48);

	this.shape_531 = new cjs.Shape();
	this.shape_531.graphics.f("#00858D").s().p("A7xBlQgqAAgdgeQgegdAAgqQAAgpAegdQAdgeAqAAMA3jAAAQAqAAAdAeQAeAdAAApQAAAqgeAdQgdAegqAAg");
	this.shape_531.setTransform(531.6,379.5,0.48,0.48);

	this.shape_532 = new cjs.Shape();
	this.shape_532.graphics.f("#00858D").s().p("AhEBlQgqAAgdgeQgegdAAgqQAAgpAegdQAdgeAqAAICJAAQAqAAAdAeQAeAdAAApQAAAqgeAdQgdAegqAAg");
	this.shape_532.setTransform(634.7,379.5,0.48,0.48);

	this.shape_533 = new cjs.Shape();
	this.shape_533.graphics.f("#00A2AF").s().p("EhhdAJEQgaAAgTgTQgTgTAAgaQAAgbgTgTQgTgTgbAAIiYAAQgaAAgTgTQgTgTAAgaQAAgbgTgTQgTgTgaAAIjKAAQgaAAgTgTQgTgTAAgaQAAgbATgTQATgTAaAAIFdAAQAbAAATgSQATgTAAgbQAAgbgTgTQgTgSgbAAIivAAQgaAAgTgTQgTgTAAgbQAAgZgTgTQgTgTgbAAIjyAAQgbAAgTgTQgTgTAAgbQAAgaATgTQATgTAbAAIF3AAQAaAAATgTQATgTAAgbQAAgagTgTQgTgTgaAAIoSAAQgbAAgSgTQgTgTAAgaQAAgbATgTQASgTAbAAIDuAAQAbAAATgTQATgTAAgaQAAgbATgTQASgTAbAAMDVjAAAQAaAAATATQATATAAAbQAAAaATATQATATAbAAIDuAAQAaAAATATQATATAAAbQAAAagTATQgTATgaAAIoSAAQgbAAgTATQgTATAAAaQAAAbATATQATATAbAAIF3AAQAbAAATATQASATAAAaQAAAbgSATQgTATgbAAIjyAAQgbAAgTATQgTATAAAZQAAAbgTATQgTATgaAAIivAAQgbAAgTASQgTATAAAbQAAAbATATQATASAbAAIFcAAQAbAAATATQATATAAAbQAAAagTATQgTATgbAAIjJAAQgaAAgTATQgTATAAAbQAAAagTATQgTATgbAAIiYAAQgaAAgTATQgTATAAAbQAAAagTATQgTATgaAAg");
	this.shape_533.setTransform(348.7,389.6,0.48,0.48);

	this.shape_534 = new cjs.Shape();
	this.shape_534.graphics.f("#63BDC2").s().p("EghHATZQAeiJAliJMAxvAAAILLrLIAAzCMgvYAAAQBZiGBliMMAuiAAAQA5AAAoAoQAoAoAAA5IAAWDQAAA4goApIsbMcQgoAog5AAg");
	this.shape_534.setTransform(140.9,202.1,0.48,0.48);

	this.shape_535 = new cjs.Shape();
	this.shape_535.graphics.f("#63BDC2").s().p("AOLEhQhVg5gphfMgi0AAAQA7iMBBiFMAg4AAAQApheBVg6QBYg7BpAAQCRAABlBmQBnBmAACPQAACQhnBmQhlBmiRAAQhpAAhYg7gAPshgQgoApAAA3QAAA5AoAoQAoAoA4AAQA5AAApgoQAngoAAg5QAAg3gngpQgpgog5AAQg4AAgoAog");
	this.shape_535.setTransform(126.8,198.6,0.48,0.48);

	this.shape_536 = new cjs.Shape();
	this.shape_536.graphics.f("#63BDC2").s().p("EBaqAk6I2v2uQgogpAAg4IAA3RIv0v0Qg+AZhDAAQhoAAhWg5QhUg3gqhbI1HAAQgqBbhUA3QhWA5hoAAQhHAAhCgcIqJKJQgnAog5AAItlAAQgaBCgxAzQgxAzhBAbIAALYQBfAoA6BVQA8BYAABrQAACQhmBmQhmBmiQAAQg4AAg4gTIuTOUQARA0AAA3QAACQhmBmQhmBmiQAAQhqAAhYg7QhWg6goheMg4hAAAIgBhiQAAhYADhYMA4fAAAQAohfBWg5QBYg7BqAAQBPAABHAiIN8t8QgghHAAhLQAAhqA6hYQA6hUBdgpIAAraQhegpg5hWQg6hXAAhqQAAiQBmhmQBmhmCQAAQBnAABWA4QBTA2AqBaIM2AAIJlplQgWg8AAg+QAAiQBmhmQBmhmCQAAQBsAABZA9QBXA8AnBiIU5AAQAnhiBXg8QBZg9BsAAQCQAABmBmQBmBmAACQQAABDgZA/IQcQcQAoAoAAA4IAAXRIZIZIgEgkrAXWQgoAoAAA5QAAA4AoApQAoAoA5AAQA4AAApgoQAogpAAg4QAAg5gogoQgpgog4AAQg5AAgoAogAvdCOQgoAoAAA5QAAA4AoAoQAoAoA5AAQA4AAApgoQAogoAAg4QAAg5gogoQgpgog4AAQg5AAgoAogAvdzLQgoApAAA4QAAA5AoAoQAoAoA5AAQA4AAApgoQAogoAAg5QAAg4gogpQgpgog4AAQg5AAgoAogEAv9gg+QgoAoAAA5QAAA5AoAoQAoAoA5AAQA5AAAogoQAogoAAg5QAAg5gogoQgogog5AAQg5AAgoAogEAQ+gg+QgoAoAAA5QAAA5AoAoQAoAoA5AAQA5AAAogoQAogoAAg5QAAg5gogoQgogog5AAQg5AAgoAog");
	this.shape_536.setTransform(328.9,250.5,0.48,0.48);

	this.shape_537 = new cjs.Shape();
	this.shape_537.graphics.f("#63BDC2").s().p("At/NOQg4AAgpgoQgogpAAg4IAAmjIqEqEMgoSAAAQCKiLCYiHMAkpAAAQA4AAAoAoILVLUQAoAoAAA5IAAFTIJbAAIAAobQAAg5ApgnILkrmQAogoA5AAMAvKAAAQEHB8D7CWMg2TAAAIqWKUIAAJsQAAA4goApQgoAog4AAg");
	this.shape_537.setTransform(328.5,123.2,0.48,0.48);

	this.shape_538 = new cjs.Shape();
	this.shape_538.graphics.f("#63BDC2").s().p("ASDEhQhVg5gphfMgqlAAAQAOiOAUiDMAqDAAAQApheBVg6QBYg7BqAAQCRAABlBmQBmBmAACPQAACQhmBmQhlBmiRAAQhqAAhYg7gATlhgQgpApAAA3QAAA5ApAoQAoAoA4AAQA5AAAogoQAogoAAg5QAAg3gogpQgogog5AAQg4AAgoAog");
	this.shape_538.setTransform(114.9,291,0.48,0.48);

	this.shape_539 = new cjs.Shape();
	this.shape_539.graphics.f("#63BDC2").s().p("Aj1OYQhmhlAAiRQAAhqA7hXQA6hWBegpIAA05QCMgWCFgQIAAVfQBfApA5BWQA7BXAABqQAACRhmBlQhmBmiQAAQiPAAhmhmgAhgJCQgoAoAAA4QAAA5AoAoQApAoA3AAQA5AAAogoQAogoAAg5QAAg4gogoQgogog5AAQg3AAgpAog");
	this.shape_539.setTransform(304.2,64,0.48,0.48);

	this.shape_540 = new cjs.Shape();
	this.shape_540.graphics.f("#63BDC2").s().p("EAv1AcdI1415QgpgoAAg5IAAyfIquqtIynAAIAAOpQAAA5goApQgpAng4AAI1oAAIAAOuQAAA5goAoIzkTlIl5AAQAKgVARgQIVY1ZIAAv/QAAg4AogoQApgoA4AAIVoAAIAAuqQAAg5AogoQApgpA4AAIVpAAQA4AAAoApIL/L+QAoApAAA4IAASeIYSYTg");
	this.shape_540.setTransform(417.7,276.5,0.48,0.48);

	this.shape_541 = new cjs.Shape();
	this.shape_541.graphics.f("#63BDC2").s().p("ApzUDMAAAgl8QAAg5AogoQAogoA5AAIMKAAQA4AAApAoQAoAoAAA5IAAS/QBbArA3BUQA5BWAABnQAACRhmBlQhmBmiQAAQiRAAhlhmQhlhlAAiRQAAhsA9hZQA7hXBignIAAwvIn4AAMAAAAjzgAC3EiQgoAoAAA4QAAA5AoAoQAoAoA5AAQA4AAAogoQAogoAAg5QAAg4gogoQgogog4AAQg5AAgoAog");
	this.shape_541.setTransform(453.5,302.3,0.48,0.48);

	this.shape_542 = new cjs.Shape();
	this.shape_542.graphics.f("#63BDC2").s().p("AEkM5IAA1fIpIAAIAAVfIkRAAIAA3oQgBg5AogoQApgoA4AAINbAAQA4AAAoAoQAoAoABA5IAAXog");
	this.shape_542.setTransform(378.9,324.3,0.48,0.48);

	this.shape_543 = new cjs.Shape();
	this.shape_543.graphics.f("#63BDC2").s().p("As9IBQgognAAg6MAAAglnIkHnQQEcDWD8D1MAAAAk0IbBbCQAACJgGCHQgBAsgNAzg");
	this.shape_543.setTransform(611.2,229.9,0.48,0.48);

	this.shape_544 = new cjs.Shape();
	this.shape_544.graphics.f("#78CBD4").s().p("AgcAuQgXgEgHgRQgHgRANgSQAMgTAYgKQAXgLAWAFQAXAEAHARQAHARgMASQgMATgZAKQgRAHgQAAIgMgBg");
	this.shape_544.setTransform(130.5,2.3,0.48,0.48);

	this.shape_545 = new cjs.Shape();
	this.shape_545.graphics.f("#78CBD4").s().p("Ag1BUQgogIgNgfQgNgeAWgiQAXgiAsgTQArgTAoAIQApAIANAfQANAegXAiQgWAjgsASQgfANgbAAQgNAAgNgCg");
	this.shape_545.setTransform(99.8,21.4,0.48,0.48);

	this.shape_546 = new cjs.Shape();
	this.shape_546.graphics.f("#78CBD4").s().p("AibDgQhwgSghhOQghhOBBhcQBAhcB9g1QB8g1BwASQBvARAhBNQAiBOhBBcQhBBdh9A1QhdAohWAAQgdAAgbgEg");
	this.shape_546.setTransform(130.5,25.5,0.48,0.48);

	this.shape_547 = new cjs.Shape();
	this.shape_547.graphics.f("#78CBD4").s().p("Ag3AcQgWgMAAgQQAAgQAWgLQAYgMAfAAQAgAAAYAMQAWALAAAQQAAAQgWAMQgYAMggAAQgfAAgYgMg");
	this.shape_547.setTransform(494.3,36.7,0.48,0.48);

	this.shape_548 = new cjs.Shape();
	this.shape_548.graphics.f("#78CBD4").s().p("AiABAQg6gOgDgdQgDgdA1gaQA2gbBPgIQBOgJA5APQA6AOADAdQAEAdg2AaQg2AbhOAIQgcADgbAAQgtAAgkgJg");
	this.shape_548.setTransform(538.5,34.8,0.48,0.48);

	this.shape_549 = new cjs.Shape();
	this.shape_549.graphics.f("#78CBD4").s().p("AgeBWQgwgRgZgmQgYgkAMgjQANgkArgNQArgNAvARQAwASAZAlQAZAkgNAkQgNAjgrANQgSAGgTAAQgZAAgcgKg");
	this.shape_549.setTransform(508.6,56.8,0.48,0.48);

	this.shape_550 = new cjs.Shape();
	this.shape_550.graphics.f("#78CBD4").s().p("EhftA5LQi9AAiJiEQiKiCgHi9QgFiFAAiUQAD05IIzHQH3ycORuPQORuQSen1QTHoHU5gBQMIgBLtCvQLYCsKfFLQAfAQAKAeQAJAbgLAdQgLAcgaAOQgcAPghgKQunkcvbAAQmtAAmnA2QgmAFgUAcQgSAZACAgQACAiAWAVQAYAZAmAAIAMAAQLvAALcCNQLJCIKlELQMdE6KeITQKRIKHgKvQHhKwEDMaQEJMtALNXIABBXQAACUgGCJQgIC0iDB9QiDB9i1AAg");
	this.shape_550.setTransform(348.7,188.3,0.48,0.48);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_550},{t:this.shape_549},{t:this.shape_548},{t:this.shape_547},{t:this.shape_546},{t:this.shape_545},{t:this.shape_544},{t:this.shape_543},{t:this.shape_542},{t:this.shape_541},{t:this.shape_540},{t:this.shape_539},{t:this.shape_538},{t:this.shape_537},{t:this.shape_536},{t:this.shape_535},{t:this.shape_534},{t:this.shape_533},{t:this.shape_532},{t:this.shape_531},{t:this.shape_530},{t:this.shape_529},{t:this.shape_528},{t:this.shape_527},{t:this.shape_526},{t:this.shape_525},{t:this.shape_524},{t:this.shape_523},{t:this.shape_522},{t:this.shape_521},{t:this.shape_520},{t:this.shape_519},{t:this.shape_518},{t:this.shape_517},{t:this.shape_516},{t:this.shape_515},{t:this.shape_514},{t:this.shape_513},{t:this.shape_512},{t:this.shape_511},{t:this.shape_510},{t:this.shape_509},{t:this.shape_508},{t:this.shape_507},{t:this.shape_506},{t:this.shape_505},{t:this.shape_504},{t:this.shape_503},{t:this.shape_502},{t:this.shape_501},{t:this.shape_500},{t:this.shape_499},{t:this.shape_498},{t:this.shape_497},{t:this.shape_496},{t:this.shape_495},{t:this.shape_494},{t:this.shape_493},{t:this.shape_492},{t:this.shape_491},{t:this.shape_490},{t:this.shape_489},{t:this.shape_488},{t:this.shape_487},{t:this.shape_486},{t:this.shape_485},{t:this.shape_484},{t:this.shape_483},{t:this.shape_482},{t:this.shape_481},{t:this.shape_480},{t:this.shape_479},{t:this.shape_478},{t:this.shape_477},{t:this.shape_476},{t:this.shape_475},{t:this.shape_474},{t:this.shape_473},{t:this.shape_472},{t:this.shape_471},{t:this.shape_470},{t:this.shape_469},{t:this.shape_468},{t:this.shape_467},{t:this.shape_466},{t:this.shape_465},{t:this.shape_464},{t:this.shape_463},{t:this.shape_462},{t:this.shape_461},{t:this.shape_460},{t:this.shape_459},{t:this.shape_458},{t:this.shape_457},{t:this.shape_456},{t:this.shape_455},{t:this.shape_454},{t:this.shape_453},{t:this.shape_452},{t:this.shape_451},{t:this.shape_450},{t:this.shape_449},{t:this.shape_448},{t:this.shape_447},{t:this.shape_446},{t:this.shape_445},{t:this.shape_444},{t:this.shape_443},{t:this.shape_442},{t:this.shape_441},{t:this.shape_440},{t:this.shape_439},{t:this.shape_438},{t:this.shape_437},{t:this.shape_436},{t:this.shape_435},{t:this.shape_434},{t:this.shape_433},{t:this.shape_432},{t:this.shape_431},{t:this.shape_430},{t:this.shape_429},{t:this.shape_428},{t:this.shape_427},{t:this.shape_426},{t:this.shape_425},{t:this.shape_424},{t:this.shape_423},{t:this.shape_422},{t:this.shape_421},{t:this.shape_420},{t:this.shape_419},{t:this.shape_418},{t:this.shape_417},{t:this.shape_416},{t:this.shape_415},{t:this.shape_414},{t:this.shape_413},{t:this.shape_412},{t:this.shape_411},{t:this.shape_410},{t:this.shape_409},{t:this.shape_408},{t:this.shape_407},{t:this.shape_406},{t:this.shape_405},{t:this.shape_404},{t:this.shape_403},{t:this.shape_402},{t:this.shape_401},{t:this.shape_400},{t:this.shape_399},{t:this.shape_398},{t:this.shape_397},{t:this.shape_396},{t:this.shape_395},{t:this.shape_394},{t:this.shape_393},{t:this.shape_392},{t:this.shape_391},{t:this.shape_390},{t:this.shape_389},{t:this.shape_388},{t:this.shape_387},{t:this.shape_386},{t:this.shape_385},{t:this.shape_384},{t:this.shape_383},{t:this.shape_382},{t:this.shape_381},{t:this.shape_380},{t:this.shape_379},{t:this.shape_378},{t:this.shape_377},{t:this.shape_376},{t:this.shape_375},{t:this.shape_374},{t:this.shape_373},{t:this.shape_372},{t:this.shape_371},{t:this.shape_370},{t:this.shape_369},{t:this.shape_368},{t:this.shape_367},{t:this.shape_366},{t:this.shape_365},{t:this.shape_364},{t:this.shape_363},{t:this.shape_362},{t:this.shape_361},{t:this.shape_360},{t:this.shape_359},{t:this.shape_358},{t:this.shape_357},{t:this.shape_356},{t:this.shape_355},{t:this.shape_354},{t:this.shape_353},{t:this.shape_352},{t:this.shape_351},{t:this.shape_350},{t:this.shape_349},{t:this.shape_348},{t:this.shape_347},{t:this.shape_346},{t:this.shape_345},{t:this.shape_344},{t:this.shape_343},{t:this.shape_342},{t:this.shape_341},{t:this.shape_340},{t:this.shape_339},{t:this.shape_338},{t:this.shape_337},{t:this.shape_336},{t:this.shape_335},{t:this.shape_334},{t:this.shape_333},{t:this.shape_332},{t:this.shape_331},{t:this.shape_330},{t:this.shape_329},{t:this.shape_328},{t:this.shape_327},{t:this.shape_326},{t:this.shape_325},{t:this.shape_324},{t:this.shape_323},{t:this.shape_322},{t:this.shape_321},{t:this.shape_320},{t:this.shape_319},{t:this.shape_318},{t:this.shape_317},{t:this.shape_316},{t:this.shape_315},{t:this.shape_314},{t:this.shape_313},{t:this.shape_312},{t:this.shape_311},{t:this.shape_310},{t:this.shape_309},{t:this.shape_308},{t:this.shape_307},{t:this.shape_306},{t:this.shape_305},{t:this.shape_304},{t:this.shape_303},{t:this.shape_302},{t:this.shape_301},{t:this.shape_300},{t:this.shape_299},{t:this.shape_298},{t:this.shape_297},{t:this.shape_296},{t:this.shape_295},{t:this.shape_294},{t:this.shape_293},{t:this.shape_292},{t:this.shape_291},{t:this.shape_290},{t:this.shape_289},{t:this.shape_288},{t:this.shape_287},{t:this.shape_286},{t:this.shape_285},{t:this.shape_284},{t:this.shape_283},{t:this.shape_282},{t:this.shape_281},{t:this.shape_280},{t:this.shape_279},{t:this.shape_278},{t:this.shape_277},{t:this.shape_276},{t:this.shape_275},{t:this.shape_274},{t:this.shape_273},{t:this.shape_272},{t:this.shape_271},{t:this.shape_270},{t:this.shape_269},{t:this.shape_268},{t:this.shape_267},{t:this.shape_266},{t:this.shape_265},{t:this.shape_264},{t:this.shape_263},{t:this.shape_262},{t:this.shape_261},{t:this.shape_260},{t:this.shape_259},{t:this.shape_258},{t:this.shape_257},{t:this.shape_256},{t:this.shape_255},{t:this.shape_254},{t:this.shape_253},{t:this.shape_252},{t:this.shape_251},{t:this.shape_250},{t:this.shape_249},{t:this.shape_248},{t:this.shape_247},{t:this.shape_246},{t:this.shape_245},{t:this.shape_244},{t:this.shape_243},{t:this.shape_242},{t:this.shape_241},{t:this.shape_240},{t:this.shape_239},{t:this.shape_238},{t:this.shape_237},{t:this.shape_236},{t:this.shape_235},{t:this.shape_234},{t:this.shape_233},{t:this.shape_232},{t:this.shape_231},{t:this.shape_230},{t:this.shape_229},{t:this.shape_228},{t:this.shape_227},{t:this.shape_226},{t:this.shape_225},{t:this.shape_224},{t:this.shape_223},{t:this.shape_222},{t:this.shape_221},{t:this.shape_220},{t:this.shape_219},{t:this.shape_218},{t:this.shape_217},{t:this.shape_216},{t:this.shape_215},{t:this.shape_214},{t:this.shape_213},{t:this.shape_212},{t:this.shape_211},{t:this.shape_210},{t:this.shape_209},{t:this.shape_208},{t:this.shape_207},{t:this.shape_206},{t:this.shape_205},{t:this.shape_204},{t:this.shape_203},{t:this.shape_202},{t:this.shape_201},{t:this.shape_200},{t:this.shape_199},{t:this.shape_198},{t:this.shape_197},{t:this.shape_196},{t:this.shape_195},{t:this.shape_194},{t:this.shape_193},{t:this.shape_192},{t:this.shape_191},{t:this.shape_190},{t:this.shape_189},{t:this.shape_188},{t:this.shape_187},{t:this.shape_186},{t:this.shape_185},{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.instance_6},{t:this.instance_5},{t:this.instance_4}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.container, new cjs.Rectangle(0,0,1046.6,417.4), null);


// stage content:
(lib._404_device = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// 404
	this.instance = new lib.container();
	this.instance.parent = this;
	this.instance.setTransform(350,221.3,1,1,0,0,0,348.7,208.7);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(351.3,227.6,1046.6,417.4);
// library properties:
lib.properties = {
	width: 700,
	height: 430,
	fps: 30,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	handleComplete();
}
function handleComplete() {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	exportRoot = new lib._404_device();
	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;
			stage.scaleY = pRatio*sRatio;
			lastW = iw; lastH = ih; lastS = sRatio;		
		}
	}
	makeResponsive(false,'both',false,1);	
	fnStartAnimation();
}


jQuery(window).load(function(){
	init();	
});