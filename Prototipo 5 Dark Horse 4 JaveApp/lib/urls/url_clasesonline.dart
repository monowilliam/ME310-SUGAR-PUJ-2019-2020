import 'package:flutter/material.dart';
import 'package:url_launcher/url_launcher.dart';

class ClasesOnline extends StatelessWidget {
  static final links = ['Primera Clase Online 360°'];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        key: Key('123'),
        body: SafeArea(
            child: SingleChildScrollView(
                child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: links.map((link) => _urlButton(context, link)).toList(),
        ))));
  }

  Widget _urlButton(BuildContext context, String url) {
    return Container(
        padding: EdgeInsets.all(20.0),
        child: FlatButton(
          color: Theme.of(context).primaryColor,
          padding: const EdgeInsets.symmetric(horizontal: 50.0, vertical: 15.0),
          child: Text(url),
          onPressed: _launchURL,
        ));
  }
}

_launchURL() async {
  const url = 'https://versy.wtechnology.co/3d';
  if (await canLaunch(url)) {
    await launch(url);
  } else {
    throw 'Could not launch $url';
  }
}