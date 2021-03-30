const nodes = {
  nodeBody: $("#body"),
  nodeWindow: $(window),
  nodeDoc: $(document),
  nodeScroll: $("html", "body "),
};

const globalApp = {
  init() {
    globalApp.globalEventsInit();
    globalApp.executeModules();
    new WOW().init();
  },
  update($parent) {
    globalApp.imageLoader($parent);
    globalApp.executeModules($parent);
    nodes.nodeWindow.trigger("resize");
  },
  executeModules($parent) {
    $parent = $parent || nodes.nodeBody;
    $mods = $parent.find("[data-is]");
    $mods.each(function (i, thisModule) {
      const $thisModule = $(thisModule);
      const thisModuleName = $thisModule.attr("data-is");
      if ($thisModule.closest(".hidden-content").length) {
        console.log(
          "%cSkip: `" + thisModuleName + "` - module hidden.",
          "color: #444"
        );
        return true;
      }
      if (moduleApp[thisModuleName]) {
        console.log(
          "%cRun: `" + thisModuleName + "` - module executed.",
          "color:#009900;"
        );
        moduleApp[thisModuleName]($thisModule);
      } else {
        console.log(
          "%cError: `" + thisModuleName + "` - module not defined",
          "color: #ff6347"
        );
      }
    });
  },
  getRandom(min, max) {
    return Math.abs(Math.round(min - 0.5 + Math.random() * (max - min + 1)));
  },
  globalEventsInit() {
    nodes.nodeDoc.on("click", "[data-gclick]", function (e) {
      e.preventDefault();
      const $this = $(this);
      const thisAction = $this.attr("data-gclick");
      const thisValue = $this.val() || $this.data().value;
      if (globalApp.globalEventsActions[thisAction]) {
        globalApp.globalEventsActions[thisAction]($this, thisValue);
      } else {
        console.log(
          "Event: `data-gclick`, Action: `" + thisAction + "` - not defined."
        );
      }
    });
  },
  imageLoader($parent) {
    $parent = $parent || nodes.nodeBody;
    $imgs = $parent.find("[data-img]");
    let c = 0;

    $imgs.each(function (i, thisImage) {
      let img = thisImage.dataset.img;
      let tagName = thisImage.tagName.toLowerCase();

      thisImage.removeAttribute("data-img");
      if (img) {
        c++;
        if (tagName == "img") {
          thisImage.src = img;
        } else {
          thisImage.style.backgroundImage = "url(" + img + ")";
        }
      }
    });

    console.log("%cTotal image weight: " + c + "", "color:#05F;");
  },
  globalEventsActions: {
    sampleGlobalEvent($thisNode, thisValue) {
      //do something triggered on data-gclicked="sambleGlobalEvent"
      return true;
    },
  },
};

const moduleApp = {
  sampleModule($thisModule) {
    //do something triggered on data-is="sampleModule"
    return true;
  },
  testModule($thisModule) {
    console.log("1");
  },
};

document.addEventListener("DOMContentLoaded", function () {
  globalApp.init();
  setTimeout(function () {
    nodes.nodeWindow.trigger("resize");
  }, 2000);
});

nodes.nodeWindow.on("load", function () {
  nodes.nodeWindow.trigger("resize");
});
