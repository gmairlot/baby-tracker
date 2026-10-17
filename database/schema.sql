CREATE TABLE IF NOT EXISTS events (
  id           INTEGER PRIMARY KEY AUTOINCREMENT,
  type         TEXT NOT NULL CHECK (type IN ('feeding', 'diaper', 'sleep')),
  started_at   TEXT NOT NULL,
  ended_at     TEXT,
  feeding_kind TEXT CHECK (feeding_kind IN ('breast_left', 'breast_right', 'bottle')),
  duration_min INTEGER CHECK (duration_min >= 0),
  amount_ml    INTEGER CHECK (amount_ml >= 0),
  diaper_kind  TEXT CHECK (diaper_kind IN ('wet', 'dirty', 'both')),
  notes        TEXT,
  created_at   TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
);